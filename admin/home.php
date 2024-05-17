<?php include_once '../includes/admin_header.php'; ?>

<?php
 $select = mysqli_query($con, "SELECT * FROM `product`");
 $counts = mysqli_num_rows($select);
 $select2 = mysqli_query($con, "SELECT * FROM `payment`");
 $counts2 = mysqli_num_rows($select2);
 $select3 = mysqli_query($con, "SELECT * FROM `shopuser`");
 $counts3 = mysqli_num_rows($select3);
 $select4 = mysqli_query($con, "SELECT * FROM `session`");
 $counts4 = mysqli_num_rows($select4);
 $select5 = mysqli_query($con, "SELECT * FROM `staff` WHERE NOT type='admin'");
 $counts5 = mysqli_num_rows($select5);
?>

<div class="container-fluid px-4">
    <div class="row g-3 my-2">
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2"><?php echo $counts ?></h3>
                                <p class="fs-5">Products</p>
                            </div>
                            <i class="fas fa-gift fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>
                    <?php
                    if($_SESSION['type']=="admin"){
                        ?>
                        <div class="col-md-3">
                            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                <div>
                                    <h3 class="fs-2"><?php echo $counts2 ?></h3>
                                    <p class="fs-5">Payments</p>
                                </div>
                                <i
                                    class="fas fa-hand-holding-usd fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                            </div>
                        </div>
                        <?php
                    }else{
                        ?>
                        <div class="col-md-3">
                            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                <div>
                                    <h3 class="fs-2"><?php echo $counts5 ?></h3>
                                    <p class="fs-5">Partners</p>
                                </div>
                                <i
                                    class="fas fa-users fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2"><?php echo $counts3 ?></h3>
                                <p class="fs-5">Shops</p>
                            </div>
                            <i class="fas fa-home fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2"><?php echo $counts4 ?></h3>
                                <p class="fs-5">Sessions</p>
                            </div>
                            <i class="fas fa-assistive-listening-systems fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>
    </div>
</div>

<div class="py-5">
     <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="border:1px solid #212F3C">
                <div class="card-header" style="background:#212F3C;color:white">
                        <h4>Don't Miss ( <b style="border-bottom:2px solid darkorange;border-radius:10px;padding:5px 5px">Shops Registered</b> )</h4>
                    </div>
                   <div class="modal" tabindex="-1">
                    
                    </div>
                    <div class="card-body">
                       <!-- Button trigger modal -->
                        <!-- Modal -->
                        <div class="table-responsive">
                        <table id="mydata" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                   <th scope="col">No</th>
                                   <th scope="col">Shop Name</th>
                                   <th scope="col">Shop Email</th>
                                   <th scope="col">Phone</th>
                                   <th scope="col">Products</th>
                                   <th scope="col">Address</th>
                                   <th scope="col">Image 1</th>
                                   <th scope="col">Image 2</th>
                                   <th scope="col">Image 3</th>
                                   <th scope="col">Status</th>
                               </tr>  
                          </thead>  
                          <?php   
                          $query ="SELECT * FROM `shopuser` ORDER BY ID DESC";  
                          $result = mysqli_query($con, $query); 
                          $i = 0;
                          while($row = mysqli_fetch_array($result))  
                          {  
                            $id = $row['id'];
                            $i++;
                            ?>
                               <tr>  
                                <td><?php echo $i ?></td>
                                <td><?php echo $row['name'] ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td><?php echo $row['code'] ?><?php echo $row['phone'] ?></td>
                                <td style="font-size:10px;color:darkorange"><?php echo $row['product'] ?></td>
                                <td style="color:grey"><?php echo $row['address'] ?></td>
                                <td><img src="../shop_img/<?php echo $row['image1'] ?>" width="60px" height="60px"></td>
                                <td><img src="../shop_img/<?php echo $row['image2'] ?>" width="60px" height="60px"></td>
                                <td><img src="../shop_img/<?php echo $row['image3'] ?>" width="60px" height="60px"></td>
                                <td><?php echo $row['status'] ?></td>
                                
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
</div>

<?php include_once '../includes/admin_footer.php'; ?>