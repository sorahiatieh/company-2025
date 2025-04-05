<?php
	defined("_AST") or die("Access denied");
?>
<div class="row">
	<div class="col-lg-12">
		<h2 class="titr"><?= $CP['servicesBoxTitle']; ?></h2>
	</div>
    <?php
        foreach($CP['ListOfBlogs'] as $item){
    ?>
	<div class="item col-lg-3 col-md-4 col-sm-6 col-xs-12">
		<a href="index.php?page=show_blog&id=<?= $item['id']; ?>">
			<div class="hovereffect">
				<img class="img-responsive" src="assets/img/blog/<?= $item['id']; ?>.jpg" alt="<?= $item['title']; ?>">
				<div class="overlay">
					<h2><?= $item['title']; ?></h2>
				</div>
			</div>
		</a>
	</div>
    <?php
        }
    ?>
</div>