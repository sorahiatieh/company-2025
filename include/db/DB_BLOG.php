<?php
	class DB_BLOG{
		/**
		 * @param $count
		 * @return array
		 */
		function getList($count=0){
			global $mysqli;
			
			$limit="";
			if($count!=0){
				$limit="LIMIT {$count}";
			}
			$q="select * from tbl_blogs where `enable`=1 ORDER BY `date` DESC $limit";
			
			$output=array();
			$result = $mysqli->query($q);
			while($fields=$result->fetch_assoc()){
				$output[]=$fields;
			}
			$result->free_result();
			
			return $output;
		}
	}
