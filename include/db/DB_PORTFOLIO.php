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
		
		function isPortfolio($id){
			global $mysqli;
			
			$q="SELECT EXISTS(SELECT 1 FROM tbl_portfolioes WHERE `id`='$id')";
			
			$result=$mysqli->query($q) or die($mysqli->error);
			$row=$result->fetch_row();
			
			return (bool) $row[0];
		}
		
		/**
		 * @param $id
		 * @return array|false|void|null
		 */
		function getPortfolioDetails($id){
			global $mysqli;
			$q="select * from tbl_portfolioes where `id`='$id'";
			$result=$mysqli->query($q) or die($mysqli->error);
			$field=$result->fetch_assoc();
			
			$result->free_result();
			
			return $field;
		}
	}
