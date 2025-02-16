<?php
	$setting=new DB_SETTING();
	$whyDetails=json_decode($setting->getSetting("why"),true);
    //var_dump($whyDetails);
?>
<div class="row">
	<div class="col-lg-12">
		<h2 class="titr"><?= $whyDetails['Title']; ?></h2>
	</div>
	<div class="col-md-6">
		<?= $whyDetails['Text']; ?>
	</div>
	<div class="col-md-6">
		<img src="<?= $whyDetails['ImageURL']; ?>" alt="<?= $whyDetails['Title']; ?>" class="img-responsive">
	</div>
</div>