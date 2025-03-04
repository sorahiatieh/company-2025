<?php
	defined("_AST") or die("Access denied");
    $CP=Base::getPageDetails();
?>
<div class="container cont-us">
    <div class="row">
       <div class="col-lg-12">
           <h3 class="titr"><?= $CP['title']; ?></h3>
            <ol class="breadcrumb">
                <li>
                    <a href="index.php">خانه</a>
                </li>
                
                <li class="active"><?= $CP['title']; ?></li>
                
            </ol>
       </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <?= $CP['text']; ?>
        </div>
    </div>
    <hr>
</div>
    