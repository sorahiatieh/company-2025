<?php
    define("_AS",1);
	require "../include/inc.php";
	
	$output=array(
		"Status"=>0,
		"Text"=>"",
		"TrackCode"=>0,
		"ControlName"=>""
	);
	
	if(!isset(
		$_POST['txtName'],
		$_POST['txtEmail'],
		$_POST['txtText']
	)){
		$output['Text']="خطا در ورودی!";
		exit(json_encode($output));
	}
	
	$name=secure(trim($_POST['txtName']));
	$email=secure(trim($_POST['txtEmail']));
	$text=secure(trim($_POST['txtText']));
	
	if($name==""){
		$output['Text']="نام خود را وارد نکرده اید!";
		$output['ControlName']="txtName";
		exit(json_encode($output));
	}
	
	if($email==""){
		$output['Text']="ایمیل خود را وارد نکرده اید!";
		$output['ControlName']="txtEmail";
		exit(json_encode($output));
	}
	
	if($text==""){
		$output['Text']="لطفا متن پیام خود را وارد نمایید!";
		$output['ControlName']="txtText";
		exit(json_encode($output));
	}
	
	$rand=rand(1000,99999);
	
	$output["Status"]=1;
	$output["Text"]="پیام شما با موفقیت ارسال شد!";
	$output["TrackCode"]=$rand;
	exit(json_encode($output));
?>