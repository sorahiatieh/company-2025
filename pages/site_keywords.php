<?php
	if(isset($_GET['page'])){
		$pagename = $_GET['page'];
		
		$page_db=new DB_PAGE();
		
		$pageDetails=$page_db->getPageDetails($pagename);
		if(!empty($pageDetails)){
			if($pageDetails['custom_page']==1){
				switch($pagename){
					case 'show_blog':
						$blog_db=new DB_BLOG();
						if(!isset($_GET['id'])){
							echo "";
						}else{
							$id=secure($_GET['id']);
							$blogDetails=$blog_db->getBlogDetails($id);
							if(!empty($blogDetails)){
								echo $blogDetails['keywords'];
							}else
								echo "";
						}
						break;
					case 'project_details':
						$project_db=new DB_PORTFOLIO();
						if(!isset($_GET['id'])){
							echo "";
						}else{
							$id=secure($_GET['id']);
							$projectDetails=$project_db->getPortfolioDetails($id);
							if(!empty($projectDetails)){
								echo $projectDetails['keywords'];
							}else
								echo "";
						}
						break;
						
					default:
						echo $pageDetails['keywords'];
				}
			}else{
				echo $pageDetails['keywords'];
			}
			
		}else
			echo "";
	}
	else{
		$setting_db=new DB_SETTING();
		echo $setting_db->getSetting('site_keywords');
	}


?>