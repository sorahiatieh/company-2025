<?php
	$setting=new DB_SETTING();
	$whyDetails=json_decode($setting->getSetting("main_why"),true);
    //var_dump($whyDetails);
?>
<div class="row">
	<?php
		foreach($whyDetails as $key=>$value){
    ?>
	<div class="col-lg-12">
		<h2 class="titr"><?= $value['Title']; ?></h2>
	</div>
	<div class="col-md-6">
		<?= $value['Text']; ?>
	</div>
	<div class="col-md-6">
		<img src="<?= $value['ImageURL']; ?>" alt="<?= $value['Title']; ?>" class="img-responsive">
	</div>
    <?php
	    }
    ?>
</div>