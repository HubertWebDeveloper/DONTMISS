<?php include_once '../includes/admin_header.php'; ?>

<div class="py-5">
  <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="border:1px solid #212F3C">
                <div class="card-header" style="background:#212F3C;color:white">
                        <h4>Don't Miss ( <b style="border-bottom:2px solid darkorange;border-radius:10px;padding:5px 5px">Admin Categories</b> )</h4>
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
                                    <div class="form-group col-6">
                                       <label class="form-label">Category Name</label>
                                       <input type="text" class="form-control" name="name" placeholder="Enter category name" style="border:1px solid blue" required>
                                    </div>
                                    <div class="form-group col-6">
                                       <label class="form-label">Category Title</label>
                                       <input type="text" class="form-control" name="title" placeholder="Enter category title" style="border:1px solid blue">
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
                                    $title = $_POST['title'];

                                    $insert = mysqli_query($con, "INSERT INTO `admin_categ`(`name`, `title`) 
                                    VALUES ('$name','$title')");
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
                                   <th scope="col">Title</th>
                                   <th scope="col">Delete</th>
                                   <th scope="col">Edit</th>
                               </tr>  
                          </thead>  
                          <?php   
                          $query = mysqli_query($con, "SELECT * FROM `admin_categ` ORDER BY ID DESC");  
                          $i = 0;
                          while($row = mysqli_fetch_assoc($query))  
                          {  
                            $id = $row['id'];
                            $i++;
                            ?>
                               <tr>  
                                <td><?php echo $i ?></td>
                                <td><?php echo $row['name'] ?></td>
                                <td><?php echo $row['title'] ?></td>
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