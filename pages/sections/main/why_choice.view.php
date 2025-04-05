<?php
	defined("_AST") or die("Access denied");
?>
<div class="row">
	<div class="col-lg-12">
		<h2 class="titr"><?= $CP['whyDetails']['Title']; ?></h2>
	</div>
	<div class="col-md-6">
		<?= $CP['whyDetails']['Text']; ?>
	</div>
	<div class="col-md-6">
		<img src="<?= $CP['whyDetails']['ImageURL']; ?>" alt="<?= $CP['whyDetails']['Title']; ?>" class="img-responsive">
	</div>
</div>