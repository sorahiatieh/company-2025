<?php
	defined("_AST") or die("Access denied");
	$CP=SiteBase::getData("projects");
    
    $pageDetails=SiteBase::getPageDetails();
?>
 <div class="container cont-blog">
     <div class="breadcrumb">
         <div class="col-lg-12">
             <h2 class="titr"><?= $pageDetails['title']; ?></h2>
             <ol class="breadcrumb">
                <li>
                    <a href="index.php">خانه</a>
                </li>
                <li class="active">پروژه ها</li>
            </ol>
         </div>
     </div>
     <hr>
     <div class="row">
         <div class=" row">
             <?php
                foreach($CP['Items'] as $item){
             ?>
             <div class="items col-md-4">
                 <a href="projects/<?= $item['id'].text2url($item['title']); ?>"><img src="<?= $item['ImageURL']; ?>" alt="<?= $item['title']; ?>"></a>
                 <h4><a href="projects/<?= $item['id'].text2url($item['title']); ?>"><?= $item['title']; ?></a></h4>
                 <?= $item['text']; ?>
             </div>
         <?php
	         }
         ?>
        </div>
    </div>
 </div>
     