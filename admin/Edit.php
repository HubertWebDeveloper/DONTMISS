<?php include_once '../includes/admin_header.php'; ?>

<div class="py-5">
  <div class="container" style="margin-top:30px">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="border:1px solid #212F3C">
                <div class="card-header" style="background:#212F3C;color:white">
                        <h4>Don't Miss ( <b style="border-bottom:2px solid darkorange;border-radius:10px;padding:5px 5px">Update</b> )</h4>
                    </div>
                   <div class="modal" tabindex="-1">
                    
                    </div>
                    <?php
                      if(isset($_GET['id'])){
                        $id = $_GET['id'];

                        $pick = mysqli_query($con, "SELECT * FROM product WHERE id='$id'");
                        $pick_row = mysqli_fetch_assoc($pick);
                    ?>
                     <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                           <div class="row">
                              <div class="form-group col-6">
                                 <label class="form-label">Product Name</label>
                                 <input type="text" class="form-control" name="name" value="<?php echo $pick_row['title'] ?>" style="border:1px solid blue">
                              </div>
                              <div class="form-group col-6">
                                 <label class="form-label">Product Category</label>
                                 <select class="form-control" name="categ" style="border:1px solid blue">
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
                              <div class="form-group col-6">
                                 <label class="form-label">Price</label>
                                 <input type="number" class="form-control" name="price" value="<?php echo $pick_row['price'] ?>" style="border:1px solid blue"readonly>
                              </div>
                              <div class="form-group col-6">
                                 <label class="form-label">Kenya Price</label>
                                 <input type="number" class="form-control" name="Ksh_price" value="<?php echo $pick_row['ksh_price'] ?>" style="border:1px solid blue"readonly>
                              </div>
                              <div class="form-group col-12">
                                 <label class="form-label">Description</label>
                                 <textarea class="form-control" name="desc" cols="30" rows="5" style="border:1px solid blue"><?php echo $pick_row['description'] ?></textarea>
                              </div>
                              <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                 <button type="submit" name="btn" class="btn btn-primary">Update</button>
                              </div>
                           </div>
                        </form>
                        <?php
                          $msg = "";
                           if(isset($_POST['btn'])){
                              $name = $_POST['name'];
                              $desc = $_POST['desc'];
                              $categ = $_POST['categ'];

                              $insert = mysqli_query($con, "UPDATE `product` SET `title`='$name',`description`='$desc',`category`='$categ' WHERE id='$id'");
                              if($insert){
                                 $msg = "<b style='color:white;background:green;border-radius:10px;padding:5px 5px'>Data Update successfuly.</b>";
                              }else{
                                 $msg = "<b style='color:white;background:red;border-radius:10px;padding:5px 5px'>Data failed try again.</b>";
                              }
                           }
                        ?>
                        <!-- Modal -->
                        <p style="margin-bottom:20px"><?php echo $msg; ?></p>
                     </div>
                     <?php } ?>
                    <!-- ============ end brands update ================================ -->
                    <?php
                      if(isset($_GET['id2'])){
                        $id2 = $_GET['id2'];

                        $pick = mysqli_query($con, "SELECT * FROM category WHERE id='$id2'");
                        $pick_row = mysqli_fetch_assoc($pick);
                    ?>
                     <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                                  <div class="row">
                                    <div class="form-group col-12">
                                      <label class="form-label">Update name</label>
                                      <input type="text" class="form-control" name="category"value="<?php echo $pick_row['name'] ?>" style="border:1px solid blue">
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <button type="submit" name="btn" class="btn btn-primary">Update</button>
                                    </div>
                                  </div>
                        </form>
                        <?php
                          $msg = "";
                                  if(isset($_POST['btn'])){
                                    $category = $_POST['category'];

                                    $insert = mysqli_query($con, "UPDATE `category` SET `name`='$category' WHERE id='$id2'");
                                    if($insert){
                                      $msg = "<b style='color:white;background:green;border-radius:10px;padding:5px 5px'>Data Update successfuly.</b>";
                                      //echo "<script>window.open('category.php','_self')</script>";
                                    }else{
                                      $msg = "<b style='color:white;background:red;border-radius:10px;padding:5px 5px'>Data failed try again.</b>";
                                    }
                                  }
                        ?>
                        <!-- Modal -->
                        <p style="margin-bottom:20px"><?php echo $msg; ?></p>
                     </div>
                     <?php } ?>
                     <!-- ============ end Category update ================================ -->
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once '../includes/admin_footer.php'; ?>
 