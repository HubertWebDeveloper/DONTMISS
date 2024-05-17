<?php include_once '../includes/admin_header.php'; ?>

<div class="py-5">
  <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="border:1px solid #212F3C">
                <div class="card-header" style="background:#212F3C;color:white">
                        <h4>Don't Miss ( <b style="border-bottom:2px solid darkorange;border-radius:10px;padding:5px 5px">Session Files</b> )</h4>
                    </div>
                   <div class="modal" tabindex="-1">
                    
                    </div>
                    <div class="card-body">
                       <!-- Button trigger modal -->
                          <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                           New File
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">New file</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <form action="" method="POST" enctype="multipart/form-data">
                                  <div class="row">
                                    <div class="form-group col-12">
                                       <label class="form-label">File</label>
                                       <input type="file" class="form-control" name="file" style="border:1px solid blue" required>
                                       <p style="color:red;font-size:13px">File should be in 'Docx (Microsoft word)'.</p>
                                    </div>
                                    <div class="form-group col-6">
                                       <label class="form-label">File</label>
                                       <select class="form-control" name="category" style="border:1px solid blue" required>
                                           <option value="">Select Category</option>
                                           <option value="health">Health Services</option>
                                           <option value="consultation">Life Consultation</option>
                                           <option value="mediation">Mediation Services</option>
                                       </select>
                                    </div>
                                    <div class="form-group col-6">
                                       <label class="form-label">File</label>
                                       <select class="form-control" name="language" style="border:1px solid blue" required>
                                           <option value="">Select Language</option>
                                           <option value="kinyarwanda">Kinyarwanda</option>
                                           <option value="english">English</option>
                                           <option value="french">French</option>
                                       </select>
                                    </div>
                                    <div class="modal-footer">
                                       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                       <button type="submit" name="btn" class="btn btn-primary">Save File</button>
                                    </div>
                                  </div>
                                </form>
                                <?php
                                $msg = "";
                                 if(isset($_POST['btn'])){
                                    
                                    $category = $_POST['category'];
                                    $language = $_POST['language'];
                                    $file = $_FILES['file']['name'];
                                    
                                    $target = $file;
                                    $img_exe = pathinfo($target, PATHINFO_EXTENSION);
                                    if($img_exe == "docx"){
                                        $file = $_FILES['file']['name'];
                                        $temp_name = $_FILES['file']['tmp_name'];
                                        move_uploaded_file($temp_name, "../files/$file");

                                        $insert = mysqli_query($con, "INSERT INTO `file`(`document`, `category`, `language`) VALUES ('$file','$category','$language')");
                                        if($insert){
                                           $msg = "<b style='color:white;background:green;border-radius:10px;padding:5px 5px'>Data Saved successfuly.</b>";
                                        }else{
                                           $msg = "<b style='color:white;background:red;border-radius:10px;padding:5px 5px'>Data failed try again.</b>";
                                        }
                                    }else{
                                        $msg = "<b style='color:white;background:red;border-radius:10px;padding:5px 5px'>File should be saved in Docx.</b>";
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
                                   <th scope="col">File name</th>
                                   <th scope="col">File Category</th>
                                   <th scope="col">File Language</th>
                                   <th scope="col">Delete</th>
                                   <!--<th scope="col">View</th>-->
                                   <th scope="col">Download</th>
                               </tr>  
                          </thead>  
                          <?php   
                          $query = mysqli_query($con, "SELECT * FROM `file` ORDER BY ID DESC");  
                          $i = 0;
                          while($row = mysqli_fetch_assoc($query))  
                          {  
                            $id = $row['id'];
                            $document = $row['document'];
                            $i++;
                            ?>
                               <tr>  
                                <td><?php echo $i ?></td>
                                <td><?php echo $row['document'] ?></td>
                                <td><?php echo $row['category'] ?></td>
                                <td><?php echo $row['language'] ?></td>
                                
                                <td style="text-align:center"><a href="Delete.php?id5=<?php echo $id; ?> && document=<?php echo $document; ?> && num=file" style="text-decoration:none;background:red;color:white;border-radius:10px;padding:5px 5px">
                                <i style="padding:10px 10px" class="fas fa-trash"></i></a></td>
                                
                                <!--<td><a href="document_view.php?id=<?php //echo $id; ?> && num=file" style="text-decoration:none;background:blue;color:white;border-radius:10px;padding:5px 5px">-->
                                <!--<i style="padding:10px 10px" class="fas fa-eye"></i></a></td>-->
                                
                                <td style="text-align:center"><a href="download.php?id=<?php echo $id; ?> && num=file" style="text-decoration:none;background:green;color:white;border-radius:10px;padding:5px 5px">
                                <i style="padding:10px 10px" class="fas fa-download"></i></a></td>
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