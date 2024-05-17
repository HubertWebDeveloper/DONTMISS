<?php include_once '../includes/admin_header.php'; ?>

<div class="py-5">
  <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="border:1px solid #212F3C">
                <div class="card-header" style="background:#212F3C;color:white">
                        <h4>Don't Miss ( <b style="border-bottom:2px solid darkorange;border-radius:10px;padding:5px 5px">Product List</b> )</h4>
                    </div>
                   <div class="modal" tabindex="-1">
                    
                    </div>
                    <div class="card-body">
                       <!-- Button trigger modal -->
                          <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                           New Product
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">New product</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <form action="" method="POST" enctype="multipart/form-data">
                                  <div class="row">
                                    <div class="form-group col-6">
                                      <label class="form-label">Product Name</label>
                                      <input type="text" class="form-control" name="name" placeholder="Enter product name" style="border:1px solid blue" required>
                                    </div>
                                    <div class="form-group col-6">
                                      <label class="form-label">Product Image</label>
                                      <input type="file" class="form-control" name="image" style="border:1px solid blue" required>
                                    </div>
                                    <div class="form-group col-6">
                                      <label class="form-label">Price</label>
                                      <input type="number" class="form-control" name="price" placeholder="Enter product Rwf price" style="border:1px solid blue">
                                    </div>
                                    <div class="form-group col-6">
                                      <label class="form-label">Kenya Price</label>
                                      <input type="number" class="form-control" name="ksh_price" placeholder="Enter product Ksh price" style="border:1px solid blue">
                                    </div>
                                    <div class="form-group col-6">
                                      <label class="form-label">Product Category</label>
                                       <select class="form-control" name="categ" style="border:1px solid blue" required>
                                          <?php
                                           $select = mysqli_query($con, "SELECT * FROM category WHERE category='shopping'");
                                           $counts = mysqli_num_rows($select);
                                           if($counts > 0){
                                             while($rows = mysqli_fetch_assoc($select)){
                                              ?><option value="<?php echo $rows['name'] ?>"><?php echo $rows['name'] ?></option><?php
                                             }
                                           }
                                          ?>
                                      </select>
                                    </div>
                                    <div class="form-group col-12">
                                      <label class="form-label">Description</label>
                                      <textarea class="form-control" name="desc" cols="30" rows="5" placeholder="Enter Description" style="border:1px solid blue" required></textarea>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <button type="submit" name="btn" class="btn btn-primary">Save List</button>
                                    </div>
                                  </div>
                                </form>
                                <?php
                                $msg = "";
                                 if(isset($_POST['btn'])){
                                    $name = $_POST['name'];
                                    $price = $_POST['price'];
                                    $ksh_price = $_POST['ksh_price'];
                                    $desc = $_POST['desc'];
                                    $categ = $_POST['categ'];

                                    if($price=="" && $ksh_price==""){
                                       $msg = "<b style='color:white;background:red;border-radius:10px;padding:5px 5px'>Price should not be Empty.</b>";
                                    }else{
                                       if($price !="" && $ksh_price==""){
                                          $new_price = $price;
                                          $new_ksh = $price / 10;
                                       }else{
                                          $new_ksh = $ksh_price;
                                          $new_price = $ksh_price * 10;
                                       }
                                       $imgs = $_FILES['image']['name'];
                                       $temp_name = $_FILES['image']['tmp_name'];
                                       move_uploaded_file($temp_name, "../product_img/$imgs");

                                       $insert = mysqli_query($con, "INSERT INTO `product`(`title`, `image`, `price`, `ksh_price`, `description`, `category`) 
                                       VALUES ('$name','$imgs','$new_price','$new_ksh','$desc','$categ')
                                       ");
                                       if($insert){
                                         $msg = "<b style='color:white;background:green;border-radius:10px;padding:5px 5px'>Data inserted successfuly.</b>";
                                       }else{
                                         $msg = "<b style='color:white;background:red;border-radius:10px;padding:5px 5px'>Data failed try again.</b>";
                                       }
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
                                   <th scope="col">Product Title</th>
                                   <th scope="col">Product Image</th>
                                   <th scope="col">Price</th>
                                   <th scope="col">Kenya Price</th>
                                   <th scope="col">Product Catgory</th>
                                   <th scope="col">Delete</th>
                                   <th scope="col">Edit</th>
                               </tr>  
                          </thead>  
                          <?php   
                          $query = mysqli_query($con, "SELECT * FROM `product` ORDER BY ID DESC");  
                          $i = 0;
                          while($row = mysqli_fetch_assoc($query))  
                          {  
                            $id = $row['id'];
                            $i++;
                            ?>
                               <tr>  
                                <td><?php echo $i ?></td>
                                <td><?php echo $row['title'] ?></td>
                                <td><img src="../product_img/<?php echo $row['image'] ?>" width="70" height="70"></td>
                                <td><?php echo $row['price'] ?> Rwf</td>
                                <td><?php echo $row['ksh_price'] ?> Ksh</td>
                                <td style="color:grey"><?php echo $row['category'] ?></td>
                                <td><a href="Delete.php?id=<?php echo $id; ?>" style="text-decoration:none;background:red;color:white;border-radius:10px;padding:5px 5px">
                                <i style="padding:10px 10px" class="fas fa-trash"></i></a></td>
                                <td><a href="Edit.php?id=<?php echo $id; ?> && num=product" style="text-decoration:none;background:green;color:white;border-radius:10px;padding:5px 5px">
                                <i style="padding:10px 10px" class="fas fa-check"></i></a></td>
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