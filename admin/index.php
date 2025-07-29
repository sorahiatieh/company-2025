<?php
	define("_AST",1);
	require "../include/inc.php";
	
    if(!isset($_SESSION['userLogin'])){
        header("Location: login.php");
        exit;
    }
    
    require  "pages/controller.php";
?>
<!doctype html>
<html lang="fa">
<head>
    <title>Admin</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">
    <script src="../assets/js/jquery-3.0.0.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
</head>
<body>
<div class="main-body container-fluid">
    <div class="header col-md-12">
        فلانی به پنل ادمین خوش آمدید.
    </div>
    <section class="col-md-3 sidebar">
        <?php
            require "pages/require/sidebar.php";
        ?>
    </section>
    <section class="col-md-9 content">
        <?php
            $filename=dirname(__FILE__).'/pages/sections/'.AdminBase::getPageName().'/'.AdminBase::getSubPage().'.view.php';
            
            if(file_exists($filename)){
                require $filename;
            }
        ?>
    </section>
</div>

</body>
</html>