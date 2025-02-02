 <div class="container cont-blog">
     <div class="breadcrumb">
         <div class="col-lg-12">
             <h2 class="titr">پروژه ها</h2>
             <ol class="breadcrumb">
                <li>
                    <a href="index.php">خانه</a>
                </li>
                <li class="active">پروژه ها</li>
            </ol>
         </div>
     </div>
     <hr>
     <div class="row">
         <div class=" row">
             <?php
                 for($i=0;$i<8;$i++){
             ?>
             <div class="items col-md-4">
                 <a href="index.php?page=project_details&id=<?= $i; ?>"><img src="assets/img/8.jpg" alt=""></a>
                 <h4><a href="#">نمونه کار هشتم</a></h4>
                 <p></p>
                 <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                 <p></p>
             </div>
         <?php
	         }
         ?>
        </div>
 </div>
 </div>
     