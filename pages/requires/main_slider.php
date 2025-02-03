<?php
    defined("_AST") or die("Access denied");
  $sliser=new Slider();
  $items=$sliser->getList();
?>
<div class="slider">
	<?php
		foreach($items as $item){
	?>
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
            
            <div class="item">
                <img src="assets/img/slider/slider-<?= $item['id']; ?>.jpg" alt="<?= $item['title']; ?>">
            </div>
	                
            <?php
                }
            ?>
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