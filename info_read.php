<?php include_once 'includes/header.php'; ?>

<main>
<!-- ---------- brands ------ -->
   <?php
      if(isset($_GET['id']) && isset($_GET['name']) && isset($_GET['new_name'])){
         $id = $_GET['id'];
         $cat_name = $_GET['name'];
         $name = $_GET['new_name'];

         $sell = mysqli_query($con, "SELECT * FROM session WHERE category='$cat_name' AND id='$id'");
         $row3 = mysqli_fetch_assoc($sell);

         $title = $row3['title'];
         $categ = $row3['category']
   ?>
   <div class="banners">  
            <div class="container">
               <div class="wrapper">
                  <div class="column">
                     <div class="container mt-0 mt-md-5">
                        <div class="row mt-0 mt-md-5">
                           <div class="col-lg-8" style="margin-bottom:10px">
                              <div class="full_post mt-5">
                                 <video src="session_video/<?php echo $row3['video'] ?>" controls autoplay mute></video>
                                 <h2 class="title" style="box-shadow:none;border:none">
                                    <span class="text">
                                       <div><?php echo $row3['title'] ?></div>
                                    </span>
                                 </h2>
                                 <div class="content" style="box-shadow: 0px 0px 10px 10px rgba(0, 0, 0, 0.2); padding:10px 10px"><?php echo $row3['subcontent'] ?></div>
                                 <div class="col-md-12 mt-5 comment_input_box">
                                    <h4 class="title">Post Your Comments.</h4>
                                    <form action="" method="POST">
                                       <input type="email" class="form-control" name="email" placeholder="Ex. example12@gmail.com" required><br>
                                       <textarea name="comment" class="form-control" id="" cols="30" rows="5" placeholder="Write your comment..." style="box-shadow: 0px 0px 10px 10px rgba(0, 0, 0, 0.5); "></textarea>
                                       <button class="post float-end" name="btn">Post Comment <i class="fas fa-paper-plane"></i></button>
                                       <a href="book_apointment.php?title=<?php echo $title ?>" class="post float-end">Book Appointment</a>
                                    </form>
                                    <?php
                                    if(isset($_POST['btn'])){
                                       $comment = $_POST['comment'];
                                       $title = $title;
                                       $user = $_POST['email'];

                                       $insert = mysqli_query($con, "INSERT INTO `hcomment`(`topic_title`, `comment`, `user`, `type`) 
                                       VALUES ('$title','$comment','$user','hospital')");
                                       
                                    }
                                    ?>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 mt-5">
                              <div class="row">
                                 <div class="col-md-12 latest_post ms-0 ms-md-3">
                                    <h4 class="title">More Related Topics</h4>
                                    <?php
                                      $sel1 = mysqli_query($con, "SELECT * FROM session WHERE type='$name' AND title !='$title'");
                                      $count1 = mysqli_num_rows($sel1);
                                      if($count1 > 0){
                                       while($ro2 = mysqli_fetch_assoc($sel1)){
                                          $id2 = $ro2['id'];
                                          ?>
                                          <div class="post">
                                             <a href="info_read.php?id=<?php echo $id2; ?> && name=<?php echo $categ; ?> && new_name=<?php echo $name ?>"><video src="session_video/<?php echo $ro2['video'] ?>" class="thumbnail"></video></a>
                                             <div class="content">
                                                <a style="box-shadow:none;border:none;color:#5a5a5a" href="info_read.php?id=<?php echo $id2; ?> && name=<?php echo $categ; ?> && new_name=<?php echo $name ?>" class="title"><?php echo $ro2['title'] ?></a>
                                             </div>
                                          </div>
                                          <?php
                                       }
                                      }
                                    ?>
                                 </div>
                                 <div class="col-md-12 latest_comment ms-0 ms-md-3">
                                    <h4 class="title">Latest Comments</h4>
                                    <?php
                                    $select2 = mysqli_query($con, "SELECT * FROM hcomment WHERE type='$cat_name' ORDER BY id DESC LIMIT 10");
                                    $count2 = mysqli_num_rows($select2);
                                    if($count2 > 0){
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
                                    }
                                    ?>
                                    
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
   </div>  
   <?php 
      }else{
         echo "<script>window.open('index.php','_self')</script>";
      }
   ?> 
</main>

<?php include_once 'includes/pro_footer.php'; ?>