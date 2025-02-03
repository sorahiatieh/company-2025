<?php
    defined("_AST") or die("Access denied");
  $sliser=new Slider();
  $items=$sliser->getList();
?>
<div id="slider" class="nivoSlider">
	<?php
		foreach($items as $item){
	?>
        <img src="assets/img/slider/slider-<?= $item['id']; ?>.jpg" alt="<?= $item['title']; ?>">
            
    <?php
        }
    ?>
</div>