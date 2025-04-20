-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 20, 2025 at 07:23 AM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `company-2025`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blogs`
--

DROP TABLE IF EXISTS `tbl_blogs`;
CREATE TABLE IF NOT EXISTS `tbl_blogs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `text` text NOT NULL,
  `keywords` varchar(1000) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `description` varchar(1500) NOT NULL,
  `date` int NOT NULL,
  `enable` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbl_blogs`
--

INSERT INTO `tbl_blogs` (`id`, `title`, `text`, `keywords`, `description`, `date`, `enable`) VALUES
(1, 'ارائه راهکارها و شرایط سخت تایپ به پایان رسد', '<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>\n                <hr>\n                <div>\n                    <div>\n                        <div id=\"respond\">\n                            <h3>ارسال دیدگاه</h3>\n                            <form action=\"\" method=\"post\" id=\"commentform\">\n                              <p>\n                                  <label for=\"author\">\n                                      <smal>\n                                          نام\n                                          <span class=\"requer\"></span>\n                                      </smal>\n                                  </label>\n                                  <input type=\"text\" class=\"form-control\" name=\"author\" id=\"author\" value size=\"22\" tabindex=\"1\">\n                              </p>\n                              <p><label for=\"email\">\n                                      <smal>\n                                          ایمیل\n                                          <span class=\"requer\"></span>\n                                      </smal>\n                                  </label>\n                                  <input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\" value size=\"22\" tabindex=\"2\">\n                              </p>\n                              <p>\n                                  <label for=\"url\">\n                                      <smal>آدرس سایت</smal>\n                                  </label>\n                                  <input type=\"text\" class=\"form-control\" name=\"url\" id=\"url\" value size=\"22\" tabindex=\"3\">\n                              </p>\n                              <p>\n                                  <textarea class=\"form-control\" name=\"comment\" id=\"comment\" cols=\"100%\" rows=\"5\" tabindex=\"4\"></textarea>\n                              </p>\n                              <p>\n                                  <span class=\"button-wrapper\">\n                                      <input type=\"submit\" class=\"button btn btn-primary\" name=\"submit\" tabindex=\"5\" value=\"ارسال\">\n                                  </span> \n                              </p>\n                            </form>\n                            <br>\n                            <br>\n                            <br>\n                        </div>\n                    </div>\n                </div>', 'راهکار، اخبار، شرایط سخت', 'توضیح اولین بلاگ', 1439021382, 1),
(2, 'حال و آینده شناخت فراوان جامعه و متخصصان', '<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>\n                <hr>\n                <p>Comments are closed.</p>\n                <br>\n                <br>\n                <br>\n                <br>\n                <br>\n                <hr>', 'راهکار، اخبار، شرایط سخت', 'توضیح دومین بلاگ', 1739000382, 1),
(3, 'لورم ایپسوم متن ساختگی با تولید سادگی', '<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>\n                <hr>\n                <p>Comments are closed.</p>\n                <br>\n                <br>\n                <br>\n                <br>\n                <br>\n                <br>\n                <br>\n                <br>\n                <br>\n                <hr>', 'راهکار، اخبار، شرایط سخت', 'توضیح سومین بلاگ', 1739020382, 1),
(4, 'سلام دنیا!', '<p>به وردپرس فارسی خوش آمدید.‌ این نخستین نوشته‌‌ی شماست. می‌توانید ویرایش یا پاکش کنید و پس از آن نوشتن را آغاز کنید!</p>\n                <hr> \n                <div>\n                <h3>۲ دیدگاه برای  &#8220;سلام دنیا!&#8221;</h3>\n                </div>\n                <ul class=\"commentlist\">\n                <li class=\"comment even thread-even depth-1\" id=\"comment-1\">\n                <div id=\"div-comment-1\" class=\"comment-body\">\n                <div class=\"comment-author vcard\"><img src=\"assets/img/avatar.jpg\" class=\'avatar avatar-64 photo avatar-default\'  alt=\"avatar\">\n                <cite class=\"fn\"><a href=\'http://lemontheme.com/\' rel=\'external nofollow\' class=\'url\'>قالب وردپرس</a></cite> <span class=\"says\">می‌گه:</span>		</div>\n\n                <div class=\"comment-meta commentmetadata\"><a href=\"http://demo.theme-wordpress.ir/company/?p=1#comment-1\">\n                اسفند ۲, ۱۳۹۴ در ۱۲:۲۷ ب٫ظ</a>		</div>\n\n                <p>سلام،‌ این نوشته یک «دیدگاه» است.<br />\n                برای پاک کردن یا ویرایش یک دیدگاه، باید وارد بخش مدیریت شوید، سپس به بخش دیدگاه‌ها بروید٬ در آن‌جا می‌توانید دیدگاه‌ها را ویرایش و یا پاک کنید.</p>\n\n                <div class=\"reply\"><a rel=\'nofollow\' class=\'comment-reply-link\' href=\'http://demo.theme-wordpress.ir/company/?p=1&#038;replytocom=1#respond\' onclick=\'return addComment.moveForm( \"div-comment-1\", \"1\", \"respond\", \"1\" )\' aria-label=\'پاسخ به قالب وردپرس\'>پاسخ دادن</a></div>\n                </div>\n                </li><!-- #comment-## -->\n                <li class=\"comment odd alt thread-odd thread-alt depth-1\" id=\"comment-2\">\n                <div id=\"div-comment-2\" class=\"comment-body\">\n                <div class=\"comment-author vcard\">\n                <img src=\"assets/img/avatar.jpg\" class=\'avatar avatar-64 photo avatar-default\'  alt=\"avatar\"><cite class=\"fn\">غریبه</cite> <span class=\"says\">می‌گه:</span>		</div>\n\n                <div class=\"comment-meta commentmetadata\"><a href=\"http://demo.theme-wordpress.ir/company/?p=1#comment-2\">\n                فروردین ۵, ۱۳۹۵ در ۸:۲۶ ب٫ظ</a>		</div>\n\n                <p>تست دیدگاه</p>\n\n                <div class=\"reply\"><a rel=\'nofollow\' class=\'comment-reply-link\' href=\'http://demo.theme-wordpress.ir/company/?p=1&#038;replytocom=2#respond\' onclick=\'return addComment.moveForm( \"div-comment-2\", \"2\", \"respond\", \"1\" )\' aria-label=\'پاسخ به غریبه\'>پاسخ دادن</a></div>\n                </div>\n                </li><!-- #comment-## -->\n\n                </ul>\n\n                <div>\n                <div>\n                <div id=\"respond\">\n\n                <h3>ارسال دیدگاه</h3>\n                <div class=\"cancel-comment-reply\">\n                <small><a rel=\"nofollow\" id=\"cancel-comment-reply-link\" href=\"/company/?p=1#respond\" style=\"display:none;\">برای صرف‌نظر کردن از پاسخ‌گویی اینجا را کلیک کنید.</a></small>\n                <form action=\"\" method=\"post\" id=\"commentform\">\n                              <p>\n                                  <label for=\"author\">\n                                      <smal>\n                                          نام\n                                          <span class=\"requer\"></span>\n                                      </smal>\n                                  </label>\n                                  <input type=\"text\" class=\"form-control\" name=\"author\" id=\"author\" value size=\"22\" tabindex=\"1\">\n                              </p>\n                              <p><label for=\"email\">\n                                      <smal>\n                                          ایمیل\n                                          <span class=\"requer\"></span>\n                                      </smal>\n                                  </label>\n                                  <input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\" value size=\"22\" tabindex=\"2\">\n                              </p>\n                              <p>\n                                  <label for=\"url\">\n                                      <smal>آدرس سایت</smal>\n                                  </label>\n                                  <input type=\"text\" class=\"form-control\" name=\"url\" id=\"url\" value size=\"22\" tabindex=\"3\">\n                              </p>\n                              <p>\n                                  <textarea class=\"form-control\" name=\"comment\" id=\"comment\" cols=\"100%\" rows=\"5\" tabindex=\"4\"></textarea>\n                              </p>\n                              <p>\n                                  <span class=\"button-wrapper\">\n                                      <input type=\"submit\" class=\"button btn btn-primary\" name=\"submit\" tabindex=\"5\" value=\"ارسال\">\n                                  </span> \n                              </p>\n                            </form>\n                            <br>\n                            <br>\n                            <br>\n                </div>\n                </div>\n                </div>\n                </div>', 'راهکار، اخبار، شرایط سخت', 'توضیح چهارمین بلاگ', 1739031382, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contacts`
--

