<?php include_once '../includes/admin_header.php'; ?>

<div class="py-5">
  <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="border:1px solid #212F3C">
                <div class="card-header" style="background:#212F3C;color:white">
                        <h4>Don't Miss ( <b style="border-bottom:2px solid darkorange;border-radius:10px;padding:5px 5px">Sessions / Topics</b> )</h4>
                    </div>
                   <div class="modal" tabindex="-1">
                    
                    </div>
                    <div class="card-body">
                       <!-- Button trigger modal -->
                          <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                           New session
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">New Session</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <form action="" method="POST" enctype="multipart/form-data">
                                  <div class="row">
                                    <div class="form-group col-6">
                                      <label class="form-label">Session Title</label>
                                      <input type="text" class="form-control" name="name" placeholder="Enter product name" style="border:1px solid blue" required>
                                    </div>
                                    <!--<div class="form-group col-6">-->
                                    <!--  <label class="form-label">Session Video</label>-->
                                    <!--  <input type="file" class="form-control" name="image" style="border:1px solid blue" >-->
                                    <!--  <p style="color:red;font-size:13px">* File should be in 'mp4'.</p>-->
                                    <!--   <p style="color:red;font-size:13px;margin-top:-10px">Your video shold be 25MB. *</p>-->
                                    <!--</div>-->
                                    <div class="form-group col-6">
                                      <label class="form-label">Session Video</label>
                                      <input type="text" class="form-control" name="image" placeholder="video.mp4" style="border:1px solid blue" >
                                    </div>
                                    <div class="form-group col-6">
                                      <label class="form-label">Session Type</label>
                                      <select class="form-control" id="name" name="type" placeholder="Enter product name" style="border:1px solid blue" required>
                                         <option value="">Select Session type</option>
                                         <option value="health">Health Services</option>
                                         <option value="consultation">Consultation Services</option>
                                         <option value="mediation">Mediation Services</option>
                                      </select>
                                    </div>
                                    <div id="" class="form-group col-6 data">
                                    </div>
                                    <div id="health" class="form-group col-6 data">
                                      <label class="form-label">Session Category</label>
                                      <select name="category1" class="form-control" style="border:1px solid blue">
                                          <option value="">Select Category</option>
                                        <?php
                                         $sel = mysqli_query($con, "SELECT * FROM `category` WHERE category='health'");
                                         $count = mysqli_num_rows($sel);
                                         if($count > 0){
                                          while($rows = mysqli_fetch_assoc($sel)){
                                             ?><option value="<?php echo $rows['name'] ?>"><?php echo $rows['name'] ?></option><?php
                                          }
                                         }else{
                                          ?><option value="">No Category Found.</option><?php
                                         }
                                        ?>
                                      </select>
                                    </div>
                                    <div id="consultation" class="form-group col-6 data">
                                      <label class="form-label">Session Category</label>
                                      <select name="category2" class="form-control" style="border:1px solid blue">
                                          <option value="">Select Category</option>
                                        <?php
                                         $sel = mysqli_query($con, "SELECT * FROM `category` WHERE category='consultation'");
                                         $count = mysqli_num_rows($sel);
                                         if($count > 0){
                                          while($rows = mysqli_fetch_assoc($sel)){
                                             ?><option value="<?php echo $rows['name'] ?>"><?php echo $rows['name'] ?></option><?php
                                          }
                                         }else{
                                          ?><option value="">No Category Found.</option><?php
                                         }
                                        ?>
                                      </select>
                                    </div>
                                    <div id="mediation" class="form-group col-6 data">
                                      <label class="form-label">Session Category</label>
                                      <select name="category3" class="form-control" style="border:1px solid blue">
                                          <option value="">Select Category</option>
                                        <?php
                                         $sel = mysqli_query($con, "SELECT * FROM `category` WHERE category='mediation'");
                                         $count = mysqli_num_rows($sel);
                                         if($count > 0){
                                          while($rows = mysqli_fetch_assoc($sel)){
                                             ?><option value="<?php echo $rows['name'] ?>"><?php echo $rows['name'] ?></option><?php
                                          }
                                         }else{
                                          ?><option value="">No Category Found.</option><?php
                                         }
                                        ?>
                                      </select>
                                    </div>
                                    <div class="form-group col-12">
                                      <label class="form-label">Session subcontent</label>
                                      <textarea name="subcontent" class="form-control" rows="4" maxlength="350" placeholder="Write Content..." style="border:1px solid blue" required></textarea>
                                      <p style="color:red;font-size:13px">* Your Subcontent shold be 200 Characters. *</p>
                                    </div>
                                    <!--<div class="form-group col-12">-->
                                    <!--  <label class="form-label">Session Content</label>-->
                                    <!--  <textarea id="editor" name="content" cols="30" rows="30" class="form-control" style="border:1px solid blue"></textarea>-->
                                    <!--</div>-->
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <button type="submit" name="btn" class="btn btn-primary">Save Session</button>
                                    </div>
                                  </div>
                                </form>
                                <?php
                                $msg = "";
                                 if(isset($_POST['btn'])){
                                    $name = $_POST['name'];
                                    $subcontent = $_POST['subcontent'];
                                    $content = $_POST['content'];
                                    $type = $_POST['type'];
                                    $date = date('Y-m-d');
                                    $image = $_POST['image'];
                                    $category1 = $_POST['category1'];
                                    $category2 = $_POST['category2'];
                                    $category3 = $_POST['category3'];
                                    // $imgVid = $_FILES['image']['name'];
                                    
                                    if($category3 !=""){
                                        $categ = $_POST['category3'];
                                    }else if($category1 !=""){
                                        $categ = $_POST['category1'];
                                    }else if($category2 !=""){
                                        $categ = $_POST['category2'];
                                    }
                                    
                                      $insert = mysqli_query($con, "INSERT INTO `session`(`title`, `video`, `subcontent`, `content`, `date_release`, `type`, `category`) 
                                        VALUES ('$name','$image','$subcontent','','$date','$type','$categ')");
                                    if($insert){
                                       $msg = "<b style='color:white;background:green;border-radius:10px;padding:5px 5px'>Data inserted successfuly.</b>";
                                    }else{
                                       $msg = "<b style='color:white;background:red;border-radius:10px;padding:5px 5px'>Data failed try again.</b>";
                                    
                                    }
                                }
                                ?>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Modal -->
                        <p style="margin-bottom:20px"><?php echo $msg; ?></p>
                        <div class="table-responsive">
                        <table id="mydata" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                   <th scope="col">No</th>
                                   <th scope="col">Title</th>
                                   <th scope="col">Video</th>
                                   <th scope="col">Content</th>
                                   <th scope="col">Date_released</th>
                                   <th scope="col">Type</th>
                                   <th scope="col">Category</th>
                                   <th scope="col">Delete</th>
                               </tr>  
                          </thead>  
                          <?php   
                          $query = mysqli_query($con, "SELECT * FROM `session` ORDER BY ID DESC");  
                          $i = 0;
                          while($row = mysqli_fetch_assoc($query))  
                          {  
                            $id = $row['id'];
                            $video = $row['video'];
                            $i++;
                            ?>
                               <tr>  
                                <td><?php echo $i ?></td>
                                <td><?php echo $row['title'] ?></td>
                                <td><?php echo $row['video'] ?></td>
                                <td><?php echo $row['subcontent'] ?></td>
                                <td><?php echo $row['date_release'] ?></td>
                                <td><?php echo $row['type'] ?></td>
                                <td><?php echo $row['category'] ?></td>
                                <td><a href="Delete.php?id3=<?php echo $id; ?> && video=<?php echo $video; ?>" style="text-decoration:none;background:red;color:white;border-radius:10px;padding:5px 5px">
                                <i style="padding:10px 10px" class="fas fa-trash"></i></a></td>
                               </tr> 
                            <?php
                          }  
                          ?>  
                     </table>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once '../includes/admin_footer.php'; ?>