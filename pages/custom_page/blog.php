<?php
	defined("_AST") or die("Access denied");
    $blog_db=new DB_BLOG();
    $items=$blog_db->getList(10);
?>
 <div class="container cont-blog">
     <div class="row">
         <div class="col-lg-12">
             <h2 class="titr">بلاگ</h2>
             <ol class="breadcrumb">
                <li>
                    <a href="#">خانه</a>
                </li>
                
                <li class="active">بلاگ</li>
            </ol>
         </div>
     </div>
     <div class="b-content">
         <?php
             foreach($items as $item){
         ?>
         <div class="item row">
             <div class="col-md-4">
                 <a href="index.php?page=show_blog&id=<?= $item['id']; ?>">
                     <img src="assets/img/blog/<?= $item['id']; ?>.jpg" class="img-responsive img-hover img-border wp-post-image" alt="<?= $item['title']; ?>">
                 </a>
             </div>
             <div class="col-md-8">
                 <h3><a href="index.php?page=show_blog&id=<?= $item['id']; ?>"><?= $item['title']; ?></a></h3>
	             <?php
		             $text=nl2br(strip_tags($item['text']));
		             echo trim(mb_substr($text,0,200));
	             ?>...
                 <p></p>
                 <a href="index.php?page=show_blog&id=<?= $item['id']; ?>" class="btn btn-primary pull-left">مشاهده مطلب</a>
             </div>
         </div>
         <?php
             }
         ?>
     </div>
 </div>
     