<?php
    define("_AST",1);
    require "include/inc.php";
    /*var_dump($_GET);
    exit;*/
    
   require  PAGE_PATH.'controller.php';
?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title><?= SiteBase::getSiteTitle(); ?></title>
    <meta name="keywords" content="<?= SiteBase::getSiteKeywords(); ?>">
    <meta name="description" content="<?= SiteBase::getSiteDescription(); ?>">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <base href="<?= SITE_URL; ?>">
    <?php
        Head::makeHead();
    ?>
</head>
<body>
   <div class="header">
       <?php
        require "pages/requires/header.view.php";
       ?>
    </div>
 
    <div class="content">
        <?php
            $page_name=SiteBase::getPageName();
            
            if(SiteBase::getHasView()){
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