<?php
	defined("_AST") or die("Access denied");
?>
<div class="container cont-blog">
   <div class="row">
        <div class="col-lg-12">
         <h2 class="titr">گالری تصاویر</h2>
         <ol class="breadcrumb">
            <li>
                <a href="index.php">خانه</a>
            </li>
            
            <li class="active">گالری تصاویر</li>
        </ol>
     </div>
   </div>
   <div class="row">
       <div class="col-lg-12 col-xs-12">
           <div class="gallery-image">
            <div id="lightgallery">
                <?php
                    for($i=1; $i<16; $i++){
                ?>
                <a class="col-lg-3 col-sm-3 col-xs-3" href="assets/img/gallery/<?= $i; ?>.jpg">
                    <img src="assets/img/gallery/<?= $i; ?>.jpg" />
                </a>
                <?php
                    }
                ?>
                
            </div>
          </div>
       </div>
   </div>
   <hr>
</div>
       