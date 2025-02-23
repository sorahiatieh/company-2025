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
		
		/**
		 * @param $id
		 * @return bool|void
		 */
		function isBlog($id){
			global $mysqli;
			
			$q="SELECT EXISTS(SELECT 1 FROM tbl_blogs WHERE `id`='$id')";
			
			$result=$mysqli->query($q) or die($mysqli->error);
			$row=$result->fetch_row();
			
			return (bool) $row[0];
		}
		
		/**
		 * @param $id
		 * @return array|false|void|null
		 */
		function getBlogDetails($id){
			global $mysqli;
			$q="select * from tbl_blogs where `id`='$id'";
			$result=$mysqli->query($q) or die($mysqli->error);
			$field=$result->fetch_assoc();
			
			$result->free_result();
			
			return $field;
		}
	}
