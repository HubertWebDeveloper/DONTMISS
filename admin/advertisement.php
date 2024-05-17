<?php include_once '../includes/admin_header.php'; ?>

<div class="py-5">
  <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="border:1px solid #212F3C">
                <div class="card-header" style="background:#212F3C;color:white">
                        <h4>Don't Miss ( <b style="border-bottom:2px solid darkorange;border-radius:10px;padding:5px 5px">Advertisement</b> )</h4>
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
                                   <th scope="col">File</th>
                                   <th scope="col">Content</th>
                                   <th scope="col">Status</th>
                                   <th scope="col">Approval</th>
                                   <th scope="col">Delete</th>
                               </tr>  
                          </thead>  
                          <?php   
                          $query ="SELECT * FROM `advertisement` ORDER BY ID DESC";  
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
                                <td><?php echo $row['file'] ?></td>
                                <td><?php echo $row['content'] ?></td>
                                <td><?php echo $row['status'] ?></td>
                                <?php 
                                if($status=="default"){
                                   ?>
                                   <td></td>
                                   <td></td>
                                   <?php
                                }else{
                                 ?>
                                <td><a href="Approval.php?id=<?php echo $id ?>" style="text-decoration:none;background:green;color:white;border-radius:10px;padding:5px 5px">
                                <i style="padding:10px 10px" class="fas fa-check"></i></a></td>
                                <td><a href="" style="text-decoration:none;background:red;color:white;border-radius:10px;padding:5px 5px">
                                <i style="padding:10px 10px" class="fas fa-trash"></i></a></td>
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

<?php include_once '../includes/admin_footer.php'; ?>