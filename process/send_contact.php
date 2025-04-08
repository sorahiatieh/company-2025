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
	}catch (Ajax $e){
		$e->makeOutput();
	}
	
	$ajax->Status=1;
	$ajax->Text="پیام شما با موفقیت ارسال شد!";
	$ajax->LastID=rand(1,100);
	throw $ajax;
?>