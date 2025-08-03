<?php
	class Session {
		public $isLogin=false;
		public $userName="";
		public $userId=0;
		public $userDetails=array();
		private $sessionName="userId";
		private $password="";
	
		function __construct(){
			/*var_dump($_SESSION);
			exit;*/
			$this->checkLogin();
		}
		
		/**
		 * @return void
		 */
		function checkLogin(){
			if(isset(
				$_SESSION[$this->sessionName],
				$_SESSION['password']
			)){
				$this->userId=$_SESSION[$this->sessionName];
				
				$user_db=new DB_USER();
				$UserDetails=$user_db->setWheres(array(
					"id"=>$this->userId,
					"enable"=>1
				))->getDetails()->run();
				
				if(!empty($UserDetails)){
					if($UserDetails['password']==$_SESSION['password']){
						$this->isLogin=true;
						$this->userName=$UserDetails['username'];
						$this->userDetails=$UserDetails;
					}
				}
			}else{
				$this->isLogin=false;
			}
		
		}
		/**
		 * @param $user_id
		 * @return void
		 */
		function userLogin($user_id){
			$user_db=new DB_USER();
			$UserDetails=$user_db->setWheres(array(
				"id"=>$this->$user_id,
				"enable"=>1
			))->setReturnFields(array(
				"password"
			))->getDetails()->run();
			
			$_SESSION[$this->sessionName]=$user_id;
			$_SESSION['password']=$UserDetails['password'];
			
			$this->checkLogin();
		}
		
		/**
		 * @return void
		 */
		function userLogout(){
			unset($_SESSION[$this->sessionName]);
			$this->checkLogin();
		}
		
		function setPassword($password){
			$_SESSION['password']=DB_USER::hash($password);
		}
	}
	?>