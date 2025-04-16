<?php
	defined("_AST") or die("Access denied");
?>
<div class="cont-error text-center">
  <div class="matn">
      <h1>404</h1>
      <h2><?= NotFound::getContentMassage(); ?></h2>

      <a href="index.php" class="go-home">بازگشت به صفحه نخست</a>
  </div>
</div>
