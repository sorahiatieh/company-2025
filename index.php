<?php
    define("_AST",1);
    require "include/inc.php";
   $setting=new DB_SETTING();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $setting->getSetting('site_title'); ?></title>
    <meta name="keywords" content="<?= $setting->getSetting('site_keywords'); ?>">
    <meta name="description" content="<?= $setting->getSetting('site_description'); ?>">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="assets/css/nivo-slider.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/font-icon.css">
    <link rel="stylesheet" href="assets/css/style.min.css">
    
    
    <script src="assets/js/jquery-3.0.0.min.js"></script>
    <script src="assets/js/jquery.nivo.slider.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
    
</head>
<body>
   <div class="header">
       <?php
        require "pages/requires/header.php";
       ?>
    </div>

    <div class="container content">
        <?php
            if(isset($_GET['page'])){
                $pagename = $_GET['page'];
                
                $page_db=new DB_PAGE();
                
                if($page_db->isPage($pagename)){
                    $pageDetails=$page_db->getPageDetails($pagename);
                    
                    if($pageDetails['custom_page']==1){
	                    $filename=CUSTOM_PAGE_PATH.$pagename.".php";
	                    if(file_exists($filename)){
		                    require $filename;
	                    }else
		                    require PAGE_PATH."public_page.php";
                    }else{
                        require PAGE_PATH."public_page.php";
                    }
	                
                }else
	                require CUSTOM_PAGE_PATH."404.php";
            }
            else
                require CUSTOM_PAGE_PATH."main.php";
        ?>
    </div>
    <!-- فوووووووتر-->
    <footer class="text-center">
        <?php
            require "pages/requires/footer.php";
        ?>
    </footer>
</body>
</html>