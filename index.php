<?php
    require "include/inc.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>کمپانی |شرکت تجاری من</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="assets/css/style.min.css">
    <link rel="stylesheet" href="assets/css/font-icon.css">
    
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <script src="assets/js/jquery-3.0.0.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
    
</head>
<body>
   <div class="header">
       <?php
        require "pages/requires/header.php";
       ?>
       <div class="middle_menu">
           <div class="slider">
               <div id="main_slider" class="carousel slide" data-ride="carousel">
                   <ol class="carousel-indicators">
                       <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                       <li data-target="#myCarousel" data-slide-to="1"></li>
                       <li data-target="#myCarousel" data-slide-to="2"></li>
                       <li data-target="#myCarousel" data-slide-to="3"></li>
                       <li data-target="#myCarousel" data-slide-to="4"></li>
                       <li data-target="#myCarousel" data-slide-to="5"></li>
                   </ol>

                   <div class="carousel-inner" role="listbox">
                       <div class="item active">
                           <img src="assets/img/slider/slider-1.jpg" alt="">
                       </div>

                       <div class="item">
                           <img src="assets/img/slider/slider-2.jpg" alt="">
                       </div>

                       <div class="item">
                           <img src="assets/img/slider/slider-3.jpg" alt="">
                       </div>

                       <div class="item">
                           <img src="assets/img/slider/slider-4.jpg" alt="">
                       </div>

                       <div class="item">
                           <img src="assets/img/slider/slider-5.jpg" alt="">
                       </div>

                       <a class="left carousel-control" href="#main_slider" role="button" data-slide="prev">
                            <span class="icon-prev">
                                <span class="fi fi-left-circled" aria-hidden="true"></span>
                            </span>
                       </a>
                       <a class="right carousel-control" href="#main_slider" role="button" data-slide="next">
                            <span class="icon-next">
                                <span class="fi fi-right-circled" aria-hidden="true"></span>
                            </span>
                       </a>
                   </div>
               </div>
           </div>

       </div>
    </div>

    <div class="container content">
        <?php
            if(isset($_GET['page'])){
                $page = $_GET['page'];
                
                $filename=dirname(__FILE__)."/pages/custom_page/".$page.".php";
                if(file_exists($filename)){
                    require $filename;
                }else
                    require dirname(__FILE__)."/pages/custom_page/404error.php";
            }
            else
                require "pages/main.php";
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