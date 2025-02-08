<?php
	class DB_PORTFOLIO{
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
			$q="select * from tbl_portfolioes where `enable`=1 $limit";
			
			$output=array();
			$result = $mysqli->query($q);
			while($fields=$result->fetch_assoc()){
				$output[]=$fields;
			}
			$result->free_result();
			
			return $output;
		}
	}
