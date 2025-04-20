<?php
	defined("_AST") or die("Access denied");
    $page=new DB_PAGE();
    ?>
<div class="top-menu">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="assets/img/company-logo.png" alt="کمپانی" width="265" height="50" /></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
                <ul id="menu-mine-menu" class="nav navbar-nav navbar-left menu"><li id="menu-item-7" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-7">
                    <li class="active"><a href="index.php">خانه</a></li>
                    <li id="menu-item-17" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-17">
                        <a href="<?= $page->getURL('blog'); ?>">بلاگ</a>
                    </li>
                    <li id="menu-item-66" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-66">
                        <a href="<?= $page->getURL('gallery'); ?>">گالری تصاویر</a>
                    </li>
                    <li id="menu-item-95" class="dropdown menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-95">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">زیر منو <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li id="menu-item-93" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-93"><a href="#">زیر منو اول</a></li>
                            <li id="menu-item-94" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-94"><a href="#">زیر منو دوم</a></li>
                            <li id="menu-item-96" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-96"><a href="#">زیر منوی سوم</a></li>
                        </ul>
                    </li>
                    <li id="menu-item-54" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-54">
                        <a href="projects/">پروژه ها</a>
                    </li>
                    <li id="menu-item-63" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-63">
                        <a href="<?= $page->getURL('about'); ?>">درباره ما</a>
                    </li>
                    <li id="menu-item-6" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6">
                        <a href="<?= $page->getURL('contact'); ?>">تماس با ما</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
</div>
