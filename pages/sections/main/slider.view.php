<?php
    defined("_AST") or die("Access denied");
?>
<div class="slider-wrapper theme-defult">
    <div class="ribbon"></div>

    <div class="owl-carousel owl-theme">
    <?php
			foreach($CP['ListOfSliders'] as $item){
        ?>
        <div class="item">
            <img src="assets/img/slider/slider-<?= $item['id']; ?>.jpg" alt="<?= $item['title']; ?>">
        </div>
        <?php
			}
		?>
    </div>
</div>
