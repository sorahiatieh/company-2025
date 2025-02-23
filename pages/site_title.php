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
							echo "یافت نشد!";
						}else{
							$id=secure($_GET['id']);
							$blogDetails=$blog_db->getBlogDetails($id);
							if(!empty($blogDetails)){
								echo $blogDetails['title'];
							}else
								echo "یافت نشد!";
						}
						break;
					case 'project_details':
						$project_db=new DB_PORTFOLIO();
						if(!isset($_GET['id'])){
							echo "یافت نشد!";
						}else{
							$id=secure($_GET['id']);
							$projectDetails=$project_db->getPortfolioDetails($id);
							if(!empty($projectDetails)){
								echo $projectDetails['title'];
							}else
								echo "یافت نشد!";
						}
						break;
						
					default:
						echo $pageDetails['title'];
				}
			}else{
				echo $pageDetails['title'];
			}
			
		}else
			echo "یافت نشد!";
	}
	else{
		$setting_db=new DB_SETTING();
		echo $setting_db->getSetting('site_title');
	}


?>