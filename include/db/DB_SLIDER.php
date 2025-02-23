<?php
	
	class DB_SLIDER{
		/**
		 * @return array
		 */
		function getList(){
			global $mysqli;
			$q="select * from tbl_sliders where `enable`=1";
			
			$output=array();
			$result = $mysqli->query($q);
			while($fields=$result->fetch_assoc()){
				$output[]=$fields;
			}
			$result->free_result();
			
			return $output;
		}
	}
