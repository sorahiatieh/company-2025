<?php
	class Session {
		public $isLogin=false;
		public $userName="";
		public $userId=0;
		public $userDetails=array();
		
		function __construct(){
			if(isset($_SESSION['userId'])){
				$this->userId=$_SESSION['userId'];
				
				$user_db=new DB_USER();
				$UserDetails=$user_db->setWheres(array(
					"id"=>$this->userId
				))->getDetails()->run();
				
				if(!empty($UserDetails)){
					$this->isLogin=true;
					$this->userName=$UserDetails['username'];
					$this->userDetails=$UserDetails;
				}
			}
		}
		
		/**
		 * @param $user_id
		 * @return void
		 */
		function userLogin($user_id){
			$_SESSION['userId']=$user_id;
		}
		
		/**
		 * @return void
		 */
		function userLogout(){
			unset($_SESSION['userId']);
		}
	}
	?>