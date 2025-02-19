<?php
	defined("_AST") or die("Access denied");
?>
<div class="container cont-us">
    <div class="row">
       <div class="col-lg-12">
           <h3 class="titr"><?= $pageDetails['title']; ?></h3>
            <ol class="breadcrumb">
                <li>
                    <a href="index.php">خانه</a>
                </li>
                
                <li class="active">درباره ما</li>
                
            </ol>
       </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <?= $pageDetails['text']; ?>
        </div>
    </div>
    <hr>
</div>
    