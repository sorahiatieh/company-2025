<?php
	class DB_CONTACT extends DB{
		protected $table_name="tbl_contacts";
		
		function addContact($details=array()){
			global $mysqli;
			
			$fields="";
			$values="";
			
			foreach($details as $key=>$value){
				$fields.="`$key`,";
				$values.="'$value',";
			}
			
			if($fields!=""){
				$fields=mb_substr($fields,0,mb_strlen($fields)-1);
				$values=mb_substr($values,0,mb_strlen($values)-1);
			}
			
			$q="INSERT INTO tbl_contacts($fields) VALUES($values)";
			$mysqli->query($q);
			return $mysqli->insert_id;
		}
	}
