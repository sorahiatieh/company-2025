<?php
	defined("_AST") or die("Access denied");
?>
<div class="well">
	<div class="row">
		<div class="col-md-8">
			<p><?= $CP['SloganDetails']['Text']; ?></p>
		</div>
		<div class="col-md-4">
			<a href="<?= $CP['SloganDetails']['Link']; ?>" <?= ($CP['SloganDetails']['NewWindow']==1) ? ' target="_blank"': '' ?> class="btn btn-lg btn-default btn-block"><?= $CP['SloganDetails']['ButtonTitle']; ?></a>
		</div>
	</div>
</div>