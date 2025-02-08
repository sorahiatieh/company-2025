<?php
	defined("_AST") or die("Access denied");

	if(isset($_GET['id'])){
	$id=$_GET['id'];
?>
         <div class="container content-eight">
           <div class="breadcrumb">
               <div class="col-lg-12">
                   <h3 class="titr">نمونه کار هشتم</h3>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">خانه</a>
                        </li>
                        <li>
                            <a href="404.php">لوگو</a>
                        </li>
                        <li class="active">نمونه کار هشتم</li>
                        
                    </ol>
               </div>
           </div>
           <div class="row">
               <div class="col-md-8">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        </ol>
        
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item portfolio-gallery active">
                            <img class="img-responsive" src="assets/img/p-gallery-4.jpg" width="750" alt="">
                        </div>
                        <div class="item portfolio-gallery">
                             <img class="img-responsive" src="assets/img/p-gallery-14.jpg" width="750" alt="">
                        </div>
                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="icon-prev"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="icon-next"></span>
                    </a>
                    </div>
               </div>
               <div class="description col-md-4">
                   <h3>درباره پروژه</h3>
                   <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                   <h3>اطلاعات پروژه</h3>
                   <ul>
                       <li>درباره سایت:
                          <a href=""></a>
                       </li>
                   </ul>
                   
               </div>
           </div>
           <div class="row">
               <div class="col-lg-12">
                   <h3 class="titr">پروژه های مرتبط </h3>
               </div>
               <?php
                   for($i=0; $i<4; $i++){
               ?>
               <div class="col-sm-3 col-xs-6 item">
                   <a href="seven-index.php">
                       <img src="assets/img/portfolio/1.jpg" alt="">
                   </a>
               </div>
               <?php
                }
               ?>
           </div>
        </div>
		
    <?php
	}
	else{
		require CUSTOM_PAGE_PATH.'404.php';
	}
?>