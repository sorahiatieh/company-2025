<?php
    defined("_AST") or die("Access denied");
?>
<!--<div class="slider-wrapper theme-defult">
    <div class="ribbon"></div>

    <div class="owl-carousel owl-theme">
    <?php
/*			foreach($CP['ListOfSliders'] as $item){
        */?>
            <img src="assets/img/slider/slider-<?php /*= $item['id']; */?>.jpg" alt="<?php /*= $item['title']; */?>">
        <?php
/*			}
		*/?>
    </div>
</div>-->
<div class="slider slider-wrapper theme-defult">
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
