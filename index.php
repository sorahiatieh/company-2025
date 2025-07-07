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
</head>
<body>
<!-- نوار تخفیف بالای سایت -->
    <div class="bg-dark text-white text-center py-2">
        <div class="container">
            <p class="m-0">با عضویت در خبرنامه، 10٪ تخفیف اولین خرید را بگیرید!</p>
        </div>
    </div>
    <div class="header">
       <?php
        require "pages/requires/header.view.php";
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