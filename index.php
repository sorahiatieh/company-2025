<?php
    define("_AST",1);
    require "include/inc.php";
    
   require  PAGE_PATH.'controller.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= Base::getSiteTitle(); ?></title>
    <meta name="keywords" content="<?= Base::getSiteKeywords(); ?>">
    <meta name="description" content="<?= Base::getSiteDescription(); ?>">
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
            $page_name=Base::getPageName();
            
            if(Base::getHasView()){
	            $filename=CUSTOM_PAGE_PATH.$page_name.".php";
	            require $filename;
            }else{
	            require PAGE_PATH."public_page.php";
            }
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