<?php
	defined("_AST") or die("Access denied");
    $mydata=SiteBase::getData("show_blog");
?>
<div class="container content-future">
   <div class="row">
       <div class="col-lg-12">
            <h2 class="titr"><?= $mydata['BlogDetails']['title']; ?></h2>
            <ol class="breadcrumb">
                <li>
                    <a href="#">خانه</a>
                </li>
                <li>
                    <a href="#">بلاگ</a>
                </li>
                <li class="active"><?= $mydata['BlogDetails']['title']; ?></li>

            </ol>
        </div>
   </div>
   <div class="row">
      <div class="col-md-8">
         <hr>
         <p>
            <i class="fi fi-clock-1"></i>
            تاریخ ارسال : <?= $mydata['BlogDetails']['date']; ?></p>
            <img src="assets/img/blog/<?= $mydata['BlogDetails']['id']; ?>.jpg" alt="<?= $mydata['BlogDetails']['title']; ?>">
        <hr>
	      <?= $mydata['BlogDetails']['text']; ?>
      </div>
      <div class="col-md-4">
          <?php
              require "sidebar.view.php";
          ?>
      </div>
   </div>
   
</div>

        