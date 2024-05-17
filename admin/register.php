<?php include_once '../includes/admin_header.php'; ?>

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
                                   <th scope="col">Approval</th>
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
                                <td><a href="Approval.php?id3=<?php echo $id ?>" style="text-decoration:none;background:green;color:white;border-radius:10px;padding:5px 5px">
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
</div>

<?php include_once '../includes/admin_footer.php'; ?>