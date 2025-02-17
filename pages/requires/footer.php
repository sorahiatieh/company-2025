<?php
	defined("_AST") or die("Access denied");
    $setting=new DB_SETTING();
    $socialNetwork=json_decode($setting->getSetting("social_network"),true);
    $mainFooter=json_decode($setting->getSetting("main_footer"),true);
    $mainAddress=json_decode($setting->getSetting("main_address"),true);
    $mainCopyright=json_decode($setting->getSetting("main_copyright"),true);
    
?>
<div class="footer-top">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-sm-4 col-xs-12">
				<ul class="list-inline social-list">
                    <?php
	                    foreach($socialNetwork as $key=>$value){
                    ?>
					<li><a href="<?= $value['Link']; ?>" target="_blank"><i class="fi <?= $value['Icon'];  ?>"></i></a></li>
                    <?php
	                    }
                    ?>
				</ul>
			</div>
			<?php
				foreach($mainFooter as $key=>$value){
            ?>
			<div class="col-lg-4 col-sm-4 col-xs-12">
				<h3><i class="fi <?= $value['IconPhone'] ; ?>"></i><?= $value['Phone'] ; ?></h3>
			</div>
			<div class="col-lg-4 col-sm-4 col-xs-12">
				<h3><i class="fi <?= $value['IconQuestion'] ; ?>"></i><?= $value['QuestionText'] ; ?></h3>
			</div>
			<?php
				}
			?>
		</div>
	</div>
</div>
<div class="footer-middle">
	
	<div class="container">
		<div class="row">
			<div class="footer-col col-md-4">
				<div class="footer-widget">
					<div class="footer-title">
						<h3>آمار بازدید</h3>
					</div>
					<ul class="list-inline">
						<li>بازدید امروز: 116</li>
						<li>بازدید دیروز: 249</li>
						<li>بازدید هفته: 677</li>
						<li>بازدید ماه: 1,632</li>
						<li>بازدید سال: 7,564</li>
						<li>کل بازدید ها: 7,564</li>
					</ul>
				</div>
			</div>
			<div class="footer-col col-md-4">
				<div class="footer-widget">
					<div class="footer-title">
						<h3>نوشته های جدید</h3>
					</div>
					<ul class="list-inline">
						<li><a href="way-index.php">ارائه راهکارها و شرایط سخت تایپ به پایان رسد</a></li>
						<li><a href="future-index.php">حال و آینده شناخت فراوان جامعه و متخصصان</a></li>
						<li><a href="lorem-index.php">لورم ایپسوم متن ساختگی با تولید سادگی</a></li>
						<li><a href="helloworld-index.php">سلام دنیا!</a></li>
					
					</ul>
				</div>
			</div>
			<div class="footer-col col-md-4">
				<div class="footer-widget">
					<?php
						foreach($mainAddress as $key=>$value){
                    ?>
					<div class="footer-title">
						<h3><?= $value['Title']; ?></h3>
					</div>
					<p><?= $value['Address']; ?></p>
					<p><i class="fi <?= $value['IconPhone']; ?>"></i>
						<?= $value['Address']; ?></p>
					<p>
						<i class="fi <?= $value['IconEmail']; ?>"></i>
						<a href="<?= $value['Email']; ?>"><?= $value['Email']; ?></a>
						<img src="<?= $value['ImageURL']; ?>" alt="<?= $value['Title']; ?>">
					</p>
                    <?php
	                    }
                    ?>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="footer-down">
	<div class="container">
		<div class="row">
            <?php
	            foreach($mainCopyright as $key=>$value){
            ?>
			<div class="copyright col-lg-6 col-sm-6 text-right"><?= $value['Title'] ; ?> ©</div>
			<div class="lemontheme col-lg-6 col-sm-6 text-left">
				<a href="<?= $value['URL'] ; ?>" target="_blank">
					<img src="<?= $value['ImageUrl'] ; ?>" alt="lemontheme" title="lemontheme">
				</a>
			</div>
            <?php
	            }
            ?>
		</div>
	</div>
</div>