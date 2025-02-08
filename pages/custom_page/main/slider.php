<?php
    defined("_AST") or die("Access denied");
  $sliser=new DB_SLIDER();
  $items=$sliser->getList();
?>
<div class="slider-wrapper theme-defult">
    <div class="ribbon"></div>

    <div id="slider" class="nivoSlider">
    <?php
			foreach($items as $item){
        ?>
            <img src="assets/img/slider/slider-<?= $item['id']; ?>.jpg" alt="<?= $item['title']; ?>">
        <?php
			}
		?>
    </div>
</div>
