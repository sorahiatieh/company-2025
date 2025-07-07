<?php
    $CP=Base::getData("main");
?>
<div class="container">
    <?php
	    require SECTIONS."main/slider.view.php";
        // آخرین نمونه کارها
	    require SECTIONS."main/products.view.php";
        // آخرین های وبلاگ
	    require SECTIONS."main/last_blogs.view.php";
     
    ?>
</div>
