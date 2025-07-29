<?php
	defined("_AST") or die("Access denied");
	SiteBase::getData("contact");
?>
 <div class="container cont-blog">
     <div class="row">
          <div class="col-lg-12">
           <h3 class="titr">تماس با ما</h3>
            <ol class="breadcrumb">
                <li>
                    <a href="index.php">خانه</a>
                </li>
                
                <li class="active">تماس با ما</li>
                
            </ol>
       </div>
     </div>
     <div class="row">
         <div class="col-md-8">
             <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&language=fa"></script><script src="http://kharido.ir/OtherPage/GoogleMapsInYourSite.js.aspx?idObjectMap=69648" type="text/javascript"></script>  <div id="map_canvas" style="width:500px; height:500px; "> <a href="http://kharido.ir">آگهی دادن</a> </div>
         </div>
         <div class="col-md-4">
             <?= $pageDetails['text']; ?>
             
         </div>
     </div>
     <div class="row">
         <div class="col-md-8">
            <h3>ارسال پیام</h3>
            <form id="frmContact">
                <div class="form-group">
                    <div class="controls">
                        <label>نام و نام خانوادگی :</label>
                        <input type="text" class="form-control" name="txtName">
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="form-group">
                    <div class="controls">
                        <label>شماره تماس :</label>
                        <input type="tel" class="form-control" name="txtPhone">
                    </div>
                </div>
                <div class="form-group">
                    <div class="controls">
                        <label>آدرس ایمیل :</label>
                        <input type="email" class="form-control" name="txtEmail">
                    </div>
                </div>
                <div class="form-group">
                    <div class="controls">
                        <label>متن پیام :</label>
                        <textarea rows="10" cols="100" class="form-control" name="txtMessage" maxlength="999" style="resize:none"></textarea>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary">ارسال پیام</button>
                
                <div class="text-center"></div>
            </form>
         </div>
     </div>
     <hr>
 </div>
 