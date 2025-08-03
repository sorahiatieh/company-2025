<?php
	define("_AST",1);
	require "../../include/inc.php";
	
	$respons=new Ajax();
	
	try{
		if(!isset(
			$_POST['username'],
			$_POST['password']
		)){
			$respons->Text="خطا در ورودی!";
			throw $respons;
		}
		
		$username=secure(trim($_POST['username']));
		$password=secure(trim($_POST['password']));
		
		if($username=="" || $password==""){
			$respons->Text="هر دو فیلد نام کاربری و رمز عبور باید تکمیل گردند!";
			throw $respons;
		}
		$user_db=new DB_USER();
		if(!DB_USER::isValidUsername($username)){
			$respons->Text="نام کاربری یا رمز عبور صحیح نمی باشد!";
			throw $respons;
		}
		$UserDetails=$user_db->setWheres(array(
			"username"=>$username
		))->getDetails()->run();
		
		if(empty($UserDetails)){
			$respons->Text="نام کاربری یا رمز عبور صحیح نمیباشد!";
			throw $respons;
		}
		// پسورد رو خارج از دیتابیس چک میکنیم
		$password=DB_USER::hash($password);
		
		if($UserDetails['password']!=$password){
			$respons->Text="نام کاربری یا رمز عبور صحیح نمیباشد!";
			throw $respons;
		}
		
		if($UserDetails['enable']== 0){
			$respons->Text="حساب کاربری شما توسط مدیریت غیرفعال شده است!";
			throw $respons;
		}
		
	
		$session->userLogin($UserDetails['id']);
		
		
		$respons->Status=1;
		$respons->Text="اطلاعات تایید شد.\n بزودی به ناحیه کاربری منتقل خواهید شد.";
		throw $respons;
	}
	catch(Ajax $e){
		$respons->makeOutput();
	}
	finally{
		$respons->makeOutput();
	}
	?>