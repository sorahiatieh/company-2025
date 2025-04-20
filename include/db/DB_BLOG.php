<?php
	class DB_BLOG{
		/**
		 * @param $id
		 * @return bool|void
		 */
		function isBlog($wheres=array()){
			global $mysqli;
			$where='';
			
			foreach($wheres as $key=>$value){
				if($where=='')
				$where='WHERE ';
				
				$where.="`$key`='$value' AND ";
			}
			
			$where=mb_substr($where,0,mb_strlen($where)-5);
			
			$q="SELECT EXISTS(SELECT 1 FROM tbl_blogs $where)";
			
			$result=$mysqli->query($q) or die($mysqli->error);
			$row=$result->fetch_row();
			
			return (bool) $row[0];
		}
		
		/**
		 * @param $count
		 * @return array
		 */
		function getList($wheres=array(),$count=0){
			global $mysqli;
			$where='';
			
			foreach($wheres as $key=>$value){
				if($where=='')
					$where='WHERE ';
				
				$where.="`$key`='$value' AND ";
			}
			
			$where=mb_substr($where,0,mb_strlen($where)-5);
			
			$limit="";
			if($count!=0){
				$limit="LIMIT {$count}";
			}
			$q="select * from tbl_blogs $where ORDER BY `date` DESC $limit";
			
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
		 * @return array|false|void|null
		 */
		function getBlogDetails($wheres=array()){
			global $mysqli;
			$where='';
			
			foreach($wheres as $key=>$value){
				if($where=='')
					$where='WHERE ';
				
				$where.="`$key`='$value' AND ";
			}
			
			$where=mb_substr($where,0,mb_strlen($where)-5);
			
			$q="select * from tbl_blogs $where";
			$result=$mysqli->query($q) or die($mysqli->error);
			$field=$result->fetch_assoc();
			
			$result->free_result();
			
			return $field;
		}
	}
