<?php
	class DB_CONTACT extends DB{
		
		function isContact(){
			global $mysqli;
			$where=$this->makeWhere();
			
			$q="SELECT EXISTS(SELECT 1 FROM tbl_contacts $where)";
			
			$result=$mysqli->query($q) or die($mysqli->error);
			$row=$result->fetch_row();
			
			return (bool) $row[0];
		}
		
		
		function getContactDetails(){
			global $mysqli;
			$where=$this->makeWhere();
			
			$q="select * from tbl_contacts $where";
			
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
