<?php 
include_once '../includes/admin_header.php'; 
?>

<div class="py-5">
  <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="border:1px solid #212F3C">
                <div class="card-header" style="background:#212F3C;color:white">
                        <h4>Don't Miss ( <b style="border-bottom:2px solid darkorange;border-radius:10px;padding:5px 5px">Partner List</b> )</h4>
                    </div>
                   <div class="modal" tabindex="-1">
                    
                    </div>
                    <div class="card-body">
                       <!-- Button trigger modal -->
                          <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                           New partner
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">New partner</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <form action="" method="POST" enctype="multipart/form-data">
                                  <div class="row">
                                    <div class="form-group col-6">
                                      <label class="form-label">Name</label>
                                      <input type="text" class="form-control" name="name1" placeholder="Enter name" style="border:1px solid blue" required>
                                    </div>
                                    <div class="form-group col-6">
                                      <label class="form-label">Email</label>
                                      <input type="email" class="form-control" name="email1" placeholder="Enter email" style="border:1px solid blue" required>
                                    </div>
                                    <div class="form-group col-6">
                                      <label class="form-label">profile</label>
                                      <input type="file" class="form-control" name="image" style="border:1px solid blue">
                                    </div>
                                    <div class="form-group col-6">
                                      <label class="form-label">Location</label>
                                      <input type="location" class="form-control" name="location1" placeholder="Enter location" style="border:1px solid blue" required>
                                    </div>
                                    <div class="form-group col-6">
                                      <label class="form-label">Country Code</label>
                                      <input type="text" class="form-control" name="code1" placeholder="Ex: +250" style="border:1px solid blue" required>
                                    </div>
                                    <div class="form-group col-6">
                                      <label class="form-label">Phone number</label>
                                      <input type="phone" class="form-control" name="phone1" placeholder="Ex: 7********" style="border:1px solid blue" required>
                                    </div>
                                    <div class="form-group col-6">
                                      <label class="form-label">About She/He</label>
                                      <textarea class="form-control" name="about1" cols="30" rows="5" placeholder="Content here..." style="border:1px solid blue" required></textarea>
                                    </div>
                                    <div class="form-group col-6">
                                      <label class="form-label">Category</label>
                                      <select class="form-control" name="category1" style="border:1px solid blue" required>
                                          <option value="">Select Session Category.</option>
                                          <option value="health">Health Services</option>
                                          <option value="consultation">Life Consultation</option>
                                          <option value="mediation">Mediation Services</option>
                                      </select>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <button type="submit" name="btn" class="btn btn-primary">Save</button>
                                    </div>
                                  </div>
                                </form>
                                <?php
                                $msg = "";
                                 if(isset($_POST['btn'])){
                                    $name1 = $_POST['name1'];
                                    $email1 = $_POST['email1'];
                                    $location1 = $_POST['location1'];
                                    $code1 = $_POST['code1'];
                                    $phone1 = $_POST['phone1'];
                                    $about1 = $_POST['about1'];
                                    $category1 = $_POST['category1'];

                                    $imgs = $_FILES['image']['name'];
                                    $temp_name = $_FILES['image']['tmp_name'];
                                    move_uploaded_file($temp_name, "../images/$imgs");

                                    $insert = mysqli_query($con, "INSERT INTO `partner`(`name`, `email`, `profile`, `location`, `code`, `phone`, `about`, `category`) 
                                    VALUES ('$name1','$email1','$imgs','$location1','$code1','$phone1','$about1','$category1')");
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
                                   <th scope="col">Name</th>
                                   <th scope="col">Email</th>
                                   <th scope="col">Profile</th>
                                   <th scope="col">Location</th>
                                   <th scope="col">Phone</th>
                                   <th scope="col">About</th>
                                   <th scope="col">Category</th>
                                   <th scope="col">Delete</th>
                               </tr>  
                          </thead>  
                          <?php   
                          $query = mysqli_query($con, "SELECT * FROM `partner` ORDER BY ID DESC");  
                          $i = 0;
                          while($row = mysqli_fetch_assoc($query))  
                          {  
                            $id = $row['id'];
                            $profile = $row['profile'];
                            $i++;
                            ?>
                               <tr>  
                                <td><?php echo $i ?></td>
                                <td><?php echo $row['name'] ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td style="text-align:center">
                                    <?php
                                    if($profile==""){
                                        ?><img src="../images/personal.png" width="50" height="50" style="object-fit: cover;"><?php
                                    }else{
                                        ?><img src="../images/<?php echo $row['profile'] ?>" width="50" height="50" style="object-fit: cover;"><?php
                                    }
                                    ?>
                                    
                                </td>
                                <td><?php echo $row['location'] ?></td>
                                <td><?php echo $row['code'] ?> <?php echo $row['phone'] ?></td>
                                <td style="color:grey"><?php echo $row['about'] ?></td>
                                <td><?php echo $row['category'] ?></td>
                                <td><a href="Delete.php?id=<?php echo $id; ?>" style="text-decoration:none;background:red;color:white;border-radius:10px;padding:5px 5px">
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