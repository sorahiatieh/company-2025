<?php
	class DB_PAGE {
		/**
		 * @param $name
		 * @return bool|void
		 */
		function isPage($name){
			global $mysqli;
			
			$q="SELECT EXISTS(SELECT 1 FROM tbl_pages WHERE `name`='$name')";
			
			$result=$mysqli->query($q) or die($mysqli->error);
			$row=$result->fetch_row();
			
			return (bool) $row[0];
		}
		
		/**
		 * @param $name
		 * @return array|false|void|null
		 */
		function getPageDetails($name){
			global $mysqli;
			$q="select * from tbl_pages where `name`='$name'";
			$result=$mysqli->query($q) or die($mysqli->error);
			$field=$result->fetch_assoc();
			
			$result->free_result();
			
			return $field;
		}
		
		function getLinkTitle($pagename){
			$PageDetails = $this->getPageDetails($pagename);
			if(empty($PageDetails)){
				return "";
			}
			return str_ireplace(' ', '-',$PageDetails['title']).".html";
		}
	}