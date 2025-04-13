<?php
    define("_AST",1);
	
	require "../include/inc.php";
	
	$ajax=new Ajax();
	
	try{
		if(!isset($_POST["txtName"],
		$_POST['txtPhone'],
		$_POST['txtEmail'],
		$_POST['txtMessage']
		)){
			$ajax->Text="خطا در ورودی!";
			throw $ajax;
		}
		
		$name = secure(trim($_POST['txtName']));
		$phone = secure(trim($_POST['txtPhone']));
		$email = secure(trim($_POST['txtEmail']));
		$text = secure(trim($_POST['txtMessage']));
		
		if ($name == "") {
			$ajax->Text = "نام خود را وارد نکرده اید!";
			throw $ajax;
		}
		
		if ($email == "") {
			$ajax->Text = "ایمیل خود را وارد نکرده اید!";
			throw $ajax;
		}
		
		if ($phone == "") {
			$ajax->Text = "شماره تماس خود را وارد نکرده اید!";
			throw $ajax;
		}
		
		if ($text == "") {
			$ajax->Text = "لطفا متن پیام خود را وارد نمایید!";
			throw $ajax;
		}
		
		$contact=new DB_CONTACT();
		$last_id=$contact->addContact(array(
			"fullName"=>$name,
			"phone"=>$phone,
			"email"=>$email,
			"text"=>$text,
			"date"=>time(),
			"ip"=>getRealIP()
		));
		
		$ajax->Status=1;
		$ajax->Text="پیام شما با موفقیت ارسال شد!";
		$ajax->LastID=$last_id;
		throw $ajax;
	}catch (Ajax $e){
		$e->makeOutput();
	}
	
	
?>