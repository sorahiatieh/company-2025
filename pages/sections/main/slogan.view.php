<?php
	defined("_AST") or die("Access denied");
?>
<div class="well">
	<div class="row">
		<div class="col-md-8">
			<p><?= $sloganDetails['Text']; ?></p>
		</div>
		<div class="col-md-4">
			<a href="<?= $sloganDetails['Link']; ?>" <?= ($sloganDetails['NewWindow']==1) ? ' target="_blank"': '' ?> class="btn btn-lg btn-default btn-block"><?= $sloganDetails['ButtonTitle']; ?></a>
		</div>
	</div>
</div>