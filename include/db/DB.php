<?php
	class DB {
		private $wheres=array();
		protected $table_name='';
		private $returnFields=array();
		public function is(){
			global $mysqli;
			
			$where=$this->makeWhere();
			
			$q="SELECT EXISTS(SELECT 1 FROM ".$this->table_name." $where)";
			
			$result=$mysqli->query($q) or die($mysqli->error);
			$row=$result->fetch_row();
			
			return (bool) $row[0];
		}
		
		public function getDetails(){
			global $mysqli;
			$where=$this->makeWhere();
			$returnFields=$this->makeReturnFields();
			
			$q="select $returnFields from ".$this->table_name." $where";
			
			$result=$mysqli->query($q) or die($mysqli->error);
			$field=$result->fetch_assoc();
			
			$result->free_result();
			
			return $field;
		}
		
		public function getList($count=0){
			global $mysqli;
			$where=$this->makeWhere();
			
			$limit="";
			if($count!=0){
				$limit="LIMIT {$count}";
			}
			
			$returnFields=$this->makeReturnFields();
			
			$q="select $returnFields from ".$this->table_name." $where ORDER BY `date` DESC $limit";
			
			$output=array();
			$result = $mysqli->query($q);
			while($fields=$result->fetch_assoc()){
				$output[]=$fields;
			}
			$result->free_result();
			
			return $output;
		}
		public function setWheres($wheres=array()){
			$this->wheres=$wheres;
			
			return $this;
		}
		
		public function setReturnFields($fields){
			 $this->returnFields = $fields;
			 return $this;
		}
		protected function makeWhere(){
			$where='';
			
			if(!empty($this->wheres)){
				$where='WHERE ';
				
				foreach($this->wheres as $key=>$value){
					$where.="`$key`='$value' AND ";
				}
				$where=mb_substr($where,0,mb_strlen($where)-5);
			}
			
			return $where;
		}
		
		protected function makeReturnFields(){
			$output='';
			if(!empty($this->returnFields)){
				foreach($this->returnFields as $key=>$value){
					if(is_numeric($key))
						$output.="`$value` ,";
					else
						$output.="$key as `$value` ,";
				}
				$output=mb_substr($output,0,mb_strlen($output)-1);
			}else{
				$output="*";
			}
			//var_dump($output);
			return $output;
		}
	}
