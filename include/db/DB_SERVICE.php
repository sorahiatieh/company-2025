<?php
	class DB_SERVICE{
		function getList(){
			global $mysqli;
			$q="select * from tbl_services where `enable`=1";
			
			$output=array();
			$result = $mysqli->query($q);
			while($fields=$result->fetch_assoc()){
				$output[]=$fields;
			}
			$result->free_result();
			
			return $output;
		}
	}
