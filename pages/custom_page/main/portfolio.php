<?php
    $portfolio=new DB_PORTFOLIO();
    $setting=new DB_SETTING();
    
    $items=$portfolio->getList(4);
?>
<div class="row">
	<div class="col-lg-12">
		<h2 class="titr"><?= $setting->getSetting('portfolio_title'); ?></h2>
	</div>
    <?php
        foreach($items as $item){
    ?>
	<div class="item col-md-3 col-sm-6 col-xs-6">
		<a href="index.php?page=show_portfolio&id=<?= $item['id']; ?>">
			<img src="assets/img/portfolio/<?= $item['id']; ?>.jpg" class="img-responsive img-thumbnail" alt="<?= $item['title']; ?>">
		</a>
	</div>
    <?php
        }
    ?>
</div>