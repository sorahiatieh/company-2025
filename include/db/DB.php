<?php
	class DB {
		private static $mysqli=null;
		private $wheres=array();
		protected $table_name='';
		private $returnFields=array();
		protected $limit=array(
			"Start"=>0,
			"Count"=>0
		);
		
		const TYPE_LIST='LIST';
		 const TYPE_SELECT_ONE='SELECT_ONE';
		 const TYPE_SELECT_FUNC='SELECT_FUNC';
		 const TYPE_IS='IS';
		 const TYPE_UPDATE='UPDATE';
		 const TYPE_INSERT='INSERT';
		 const TYPE_DELETE='DELETE';
		
		private $orderby=array();
		
		private $sql="";
		private $command_type="";
		private $last_id=0;
		private $result=null;
		
		public static function setConnection($conn){
			self::$mysqli=$conn;
		}
		public function query(){
			$result=self::$mysqli->query($this->sql) or self::$mysqli->error();
			return $result;
		}
		
		public function run(){
			$result=$this->query();
			switch($this->command_type){
				case self::TYPE_LIST:
					$output=array();
					while($fields=$result->fetch_assoc()){
						$output[]=$fields;
					}
					$result->free_result();
					
					return $output;
					break;
				case self::TYPE_SELECT_ONE:
					$fields=$result->fetch_assoc();
					return $fields;
					break;
					
				case self::TYPE_SELECT_FUNC:
					$rows=$result->fetch_row();
					return $rows[0];
					break;
				
				case self::TYPE_IS:
					$rows=$result->fetch_row();
					return (bool) $rows[0];
					break;
					
				case self::TYPE_UPDATE:
					break;
					
				case self::TYPE_DELETE:
					break;
				case self::TYPE_INSERT:
					return self::$mysqli->insert_id;
					break;
			}
			
		}
		
		public function getSQL(){
			return $this->sql;
		}
		
		public function setSQL($q){
			$this->sql=$q;
			return $this;
		}
		
		function setCommandType($command_type){
			$this->command_type=$command_type;
			return $this;
		}
		public function getLastID(){
			return self::$mysqli->insert_id;
		}
		public function is(){
			$where=$this->makeWhere();
			
			$q="SELECT EXISTS(SELECT 1 FROM ".$this->table_name." $where)";
			
			$this->sql=$q;
			$this->command_type=self::TYPE_IS;
			
			
			return $this;
			/*$result=self::$mysqli->query($q) or die(self::$mysqli->error);
			$row=$result->fetch_row();
			
			return (bool) $row[0];*/
		}
		
		public function getCount(){
			$where=$this->makeWhere();
			$q="SELECT count(1) FROM ".$this->table_name." $where";
			
			$this->sql=$q;
			$this->command_type=self::TYPE_SELECT_FUNC;
			
			return $this;
		}
		public function getDetails(){
			$this->setLimit(1)->getList();
			$this->command_type=self::TYPE_SELECT_ONE;
			
			return $this;
			/*if(count($Details)==0)
				return null;
			
			return $Details[0];*/
		}
		
		public function getList(){
			$returnFields=$this->makeReturnFields();
			$where=$this->makeWhere();
			$limit=$this->makeLimit();
			$orderby=$this->makeOrderBy();
			
			$q="select $returnFields from ".$this->table_name." $where $orderby $limit";
			
			$this->sql=$q;
			$this->command_type=self::TYPE_LIST;
			
			return $this;
			
		}
		
		public function update($details){
			$where=$this->makeWhere();
			$limit=$this->makeLimit();
			$values="";
			foreach($details as $key=>$value){
				$values.="`$key`='$value',";
			}
			if($values!="")
				$values=mb_substr($values,0,mb_strlen($values)-1);
			
			$this->sql="UPDATE ".$this->table_name." SET $values $where $limit";
			$this->command_type=self::TYPE_UPDATE;
			
			return $this;
		}
		public function insert($details){
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
			
			$this->sql="INSERT INTO ".$this->table_name." ($fields) VALUES ($values)";
			return $this;
		}
		public function delete(){
			$where=$this->makeWhere();
			$limit=$this->makeLimit();
			$this->sql="DELETE FROM ".$this->table_name." $where $limit";
			$this->command_type=self::TYPE_DELETE;
			
			return $this;
		}
		public function setWheres($wheres=array()){
			$this->wheres=$wheres;
			
			return $this;
		}
		
		public function setReturnFields($fields){
			 $this->returnFields = $fields;
			 return $this;
		}
		
		public function setLimit($count,$page_number=1){
			if($page_number <1)
				$page_number=1;
			
			if($count==0){
				$this->limit=array(
					"Start"=>0,
					"Count"=>0
				);
			}else{
				$this->limit=array(
					"Start"=>($page_number-1)*$count,
					"Count"=>$count
				);
			}
			return $this;
		}
		
		public function setOrderby($list){
			$this->orderby=$list;
			
			return $this;
		}
		private function makeLimit(){
			$output="";
			if($this->limit["Count"]==0)
				$output='';
			elseif($this->limit['Start']==0)
				$output='LIMIT '.$this->limit['Count'];
			else
				$output='LIMIT '.$this->limit['Start'].','.$this->limit['Count'];
			
			return $output;
		}
		private function makeWhere(){
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
		
		private function makeReturnFields(){
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
		
		private function makeOrderBy(){
			$output='';
			
			if(!empty($this->orderby)){
				$output='ORDER BY ';
				
				foreach($this->orderby as $key=>$value){
					$output.="`$key` $value,";
				}
				$output=mb_substr($output,0,mb_strlen($output)-1);
			}
			
			return $output;
		}
	}
