<?php
	defined("_AST") or die("Access denied");
?>
<div class="cont-error text-center">
  <div class="matn">
      <h1>404</h1>
      <h2><?= NotFound::getContentMassage(); ?></h2>
      <p class="text-center">توصیه ما به شما استفاده از لینکهای زیر است:</p>
      <ul class="menu__links_404">
          <li class="menu__item"><a href="index.php">خانه</a></li>
          <li class="menu__item"><a href="#">بلاگ</a></li>
          <li class="menu__item"><a href="#">گالری تصاویر</a></li>
          <li class="menu__item"><a href="#">زیرمنو</a></li>
          <li class="menu__item"><a href="#">پروژه ها</a></li>
          <li class="menu__item"><a href="#">درباره ما</a></li>
          <li class="menu__item"><a href="#">تماس با ما</a></li>
      </ul>
  </div>
</div>
