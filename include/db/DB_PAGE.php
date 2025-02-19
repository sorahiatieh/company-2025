<?php
	class DB_PAGE {
		function isPage($name){
			global $mysqli;
			
			$q="SELECT EXISTS(SELECT 1 FROM tbl_pages WHERE `name`='$name')";
			
			$result=$mysqli->query($q) or die($mysqli->error);
			$row=$result->fetch_row();
			
			return (bool) $row[0];
		}
		
		function getPageDetails($name){
			global $mysqli;
			$q="select * from tbl_pages where `name`='$name'";
			$result=$mysqli->query($q) or die($mysqli->error);
			$field=$result->fetch_assoc();
			
			$result->free_result();
			
			return $field;
		}
	}