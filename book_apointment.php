<?php include_once 'includes/header.php'; ?>

   <main>
         <?php
         if(isset($_GET['title'])){
            $title = $_GET['title'];
         ?>
      <div class="container" style="margin-bottom:50px">
        <div class="row">
            <div class="col-md-12">
               <?php
               $msg ="";
               if(isset($_POST['btn'])){
                  $name = $_POST['name'];
                  $email = $_POST['email'];
                  $doctor = $_POST['doctor'];
                  $content = $_POST['content'];
                  $date = date("Y-m-d", strtotime($_POST['date']));
                  $status = "pending";

                  $insert = mysqli_query($con, "INSERT INTO `apointment`(`name`, `email`, `doctor`, `content`, `date`, `status`) 
                  VALUES ('$name','$email','$doctor','$content','$date','$status')");
                  if($insert){
                     $msg = "<label style='color:green'>Data inserted Successfuly.</label>";
                  }else{
                     $msg = "<label style='color:red'>Something went wrong, try again.</label>";
                  }
               }
               ?>
               <b><?php echo $msg;?></b>
               <form action="" method="POST" enctype="multipart/form-data">
                     <div class="card mt-4" style="border:1px solid #00021d">
                        <div class="card-header" style="background:#00021d">
                           <h4 style="color:white">Make your Appointment 
                           <button type="submit" name="btn" style="background:darkgreen;border:1px solid darkgreen" class="float-end btn btn-primary">Submit</button>
                           </h4>
                        </div>
                        <div class="card-body">
                           <div class="main-form mt-3 border-bottom">
                              <div class="row">
                                    <div class="form-group col-6">
                                       <label for="">Name</label>
                                       <input type="text" name="name" placeholder="Enter name" class="form-control" required>
                                    </div>
                                    <div class="form-group col-6">
                                       <label for="">Email</label>
                                       <input type="email" name="email" placeholder="Example@gmail.com" class="form-control" required>
                                    </div>
                                    <div class="form-group col-6">
                                       <label for="">Select Doctor</label>
                                       <select name="doctor" class="form-control" required>
                                          <?php
                                          $sel = mysqli_query($con, "SELECT * FROM `partner`");
                                          $count = mysqli_num_rows($sel);
                                          if($count > 0){
                                             while($row = mysqli_fetch_assoc($sel)){
                                                ?>
                                                  <option value="<?php echo $row['name'] ?>">Dr. <?php echo $row['name'] ?></option>
                                                <?php
                                             }
                                          }else{
                                             echo "No Doctor Found.";
                                          }
                                          ?>
                                          
                                       </select>
                                    </div>
                                    <div class="form-group col-6">
                                       <label for="">Consultation Date</label>
                                       <input type="date" name="date" class="form-control" required>
                                    </div>
                                    <div class="form-group col-12">
                                       <label for="">Shot sorry about your problems</label>
                                       <textarea name="content" cols="30" rows="5" class="form-control" maxlength="100" placeholder="Write Short Sorry About your problems..."></textarea>
                                       <p style="color:red;font-size:13px">Your Content shold be less than 100 Characters.</p>
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
         <?php 
         }else{
            echo "<script>window.open('index.php','_self')</script>";
         }
         ?>
      </main>

<?php include_once 'includes/pro_footer.php'; ?>
