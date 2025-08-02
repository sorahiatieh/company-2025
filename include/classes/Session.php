<?php
	class Session {
		public $isLogin=false;
		public $userName="";
		public $userID=0;
		public $userDetails=array();
		
		function __construct(){
			if(isset($_SESSION['userID'])){
				$this->userID=$_SESSION['userID'];
				
				$user_db=new DB_USER();
				$UserDetails=$user_db->setWheres(array(
					"id"=>$this->userID
				))->getDetails()->run();
				
				if(!empty($UserDetails)){
					$this->isLogin=true;
					$this->userName=$UserDetails['username'];
					$this->userDetails=$UserDetails;
				}
			}
		}
	}
	?>