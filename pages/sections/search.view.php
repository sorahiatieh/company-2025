<?php
	defined("_AST") or die("Access denied");
    $CP=Base::getData("blog");
    $blog_db=new DB_BLOG();
?>
 <div class="container cont-blog">
     <div class="row">
         <div class="col-lg-12">
             <h2 class="titr">بلاگ</h2>
             <ol class="breadcrumb">
                <li>
                    <a href="index.php">خانه</a>
                </li>
                
                <li class="active"><a href="index.php/blog/">بلاگ</a></li>
            </ol>
         </div>
     </div>
     <div class="b-content">
         <?php
             foreach($CP['Items'] as $item){
                 $link=$blog_db->getURLWithTitle($item['id'],$item['title']);
         ?>
         <div class="item row">
             <div class="col-md-4">
                 <a href="<?= $link; ?>">
                     <img src="<?= $item['ImageURL']; ?>" class="img-responsive img-hover img-border wp-post-image" alt="<?= $item['title']; ?>">
                 </a>
             </div>
             <div class="col-md-8">
                 <h3><a href="<?= $link; ?>"><?= $item['title']; ?></a></h3>
	             <?php
		             $text=nl2br(strip_tags($item['text']));
		             echo trim(mb_substr($text,0,150));
	             ?>...
                 <p></p>
                 <a href="<?= $link; ?>" class="btn btn-primary pull-left">مشاهده مطلب</a>
             </div>
         </div>
         <?php
             }
         ?>
     </div>
 </div>
     