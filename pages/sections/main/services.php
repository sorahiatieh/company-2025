<?php
  $service=new DB_SERVICE();
  $setting=new DB_SETTING();
  
  $items=$service->getList();
?>
<div class="row">
	<div class="col-md-12">
		<h2 class="titr"><?= $setting->getSetting('service_title'); ?></h2>
	</div>
    <?php
        foreach($items as $item){
    ?>
	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4><li class="fi <?= $item['icon']; ?>"></li><?= $item['title']; ?></h4>
			</div>
			<div class="panel-body">
				<?= $item['text']; ?>
				<a href="index.php?page=show_service&id=<?= $item['id']; ?>" class="btn btn-default pull-left">بیشتر </a>
			</div>
		</div>
	</div>
    <?php
        }
    ?>
</div>