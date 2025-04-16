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
    <base href="<?= SITE_URL; ?>">
    <?php
        Head::makeHead();
    ?>
  <!--<link rel="stylesheet" href="assets/css/themes/default/default.css" type="text/css" media="screen" />-->
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
	            $filename=SECTIONS.$page_name.".view.php";
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