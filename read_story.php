<?php include_once 'includes/header.php'; ?>

<main>
         <?php
         if(isset($_GET['id']) && isset($_GET['email'])){
            $id = $_GET['id'];
            $email = $_GET['email'];

            $check = mysqli_query($con, "SELECT * FROM payment WHERE topic_id='$id' AND email='$email'");
            $count = mysqli_num_rows($check);
            if($count > 0){
               $sel = mysqli_query($con, "SELECT * FROM story WHERE id='$id'");
               $row = mysqli_fetch_assoc($sel);
               $title = $row['title'];
            }else{
               echo "<script>window.open('payment.php?id=$id','_self')</script>";
            } 
         }else if(isset($_GET['title2']) && isset($_GET['id2'])){
            $title2 = $_GET['title2'];
            $id = $_GET['id2'];

            $sel2 = mysqli_query($con, "SELECT * FROM story WHERE id='$id'");
            $row = mysqli_fetch_assoc($sel2);
            $title = $row['title'];
         }
         ?>
         <div class="banners">  
            <div class="container">
               <div class="wrapper">
                  <div class="column">
                     <div class="container mt-0 mt-md-5">
                        <div class="row mt-0 mt-md-5">
                           <div class="col-lg-8">
                              <div class="full_post mt-5">
                                 <video src="session_video/<?php echo $row['video'] ?>" controls autoplay mute></video>
                                 <h2 class="title" style="box-shadow:none;border:none">
                                    <span class="text">
                                       <div><?php echo $row['title'] ?></div>
                                    </span>
                                 </h2>
                                 <select id="name" style="padding:10px 10px;border-radius:10px;background:#5a5a5a;color:white">
                                    <option value="kinyarwanda">Mu Kinyarwanda</option>
                                    <option value="english">In English</option>
                                    <option value="french">En français</option>
                                 </select>
                                 <div class="data" id="kinyarwanda">
                                    <div class="content"><?php echo $row['content'] ?>.</div>
                                 </div>
                                 <div class="data" id="english">
                                    <div class="content">In support of the work of Embrace Rwanda we appreciate our Patron The Most Rev. Dr. Onesphore Rwaje, retired Archbishop of the Province of Anglican Church of Rwanda.</div>
                                 </div>
                                 <div class="data" id="french">
                                    <div class="content">En soutien au travail d'Embrace Rwanda, nous apprécions notre Patron, Mgr Onesphore Rwaje, archevêque à la retraite de la province de l'Église anglicane du Rwanda.</div>
                                 </div>
                                 
                                 <div class="col-md-12 mt-5 comment_input_box">
                                    <h4 class="title">Post Your Comments.</h4>
                                    <form action="" method="POST">
                                       <input type="email" class="form-control" name="email" placeholder="Ex. example@gmail.com" required><br>
                                       <textarea name="comment" class="form-control" id="" cols="30" rows="5" placeholder="Write your comment..."></textarea>
                                       <button class="post float-end" name="btn">Post Comment <i class="fas fa-paper-plane"></i></button>
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
                                    <h4 class="title" style="margin-bottom:50px">More Episode of the Topic</h4>
                                    <?php
                                     $select = mysqli_query($con, "SELECT * FROM story WHERE title LIKE '%$title%' AND id !='$id'");
                                     $counts = mysqli_num_rows($select);
                                     if($counts > 0){
                                       while($rows = mysqli_fetch_assoc($select)){
                                          $id2 = $rows['id'];
                                          $title2 = $rows['title'];
                                          ?>
                                          <div class="post" style="margin-bottom:50px">
                                             <a href="read_story.php?title2=<?php echo $title2; ?> && id2=<?php echo $id2; ?>"><video src="session_video/<?php echo $rows['video'] ?>" class="thumbnail"></video></a>
                                             <div class="content">
                                                <a href="read_story.php?title2=<?php echo $title2; ?> && id2=<?php echo $id2; ?>" class="title"><?php echo $rows['title'] ?></a>
                                                <a href="read_story.php?title2=<?php echo $title2; ?> && id2=<?php echo $id2; ?>" style="text-decoration:none"><div class="desc"><?php echo $rows['subcontent'] ?></div></a>
                                             </div>
                                          </div>
                                          <?php
                                       }
                                     }else{
                                       ?>
                                          <div class="post" style="margin-bottom:50px">
                                             <div class="content">
                                                <a href="#" style="color:#5a5a5a;border-radius:10px;padding:10px 10px;box-shadow: rgba(0 0 0 / 20%) 0 30px 20px -20px;" class="title">No More topics About <?php echo $title;?>.</a>
                                             </div>
                                          </div>
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
            </div>
         </div> 
      </main>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#name").on('change', function(){
                $(".data").hide();
               $("#" + $(this).val()).fadeIn(700);
            }).change();
        });
    </script>
    <script>
        $(document).ready(function (c) {
            $('.alert-close').on('click', function (c) {
                $('.main-mockup').fadeOut('slow', function (c) {
                    $('.main-mockup').remove();
                });
            });
        });
    </script>

<?php include_once 'includes/pro_footer.php'; ?>
