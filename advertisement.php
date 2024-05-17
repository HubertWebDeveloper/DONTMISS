<?php include_once 'includes/header.php'; ?>

   <main>
      <div class="container" style="margin-bottom:50px">
        <div class="row">
            <div class="col-md-12">
               <?php
               $msg ="";
               if(isset($_POST['btn'])){
                  $content = $_POST['content'];
                  $imgVid = $_FILES['img']['name'];
                  $status = "pending";
                  // chechikng if files is only image or video,
                  $target = $imgVid;
                  $img_exe = pathinfo($target, PATHINFO_EXTENSION);
                  if($img_exe == "jpg" || $img_exe == "png" || $img_exe == "mp4"){
                     // checking if files not more than 5mb.
                     $temp_name = $_FILES['img']['tmp_name'];
                     $bytes = fileSize($temp_name);
                     $kilo = round($bytes/1024,2);
                     $meg = round($kilo/1024,2);
                     if($meg < 25 || $kilo < 25000 ){
                        if($content =="" && $imgVid ==""){
                          $msg = "<label style='color:red;'>Please, Insert Image/Video Or Content.</label>";
                        }else if($content =="" && $imgVid !=""){
                           $img = $_FILES['img']['name'];
                           $temp_name = $_FILES['img']['tmp_name'];
                           move_uploaded_file($temp_name, "Advert_img/$img");
                           $new_content = "";
   
                           $insert = mysqli_query($con, "INSERT INTO `advertisement`(`file`, `content`, `status`) 
                           VALUES ('$img','$new_content','$status')");
                           if($insert){
                              $msg = "<label style='color:green'>Data inserted Successfuly.</label>";
                           }else{
                              $msg = "<label style='color:red'>Something went wrong, try again.</label>";
                           }
                        }
                     }else{
                        $msg = "<label style='color:red'>File should not be more than 25MB</label>";
                     }
                  }else{
                     $msg = "<label style='color:red'>File should be JPG,NPG,MP4 only.</label>";
                  }
                     if($content !="" && $imgVid ==""){
                        $img = "";
                        $new_content = $content;

                        $insert = mysqli_query($con, "INSERT INTO `advertisement`(`file`, `content`, `status`) 
                        VALUES ('$img','$new_content','$status')");
                        if($insert){
                           $msg = "<label style='color:green'>Data inserted Successfuly.</label>";
                        }else{
                           $msg = "<label style='color:red'>Something went wrong, try again.</label>";
                        }
                     }else if($content !="" && $imgVid !=""){
                        $img = $_FILES['img']['name'];
                        $temp_name = $_FILES['img']['tmp_name'];
                        move_uploaded_file($temp_name, "Advert_img/$img");

                        $insert = mysqli_query($con, "INSERT INTO `advertisement`(`file`, `content`, `status`) 
                        VALUES ('$img','$content','$status')");
                        if($insert){
                           $msg = "<label style='color:green'>Data inserted Successfuly.</label>";
                        }else{
                           $msg = "<label style='color:red'>Something went wrong, try again.</label>";
                        }
                     }
                  }
               ?>
               <b><?php echo $msg;?></b>
               <form action="" method="POST" enctype="multipart/form-data">
                     <div class="card mt-4" style="border:1px solid #00021d">
                        <div class="card-header" style="background:#00021d">
                           <h4 style="color:white">Make your Advertisement 
                           <button type="submit" name="btn" style="background:darkgreen;border:1px solid darkgreen" class="float-end btn btn-primary">Save</button>
                           </h4>
                        </div>
                        <div class="card-body">
                           <div class="main-form mt-3 border-bottom">
                              <div class="row">
                                    <div class="form-group col-12">
                                       <label for="">Image / Video</label>
                                       <input type="file" name="img" class="form-control">
                                       <span></span>
                                       <p style="color:red;font-size:13px">File should be in 'jpg','png','mp4'.</p>
                                       <p style="color:red;font-size:13px;margin-top:-10px">Your video shold be less than 25MB.</p>
                                    </div>
                                    <div class="form-group col-12">
                                       <label for="">Content</label>
                                       <textarea name="content" cols="30" rows="5" class="form-control" maxlength="298" placeholder="Write Advertisement Content..."></textarea>
                                       <p style="color:red;font-size:13px">Your Content shold be less than 298 Characters.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="paste-new-forms"></div>
                        </div>
                     </div>
               </form>
            </div>
         </div>
   </main>
   <script>
      let input = document.querySelector('input');
      let span = document.querySelector('span');

      input.addEventListener('change', () =>{
         let files = input.files;
         if(files.length > 0){
            if(files[0].size > 25000 * 1024){
               span.innerText = 'File should not be more than 25MB';
               return;
            }
         }
         span.innerText = '';
      })
   </script>

<?php include_once 'includes/pro_footer.php'; ?>
