<?php
	$output=array();
	
	//why
	$output['Titel']='چرا باید شرکت ما را انتخاب نمایید';
	$output['Text']="<p>
			لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.
		</p>
		<p>
			در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
		</p>
		<ul>
			<li>خلاقیت در طراحی</li>
			<li>طراحی و چاپ ست اداری</li>
			<li>طراحی و چاپ کارت ویزیت</li>
			<li>مشاور تبلیغات و بازاریابی</li>
			<li>فروش محصولات گرافیکی و آموزشی</li>
			<li>طراحی و چاپ بسته بندی های کارخانجات</li>
			<li>طراحی و برنامه نویسی اختصاصی وبسایت</li>
		</ul>'";
	$output['ImageURL']='assets/img/10.png';
	
	

	//slogan
	/*$output['Text']="لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.";
	$output['Link']="http://www.webim.ir/";
	$output['ButtonTitle']="مشاهده توصیه...";
	$output['NewWindow']=true;
	*/
	
	//social network
	/*$output['Facebook']=array(
		"Icon"=>"fi-facebook-squared",
		"Link"=>"https://facebook.com/",
);
	$output['Linkedin']=array(
		"Icon"=>"fi-linkedin-squared",
		"Link"=>"https://linkedin.com/",
	);
	$output['Twitter']=array(
		"Icon"=>"fi-twitter-squared",
		"Link"=>"https://twitter.com/",
	);
	$output['GooglePlus']=array(
		"Icon"=>"fi-gplus-squared",
		"Link"=>"https://plus.google.com/",
	);
	*/
	//tamas
	/*$output["Footer"]=array(
		"IconPhone"=>"fi-phone-squared",
		"Phone"=>"041-35574907",
		"IconQuestion"=>"fi-question",
		"QuestionText"=>"سوالات متداول",
	);
	*/
	//Address
	/*$output["Address"]=array(
		"Title"=>"اطلاعات تماس",
		"IconPhone"=>"fi-phone-1",
		"Phone"=>"041-33356089",
		"Address"=>"آذربایجان شرقی - تبریز - آبـرسان ، خیابان پاستـور جدید ، تقاطـع ۱۳ آبـان ، پلاک ۹۵ طبـقه دوم",
		"Email"=>"lemontheme.com@gmail.com",
		"IconEmail"=>"fi-mail",
		"ImageURL"=>"assets/img/company-logo-black.png"
	);
	*/
	//CopyRight
	/*$output["CopyRight"]=array(
		"Title"=>"تمامی حقوق سایت اعم از قالب و محتوا برای وبیم محفوظ می باشد ",
		"URL"=>"http://lemontheme.com/",
		"ImageUrl"=>"assets/img/lemontheme.png"
	);
	*/
	exit(json_encode($output,JSON_UNESCAPED_UNICODE));
?>