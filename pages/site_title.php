<?php
	if(isset($_GET['page'])){
		$pagename = $_GET['page'];
		
		$page_db=new DB_PAGE();
		
		if($page_db->isPage($pagename)){
			$pageDetails=$page_db->getPageDetails($pagename);
			
			echo $pageDetails['title'];
			
		}else
			echo "یافت نشد!";
	}
	else{
		$setting_db=new DB_SETTING();
		echo $setting_db->getSetting('site_title');
	}


?>