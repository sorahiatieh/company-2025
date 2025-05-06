<?php
    define("_AST",1);
    require "include/inc.php";
    /*$blog_db=new DB_BLOG();
    $list=$blog_db->setWheres(array(
            "enable"=>1
    ))->setLimit(10)->setReturnFields(array(
            "id",
        "title"
    ))->setOrderby(array(
            "date"=>"DESC",
        "id"=>"ASC"
    ))->getCount()->getSQL();
    
    var_dump($list);
    exit;*/
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