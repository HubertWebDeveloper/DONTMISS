<?php include_once 'includes/header.php'; ?>

<main>
<!-- ---------- brands ------ -->
<?php 
if(isset($_GET['name'])){
   $cat_name = $_GET['new_name'];
}
   if(isset($_GET['page'])){
      $page = $_GET['page'];
   }else{
      $page = 1;
   }
   $number_per_page = 11;
   $start_from = ($page-1)*11;
   ?>
   <div class="banners">  
      <div class="container">
         <div class="wrapper">
            <div class="column">
               <div class="container mt-0 mt-md-5">
                  <div class="row mt-0 mt-md-5">
                     <div class="col-lg-8">
                        <?php
                           $sel = mysqli_query($con, "SELECT * FROM session WHERE type='$cat_name' LIMIT $start_from,$number_per_page");
                           $count = mysqli_num_rows($sel);
                           if($count > 0){
                              while($ro = mysqli_fetch_assoc($sel)){
                              $id = $ro['id'];
                              ?>
                              <div class="card post-box mt-5" style="margin-bottom:30px">
                                 <div class="row" style="--postdate: '<?php echo $ro['date_release'] ?>'">
                                    <div class="col-md-5 text-center">
                                       <a href="info_read.php?id=<?php echo $id; ?> && name=<?php echo $cat_name; ?> && new_name=<?php echo $cat_name ?>">
                                          <video class="post-image" src="session_video/<?php echo $ro['video'] ?>"></video>
                                       </a>
                                    </div>
                                    <div class="col-md-7">
                                       <h2><a href="info_read.php?id=<?php echo $id; ?> && name=<?php echo $cat_name; ?> && new_name=<?php echo $cat_name ?>" class="title" style="box-shadow: none;border:none"><?php echo $ro['title'] ?></a></h2>
                                       <div>By Admin |</div>
                                       <p class="content justify"><?php echo $ro['subcontent'] ?></p>
                                       <div class="df-jcsb">
                                          <div class="social" style="display:flex">
                                             <a href=""><i class="fab fa-facebook-f"></i></a>
                                             <a href="https:api.whatsapp.com/send?phone=0781794795"><i class="fab fa-whatsapp"></i></a>
                                             <a href=""><i class="fab fa-twitter"></i></a>
                                          </div>
                                          <a href="info_read.php?id=<?php echo $id; ?> && name=<?php echo $cat_name; ?> && new_name=<?php echo $cat_name ?>" class="read_more">Read More<i class="fas fa-arrow-right"></i></a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="container" style="margin-bottom:50px">
                                       <nav aria-label="..." style="float:right">
                                          <ul class="pagination" style="display:flex">
                                             <?php
                                                $sql_page = mysqli_query($con, "SELECT * FROM session WHERE category='$cat_name'");
                                                $total = mysqli_num_rows($sql_page);
                                                $total_page = ceil($total/$number_per_page);
                                                if($page>1){
                                                ?>
                                                   <li class="page-item">
                                                      <a class="page-link" href="serviceSearch.php?page=<?php echo ($page-1); ?> && type=<?php echo $type;?>"><i class="fas fa-angle-double-left"></i> Previous</a>
                                                   </li>
                                                <?php
                                                }
                                                for($i=1;$i<$total_page;$i++){
                                                   ?>
                                                      <li class="page-item">
                                                         <a class="page-link page" href="serviceSearch.php?page=<?php echo $i ?> && type=<?php echo $type;?>"><?php echo $i ?></a>
                                                      </li>
                                                   <?php
                                                }
                                                if($i>$page){
                                                ?>
                                                   <li class="page-item">
                                                      <a class="page-link" href="serviceSearch.php?page=<?php echo ($page+1); ?> && type=<?php echo $type;?>">Next <i class="fas fa-angle-double-right"></i></a>
                                                   </li>
                                                <?php
                                                }
                                             ?>
                                          </ul>
                                       </nav>
                              </div>
                              <?php
                           }
                           }else{
                           ?>
                              <div class="card post-box mt-5" style="text-align:center;color:red;font-size:23px;margin-bottom:20px">No Seassion Found for "<?php echo $cat_name ?>"</div>
                           <?php
                           }
                        ?>     
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</main>

<?php include_once 'includes/pro_footer.php'; ?>