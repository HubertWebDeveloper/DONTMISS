<?php include_once '../includes/admin_header.php'; ?>

<div class="py-5">
     <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="border:1px solid #212F3C">
                <div class="card-header" style="background:#212F3C;color:white">
                        <h4>Don't Miss ( <b style="border-bottom:2px solid darkorange;border-radius:10px;padding:5px 5px">Payments</b> )</h4>
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
                                   <th scope="col">Topic ID</th>
                                   <th scope="col">Name</th>
                                   <th scope="col">Email</th>
                                   <th scope="col">Number</th>
                                   <th scope="col">Transaction Code</th>
                                   <th scope="col">Amount</th>
                                   <th scope="col">Payment Type</th>
                                   <th scope="col">Payment_Date</th>
                                   <th scope="col">Status</th>
                                   <th scope="col">Approval</th>
                               </tr>  
                          </thead>  
                          <?php   
                          $query ="SELECT * FROM `payment` ORDER BY ID DESC";  
                          $result = mysqli_query($con, $query); 
                          $i = 0;
                          while($row = mysqli_fetch_array($result))  
                          {  
                            $id = $row['id'];
                            $status = $row['status'];
                            $i++;
                            ?>
                               <tr>  
                                <td><?php echo $i ?></td>
                                <td><?php echo $row['topic_id'] ?></td>
                                <td><?php echo $row['name'] ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td><?php echo $row['number'] ?></td>
                                <td><?php echo $row['code'] ?></td>
                                <td><?php echo $row['amount'] ?></td>
                                <td style="color:grey"><?php echo $row['payment_type'] ?></td>
                                <td><?php echo $row['date'] ?></td>
                                <td><?php echo $row['status'] ?></td>
                                <?php
                                if($status=="support"){
                                    ?><td></td><?php
                                }else{
                                    ?>
                                       <td><a href="Approval.php?id2=<?php echo $id ?>" style="text-decoration:none;background:green;color:white;border-radius:10px;padding:5px 5px">
                                       <i style="padding:10px 10px" class="fas fa-check"></i></a></td>
                                    <?php
                                }
                                ?>
                                
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