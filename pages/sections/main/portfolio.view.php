<?php
	defined("_AST") or die("Access denied");
?>
<div class="row">
	<div class="col-lg-12">
		<h2 class="titr"><?= $CP['servicesBoxTitle']; ?></h2>
	</div>
    <?php
        foreach($CP['ListOfPortfolioes'] as $item){
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