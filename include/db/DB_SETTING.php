<?php
	class DB_SETTING{
		/**
		 * @param $name
		 * @return mixed|string
		 */
		function getSetting($name){
			global $mysqli;
			
			$q="select `value` from tbl_settings where `name`='$name' LIMIT 1";
			
			$result = $mysqli->query($q);
			
			/*if($result->num_rows==0)
				return "";*/
			
			$row=$result->fetch_row();
			return $row[0];
		}
	}
