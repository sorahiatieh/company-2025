<?php
    define("_AS",1);
	require "../include/inc.php";
	
	$output=array(
		"Status"=>0,
		"Text"=>""
	);

	if(!isset(
		$_POST['blog_id'],
		$_POST['txtName'],
		$_POST['txtText']
	)){
		$output['Text']="خطا در ورودی!";
		exit(json_encode($output));
	}

	$blog_id=secure(trim($_POST['blog_id']));
	$sender_name=secure(trim($_POST['txtName']));
	$message=secure(trim($_POST['txtText']));
	
	if($sender_name=="")
	{
		$output['Text']="نام خود را وارد نکرده اید";
		exit(json_encode($output));
	}

	if($message=="")
	{
		$output['Text']="لطفا نظر خود را بنویسید";
		exit(json_encode($output));
	}
	
	$blog_db=new DB_BLOG();
	
	if(!$blog_db->is($blog_id))
    {
        $output['Text']="نمیتونی هک کنی";
        exit(json_encode($output));
    }
	
	$Details=$blog_db->getDetails($blog_id);
	if ($Details['can_comment']==0)
    {
        $output['Text']="شرمنده اخلاق ورزشی تون :)";
        exit(json_encode($output));
    }
	
	$comment_db=new DB_COMMENT();
	$comment_db->addComment(array(
		"blog_id"=>$blog_id,
		"sender_name"=>$sender_name,
		"text"=>$message,
		"date"=>time(),
		"ip"=>getRealIP()
	));

	$output["Status"]=1;
	$output["Text"]="پیام شما با موفقیت ارسال شد \n پس از تایید مدیریت پیام شما نمایش داده خواهد شد";
	exit(json_encode($output));
?>