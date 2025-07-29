<?php
    require SECTIONS."main/slider.view.php";
    
    $CP=SiteBase::getData("main");
?>
<div class="container">
    <?php
        //خدمات شرکت-
	    require SECTIONS."main/services.view.php";
        // آخرین نمونه کارها
	    require SECTIONS."main/portfolio.view.php";
        // آخرین های وبلاگ
	    require SECTIONS."main/last_blogs.view.php";
        //چرا باید شرکت ما را انتخاب نمایید
	    require SECTIONS."main/why_choice.view.php";
        // شعار شرکت
	    require SECTIONS."main/slogan.view.php";
    ?>
</div>