DROP TABLE IF EXISTS `tbl_contacts`;
CREATE TABLE IF NOT EXISTS `tbl_contacts` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `date` int NOT NULL,
  `ip` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbl_contacts`
--

INSERT INTO `tbl_contacts` (`id`, `fullname`, `phone`, `email`, `text`, `date`, `ip`) VALUES
(1, 'ali', '02176223549', 'aliagha@gmail.com', 'test', 1744562237, '::1'),
(2, 'ali', '02176223549', 'aliagha@gmail.com', 'test', 1744562991, '127.0.0.1'),
(3, 'mina', '09120234153', 'minabala@yahoo.com', 'this is test', 1744563099, '::1'),
(4, 'mina', '09120234153', 'minabala@yahoo.com', 'this is test', 1744563597, '::1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pages`
--

DROP TABLE IF EXISTS `tbl_pages`;
CREATE TABLE IF NOT EXISTS `tbl_pages` (
  `name` varchar(30) NOT NULL,
  `title` varchar(100) NOT NULL,
  `seo_title` varchar(150) NOT NULL,
  `link_title` varchar(150) NOT NULL,
  `text` text NOT NULL,
  `keywords` varchar(500) NOT NULL,
  `description` varchar(1500) NOT NULL,
  `custom_page` tinyint(1) NOT NULL DEFAULT '0',
  `enable` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbl_pages`
--

INSERT INTO `tbl_pages` (`name`, `title`, `seo_title`, `link_title`, `text`, `keywords`, `description`, `custom_page`, `enable`) VALUES
('gallery', 'گالری تصاویر', 'گالری تصاویر | تصاویر محصولات', 'گالری-محصولات-ترکیه-ای', 'متن گالری', 'گالری', 'گالری تصاویر', 1, 1),
('about', 'درباره ما', 'درباره شرکت کمپانی | درباره کمپانی', 'درباره-شرکت-کمپانی', '<img src=\"assets/img/blog/1.jpg\" alt=\"\"><br/><p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>', 'درباره ما', 'متن درباره ما', 0, 1),
('contact', 'تماس با ما', 'تماس با شرکت کمپانی | تماس با کمپانی', 'تماس-با-شرکت-کمپانی', '<h3>اطلاعات تماس</h3>\r\n             <p>آذربایجان شرقی - تبریز - آبـرسان ، خیابان پاستـور جدید ، تقاطـع ۱۳ آبـان ، پلاک ۹۵ طبـقه دوم </p>\r\n             <p><i class=\"fi fi-phone-1\"></i>۰۴۱-۳۳۳۵۶۰۸۹</p>\r\n             <p><i class=\"fi fi-mail\"></i><a href=\"mailto:lemontheme.com@gmail.com\">lemontheme.com@gmail.com</a></p>\r\n             <ul class=\"list-inline social-list\">\r\n                 <li><a href=\"#\"><i class=\"fi fi-facebook-squared\"></i></a></li>\r\n                 <li><a href=\"#\"><i class=\"fi fi-linkedin-squared\"></i></a></li>\r\n                 <li><a href=\"#\"><i class=\"fi fi-twitter-squared\"></i></a></li>\r\n                 <li><a href=\"#\"><i class=\"fi fi-gplus-squared\"></i></a></li>\r\n             </ul>', 'تماس با ما، تماس با شرکت', 'تماس با ما', 1, 1),
('blog', 'بلاگ', 'اخبار شرکت کمپانی | اخبار مهم', 'اخبار-مهم-شرکت-کمپانی', '', 'بلاگ، وبلاک', 'بلاگ، وبلاگ', 1, 1),
('show_blog', 'نمایش خبر', 'جزییات اخبار شرکت کمپانی | جزییات خبر کمپانیمهم اخبار کمپانی', 'نمایش-خبر-شرکت-کمپانی', '', 'خبر', 'خبر', 1, 1),
('project_details', 'متن پروژه ها', 'جزییات پروژه های شرکت کمپانی | جزییات پروژه ها', 'جزییات-پروژه', '', 'کلمات کلیدی پروژه ها', 'توضیحات پروژه ها', 1, 1),
('projects', 'پروژه ها', 'پروژه های شرکت کمپانی | پروژه کمپانی', 'پروژه-های-شرکت-کمپانی', '', 'پروژه ها', 'پروژه ها', 1, 1),
('main', 'خانه', 'خانه | صفحه اصلی | کمپانی', 'صفحه-اصلی', '', 'خانه، صفحه نخست، ', 'صفحه نخست', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_portfolioes`
--

DROP TABLE IF EXISTS `tbl_portfolioes`;
CREATE TABLE IF NOT EXISTS `tbl_portfolioes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `text` text NOT NULL,
  `keywords` varchar(1000) NOT NULL,
  `description` varchar(1500) NOT NULL,
  `date` int NOT NULL,
  `enable` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbl_portfolioes`
--

INSERT INTO `tbl_portfolioes` (`id`, `title`, `text`, `keywords`, `description`, `date`, `enable`) VALUES
(1, 'نمونه کار اول', '<p></p>\n                 <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>\n                 <p></p>', 'نمونه، نمونه کار، نمونه کار اول', 'توضیحات نمونه کار اول', 1739027496, 1),
(2, 'نمونه کار دوم', '<p></p>\n                 <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>\n                 <p></p>', 'نمونه، نمونه کار، نمونه کار دوم', 'توضیحات نمونه کار دوم', 1739027496, 1),
(3, 'نمونه کار سوم', '<p></p>\n                 <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>\n                 <p></p>', 'نمونه، نمونه کار، نمونه کار سوم', 'توضیحات نمونه کار سوم', 1739027496, 1),
(4, 'نمونه کار چهارم', '<p></p>\n                 <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>\n                 <p></p>', 'نمونه، نمونه کار، نمونه کار چهارم', 'توضیحات نمونه کار چهارم', 1739027496, 1),
(5, 'نمونه کار پنجم', '<p></p>\r\n                 <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>\r\n                 <p></p>', 'نمونه، نمونه کار، نمونه کار پنجم', 'توضیحات نمونه کار پنجم', 1739027496, 1),
(6, 'نمونه کارششم', '<p></p>\r\n                 <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>\r\n                 <p></p>', 'نمونه، نمونه کار، نمونه کار ششم', 'توضیحات نمونه کار ششم', 1741076902, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_services`
--

DROP TABLE IF EXISTS `tbl_services`;
CREATE TABLE IF NOT EXISTS `tbl_services` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `icon` varchar(30) NOT NULL,
  `sort` int NOT NULL,
  `enable` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbl_services`
--

INSERT INTO `tbl_services` (`id`, `title`, `text`, `icon`, `sort`, `enable`) VALUES
(1, 'خدمت اول', '<p>\n					لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم ...\n				</p>', 'fi-ok', 1, 1),
(2, 'خدمت دوم', '<p>\n					لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم ...\n				</p>', 'fi-gift', 2, 1),
(3, 'خدمت سوم', '<p>\n					لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم ...\n				</p>', 'fi-compass', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_settings`
--

DROP TABLE IF EXISTS `tbl_settings`;
CREATE TABLE IF NOT EXISTS `tbl_settings` (
  `name` varchar(50) NOT NULL,
  `value` text NOT NULL,
  `description` text NOT NULL,
  `enable` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbl_settings`
--

INSERT INTO `tbl_settings` (`name`, `value`, `description`, `enable`) VALUES
('service_title', 'خدمات شرکت', 'عنوان بخش سرویس در صفحه اصلی', 1),
('portfolio_title', 'آخرین نمونه کارها', 'عنوان بخش پورتفولیو در صفحه اصلی', 1),
('site_title', 'کمپانی |شرکت تجاری من', 'عنوان سایت', 1),
('site_keywords', 'کمپانی ،شرکت تجاری من', 'کلمات کلیدی', 1),
('site_description', 'کمپانی ،شرکت تجاری من، سایت شرکتی، سایت تجاری', 'توضیحات سایت', 1),
('blog_title', 'آخرین های وبلاگ', 'عنوان بخش آخرین بلاگ در صفحه اصلی', 1),
('main_why', '{\"Titel\":\"چرا باید شرکت ما را انتخاب نمایید\",\"Text\":\"\n\\r\\n\\t\\t\\tلورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.\\r\\n\\t\\t<\\/p>\\r\\n\\t\\t\n\n\\r\\n\\t\\t\\tدر این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.\\r\\n\\t\\t<\\/p>\\r\\n\\t\\t\n\n\\r\\n\\t\\t\\t\nخلاقیت در طراحی<\\/li>\\r\\n\\t\\t\\t\nطراحی و چاپ ست اداری<\\/li>\\r\\n\\t\\t\\t\nطراحی و چاپ کارت ویزیت<\\/li>\\r\\n\\t\\t\\t\nمشاور تبلیغات و بازاریابی<\\/li>\\r\\n\\t\\t\\t\nفروش محصولات گرافیکی و آموزشی<\\/li>\\r\\n\\t\\t\\t\nطراحی و چاپ بسته بندی های کارخانجات<\\/li>\\r\\n\\t\\t\\t\nطراحی و برنامه نویسی اختصاصی وبسایت<\\/li>\\r\\n\\t\\t<\\/ul>\'\",\"ImageURL\":\"assets\\/img\\/10.png\"}', 'متن صفحه چرا', 1),
('main_slogan', '{\"Text\":\"لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.\",\"Link\":\"http:\\/\\/www.webim.ir\\/\",\"ButtonTitle\":\"مشاهده توصیه...\",\"NewWindow\":true}', 'متن قسمت شعار', 1),
('social_network', '{\"Facebook\":{\"Icon\":\"fi-facebook-squared\",\"Link\":\"https:\\/\\/facebook.com\\/\"},\"Linkedin\":{\"Icon\":\"fi-linkedin-squared\",\"Link\":\"https:\\/\\/linkedin.com\\/\"},\"Twitter\":{\"Icon\":\"fi-twitter-squared\",\"Link\":\"https:\\/\\/twitter.com\\/\"},\"GooglePlus\":{\"Icon\":\"fi-gplus-squared\",\"Link\":\"https:\\/\\/plus.google.com\\/\"}}', 'فوتر شبکه های اجتماعی', 1),
('main_footer', '{\"Footer\":{\"IconPhone\":\"fi-phone-squared\",\"Phone\":\"041-35574907\",\"IconQuestion\":\"fi-question\",\"QuestionText\":\"سوالات متداول\"}}', 'فوتر بالا قسمت وسط', 1),
('main_address', '{\"Address\":{\"Title\":\"اطلاعات تماس\",\"IconPhone\":\"fi-phone-1\",\"Phone\":\"041-33356089\",\"Address\":\"آذربایجان شرقی - تبریز - آبـرسان ، خیابان پاستـور جدید ، تقاطـع ۱۳ آبـان ، پلاک ۹۵ طبـقه دوم\",\"Email\":\"lemontheme.com@gmail.com\",\"IconEmail\":\"fi-mail\",\"ImageURL\":\"assets\\/img\\/company-logo-black.png\"}}', 'قسمت آدرس و اطلاعات تماس در فوتر', 1),
('main_copyright', '{\"CopyRight\":{\"Title\":\"تمامی حقوق سایت اعم از قالب و محتوا برای وبیم محفوظ می باشد \",\"URL\":\"http:\\/\\/lemontheme.com\\/\",\"ImageUrl\":\"assets\\/img\\/lemontheme.png\"}}', 'فوتر قسمت کپی رایت', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sliders`
--

DROP TABLE IF EXISTS `tbl_sliders`;
CREATE TABLE IF NOT EXISTS `tbl_sliders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `sort` int NOT NULL,
  `enable` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbl_sliders`
--

INSERT INTO `tbl_sliders` (`id`, `title`, `sort`, `enable`) VALUES
(1, 'اسلاید اول', 1, 1),
(2, 'اسلاید دوم', 2, 1),
(3, 'اسلاید سوم', 3, 1),
(4, 'اسلاید چهارم', 4, 1),
(5, 'اسلاید پنجم', 5, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
