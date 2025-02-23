<?php
	defined("_AST") or die("Access denied");
	//$jdate_c=new PersianDate();
    if (!isset($_GET['id'])) {
        require CUSTOM_PAGE_PATH.'404.php';
    }else{
        $id=secure($_GET['id']);
        $blog_db=new DB_BLOG();
	    
	    $blogDetails=$blog_db->getBlogDetails($id);
	    if(empty($blogDetails)){
	        require CUSTOM_PAGE_PATH.'404.php';
        }else{
?>
<div class="container content-future">
   <div class="row">
       <div class="col-lg-12">
            <h2 class="titr"><?= $blogDetails['title']; ?></h2>
            <ol class="breadcrumb">
                <li>
                    <a href="#">خانه</a>
                </li>
                <li>
                    <a href="#">بلاگ</a>
                </li>
                <li class="active"><?= $blogDetails['title']; ?></li>

            </ol>
        </div>
   </div>
   <div class="row">
      <div class="col-md-8">
         <hr>
         <p>
            <i class="fi fi-clock-1"></i>
            تاریخ ارسال :<!-- <?php /*= $jdate_c->jdate('Y/m/d',$blogDetails['date']); */?></p>-->
            تاریخ ارسال : <?= $blogDetails['date']; ?></p>
            <img src="assets/img/blog/<?= $blogDetails['id']; ?>.jpg" alt="<?= $blogDetails['title']; ?>">
        <hr>
	      <?= $blogDetails['text']; ?>
      </div>
      <div class="col-md-4">
          <?php
              require "sidebar.php";
          ?>
      </div>
   </div>
   
</div>

<?php
        }
    }
?>

        