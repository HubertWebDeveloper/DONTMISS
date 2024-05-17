<?php include_once 'includes/header.php'; ?>

<main>
   <?php
     if(isset($_GET['new_name'])){
      $cat_name = $_GET['new_name'];
   ?>
   <div class="category">
     <div class="container">
         <div><button class="icon prev" onclick="prev()"><i class="fas fa-angle-double-left"></i></button></div>
         <div><button class="icon b next" onclick="next()"><i class="fas fa-angle-double-right"></i></button></div>

         <div class="category-item-container">
           <?php
             $select = mysqli_query($con, "SELECT * FROM category WHERE category='$cat_name'");
             $counts = mysqli_num_rows($select);
             if($counts > 0){
               while($row = mysqli_fetch_assoc($select)){
                 $name = $row['name'];
                 $logo = $row['logo'];
                 ?>
                 <div class="category-item">
                   <div class="category-img-box">
                       <?php 
                        $img_exe = pathinfo($logo, PATHINFO_EXTENSION);
                        if($img_exe !=""){
                        ?><img src="logo_img/<?php echo $row['logo'] ?>" alt="dress & frock" width="30"><?php
                        }else{
                        ?><i class="<?php echo $row['logo'] ?>" style="width:30px;text-align:center"></i><?php
                        }
                       ?>
                     
                   </div>
                   <div class="category-content-box">
                     <div class="category-content-flex">
                       <h3 class="category-item-title"><?php echo $row['name'] ?></h3>
                     </div>
                     <a href="serviceView.php?name=<?php echo $name; ?> && new_name=<?php echo $cat_name ?>" class="category-btn">Show all</a>
                   </div>
                 </div>
                 <?php
               }
             }
           ?>
         </div>
      </div>
   </div>
   <div class="banners">  
      <div class="container">
         <div class="wrapper">
            <div class="column">
               <div class="container mt-0 mt-md-5">
                  <div class="row mt-0 mt-md-5">
                     <div class="col-lg-8">
                              <?php
                              if(isset($_GET['page'])){
                                 $page = $_GET['page'];
                              }else{
                                 $page = 1;
                              }
                              $number_per_page = 11;
                              $start_from = ($page-1)*11;

                                $sel = mysqli_query($con, "SELECT * FROM session WHERE type='$cat_name' LIMIT $start_from,$number_per_page");
                                $count = mysqli_num_rows($sel);
                                if($count > 0){
                                 while($ro = mysqli_fetch_assoc($sel)){
                                    $id = $ro['id'];
                                    $title = $ro['title'];
                                    $categ = $ro['category'];
                                    $date = $ro['date_release'];
                                    $newDate = date('d-M-Y', strtotime($date));
                                    ?>
                                    <div class="card post-box mt-5" style="margin-bottom:30px">
                                       <div class="row" style="--postdate: '<?php echo $newDate ?>'">
                                          <div class="col-md-5 text-center">
                                             <a href="info_read.php?id=<?php echo $id; ?> && name=<?php echo $categ; ?> && new_name=<?php echo $cat_name ?>">
                                                <video class="post-image" src="session_video/<?php echo $ro['video'] ?>"></video>
                                             </a>
                                          </div>
                                          <div class="col-md-7">
                                             <h2><a href="info_read.php?id=<?php echo $id; ?> && name=<?php echo $categ; ?> && new_name=<?php echo $cat_name ?>" class="title" style="box-shadow: none;border:none"><?php echo $ro['title'] ?></a></h2>
                                             <div>By Admin |</div>
                                             <?php
                                               $com_select = mysqli_query($con, "SELECT * FROM hcomment WHERE topic_title='$title'");
                                               $com_count = mysqli_num_rows($com_select);
                                             ?>
                                             <p class="content justify"><?php echo $ro['subcontent'] ?></p>
                                             <div class="df-jcsb">
                                                <div class="social" style="display:flex">
                                                   <a href=""><i class="fab fa-facebook-f"></i></a>
                                                   <a href=""><i class="fab fa-whatsapp"></i></a>
                                                   <a href=""><i class="fab fa-twitter"></i></a>
                                                </div>
                                                <a href="info_read.php?id=<?php echo $id; ?> && name=<?php echo $categ; ?> && new_name=<?php echo $cat_name ?>" class="read_more">Read More<i class="fas fa-arrow-right"></i></a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="container" style="margin-bottom:50px">
                                       <nav aria-label="..." style="float:right">
                                          <ul class="pagination" style="display:flex">
                                             <?php
                                              $sql_page = mysqli_query($con, "SELECT * FROM session WHERE type='$cat_name'");
                                              $total = mysqli_num_rows($sql_page);
                                              $total_page = ceil($total/$number_per_page);
                                               if($page>1){
                                                ?>
                                                  <li class="page-item">
                                                      <a class="page-link" href="service.php?page=<?php echo ($page-1); ?>"><i class="fas fa-angle-double-left"></i> Previous</a>
                                                   </li>
                                                <?php
                                               }
                                              for($i=1;$i<$total_page;$i++){
                                                  ?>
                                                      <li class="page-item">
                                                         <a class="page-link page" href="service.php?page=<?php echo $i ?>"><?php echo $i ?></a>
                                                      </li>
                                                  <?php
                                              }
                                              if($i>$page){
                                                ?>
                                                   <li class="page-item">
                                                      <a class="page-link" href="service.php?page=<?php echo ($page+1); ?>">Next <i class="fas fa-angle-double-right"></i></a>
                                                   </li>
                                                <?php
                                               }
                                             ?>
                                          </ul>
                                       </nav>
                                    </div>
                                    <?php
                                 }
                                }
                              ?>
                              
                     </div>
                     <?php }else{ echo "<script>window.open('index.php','_self')</script>";} ?>
                     <div class="col-lg-4 mt-5">
                     <?php
                              $select2 = mysqli_query($con, "SELECT * FROM hcomment WHERE type='$cat_name' ORDER BY id DESC LIMIT 10");
                              $count2 = mysqli_num_rows($select2);
                              if($count2 > 0){
                                 ?>
                        <div class="row">
                           <div class="col-md-12 latest_comment ms-0 ms-md-3" style="margin-top:-50px">
                              <h4 class="title">Latest Comments</h4>
                              <?php
                                 while($row2 = mysqli_fetch_assoc($select2)){
                                    ?>
                                    <div class="comment_box mt-3">
                                       <div class="comment">
                                          <?php echo $row2['comment'] ?>
                                       </div>
                                       <div class="comment_by">
                                          <?php echo $row2['user'] ?> On <a href="#">"<?php echo $row2['topic_title'] ?>"</a>
                                       </div>
                                    </div>
                                    <?php
                                 }
                              ?>
                           </div>
                        </div>
                        <?php }?>
                              <?php
                                 if($cat_name=="health"){
                                    $new_select = mysqli_query($con, "SELECT * FROM partner WHERE category='health'");
                                 }else if($cat_name=="consultation"){
                                    $new_select = mysqli_query($con, "SELECT * FROM partner WHERE category='consultation'");
                                 }else if($cat_name=="mediation"){
                                    $new_select = mysqli_query($con, "SELECT * FROM partner WHERE category='mediation'");
                                 }
                                 
                                 $new_count = mysqli_num_rows($new_select);
                                 if($new_count > 0){
                                     ?>
                                        <div class="col-md-12 categories ms-0 ms-md-3">
                                            <h4 class="title">Our Partnership Doctors</h4>
                                            <ul>
                                     <?php
                                    while($new_row = mysqli_fetch_assoc($new_select)){
                                        $id = $new_row['id'];
                                    ?>
                                       <li><a href="doctor_profile.php?id=<?php echo $id; ?>"><i class="fas fa-user"></i><?php echo $new_row['name'] ?> <b style="font-size:13px">(<?php echo $new_row['about'] ?>)</b></a></li>
                                    <?php
                                    }
                                 }
                              ?>    
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</main>

<?php include_once 'includes/pro_footer.php'; ?>