<?php
	class DB_CONTACT{
		/**
		 * @param $id
		 * @return bool|void
		 */
		function isContact($id){
			global $mysqli;
			
			$q="SELECT EXISTS(SELECT 1 FROM tbl_contacts WHERE `id`='$id')";
			
			$result=$mysqli->query($q) or die($mysqli->error);
			$row=$result->fetch_row();
			
			return (bool) $row[0];
		}
		
		/**
		 * @param $id
		 * @return array|false|void|null
		 */
		function getContactDetails($id){
			global $mysqli;
			$q="select * from tbl_contacts where `id`='$id'";
			$result=$mysqli->query($q) or die($mysqli->error);
			$field=$result->fetch_assoc();
			
			$result->free_result();
			
			return $field;
		}
		
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
