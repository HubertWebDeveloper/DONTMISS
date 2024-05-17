<?php include_once '../includes/admin_header.php'; ?>

<div class="py-5">
  <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="border:1px solid #212F3C">
                <div class="card-header" style="background:#212F3C;color:white">
                        <h4>Don't Miss ( <b style="border-bottom:2px solid darkorange;border-radius:10px;padding:5px 5px">Categories</b> )</h4>
                    </div>
                   <div class="modal" tabindex="-1">
                    
                    </div>
                    <div class="card-body">
                       <!-- Button trigger modal -->
                          <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                           New Category
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">New Category</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <form action="" method="POST" enctype="multipart/form-data">
                                  <div class="row">
                                    <div class="form-group col-12">
                                      <label class="form-label">Category Type</label>
                                      <select class="form-control" id="name" name="type" placeholder="Enter product name" style="border:1px solid blue" required>
                                         <option value="shopping">Product</option>
                                         <option value="health">Health Services</option>
                                         <option value="consultation">Consultation Services</option>
                                         <option value="mediation">Mediation Services</option>
                                      </select>
                                    </div>
                                    <div class="form-group col-6">
                                       <label class="form-label">Product Name</label>
                                       <input type="text" class="form-control" name="name" placeholder="Enter product name" style="border:1px solid blue" required>
                                    </div>
                                    <div id="shopping" class="form-group col-6 data">
                                       <label class="form-label">Product Image</label>
                                       <input type="file" class="form-control" name="image1" style="border:1px solid blue">
                                    </div>
                                    <div id="health" class="form-group col-6 data">
                                       <label class="form-label">Logo</label>
                                       <input type="text" class="form-control" name="logo" placeholder="fas fa-health" style="border:1px solid blue">
                                    </div>
                                    <div id="consultation" class="form-group col-6 data">
                                       <label class="form-label">Logo</label>
                                       <input type="text" class="form-control" name="logo1" placeholder="fas fa-consultation" style="border:1px solid blue">
                                    </div>
                                    <div id="mediation" class="form-group col-6 data">
                                       <label class="form-label">Session image</label>
                                       <input type="file" class="form-control" name="image2" style="border:1px solid blue">
                                    </div>
                                    <div class="modal-footer">
                                       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                       <button type="submit" name="btn" class="btn btn-primary">Save Category</button>
                                    </div>
                                  </div>
                                </form>
                                <?php
                                $msg = "";
                                 if(isset($_POST['btn'])){
                                    $name = $_POST['name'];
                                    $type = $_POST['type'];
                                    $log = $_POST['logo'];
                                    $log1 = $_POST['logo1'];
                                    $img1 = $_FILES['image1']['name'];
                                    $img2 = $_FILES['image2']['name'];

                                    
                                    if($img1=="" && $img2 !=""){
                                        $logo = $_FILES['image2']['name'];
                                        $temp_name = $_FILES['image2']['tmp_name'];
                                        move_uploaded_file($temp_name, "../logo_img/$logo");
                                    }else if($img1 !="" && $img2==""){
                                        $logo = $_FILES['image1']['name'];
                                        $temp_name = $_FILES['image1']['tmp_name'];
                                        move_uploaded_file($temp_name, "../logo_img/$logo");
                                    }else{
                                        if($log1 =="" && $log !=""){
                                          $logo = $_POST['logo'];
                                       }else if($log =="" && $log1 !=""){
                                          $logo = $_POST['logo1'];
                                       }
                                    }

                                    $insert = mysqli_query($con, "INSERT INTO `category`(`name`, `logo`, `category`) 
                                    VALUES ('$name','$logo','$type')");
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
                                   <th scope="col">Categ Title</th>
                                   <th scope="col">Categ Image / Logo</th>
                                   <th scope="col">Category</th>
                                   <th scope="col">Delete</th>
                                   <th scope="col">Edit</th>
                               </tr>  
                          </thead>  
                          <?php   
                          $query = mysqli_query($con, "SELECT * FROM `category` ORDER BY ID DESC");  
                          $i = 0;
                          while($row = mysqli_fetch_assoc($query))  
                          {  
                            $id = $row['id'];
                            $category = $row['category'];
                            $logo = $row['logo'];
                            $i++;
                            ?>
                               <tr>  
                                <td><?php echo $i ?></td>
                                <td><?php echo $row['name'] ?></td>
                                <td>
                                 <?php
                                   $img_exe = pathinfo($logo, PATHINFO_EXTENSION);
                                   if($img_exe !=""){
                                      ?><img src="../logo_img/<?php echo $row['logo'] ?>" width="30" height="30"><?php
                                   }else{
                                      ?><i class="<?php echo $row['logo'] ?>"></i><?php
                                   }
                                 ?>
                                 
                                </td>
                                <td style="color:grey">
                                 <?php 
                                 if($row['category'] =="shopping"){
                                    echo "Product";
                                 }else{
                                     echo $category;
                                 } 
                                 ?>
                                 </td>
                                <td><a href="Delete.php?id2=<?php echo $id; ?>" style="text-decoration:none;background:red;color:white;border-radius:10px;padding:5px 5px">
                                <i style="padding:10px 10px" class="fas fa-trash"></i></a></td>
                                <td><a href="Edit.php?id2=<?php echo $id; ?>" style="text-decoration:none;background:green;color:white;border-radius:10px;padding:5px 5px">
                                <i style="padding:10px 10px" class="fas fa-pencil"></i></a></td>
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