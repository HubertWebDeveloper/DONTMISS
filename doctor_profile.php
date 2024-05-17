<?php include_once 'includes/header.php'; ?>

   <main>
       <?php
       if(isset($_GET['id'])){
           $id = $_GET['id'];
           
           $sel = mysqli_query($con, "SELECT * FROM partner WHERE id='$id'");
           $row = mysqli_fetch_assoc($sel);
       }
       ?>
      <div class="container" style="margin-bottom:50px">
        <div class="row">
            <div class="col-md-12">
               <form action="" method="POST" enctype="multipart/form-data">
                     <div class="card mt-4" style="border:1px solid #00021d">
                        <div class="card-header" style="background:#00021d">
                           <h4 style="color:white">Partner Profile 
                           </h4>
                        </div>
                        <div class="card-body">
                           <div class="main-form mt-3 border-bottom">
                              <div class="row">
                                  <img src="images/personal.png" style="width:150px;height:100px">
                                    <div class="form-group col-6">
                                       <label for=""style="font-weight:bold">Name : </label>
                                       <input type="text" class="form-control" value="<?php echo $row['name'] ?>" readonly>
                                    </div>
                                    <div class="form-group col-6">
                                       <label for=""style="font-weight:bold">Email : </label>
                                       <input type="text" class="form-control" value="<?php echo $row['email'] ?>" readonly>
                                    </div>
                                    <div class="form-group col-6">
                                       <label for=""style="font-weight:bold">Location : </label>
                                       <input type="text" class="form-control" value="<?php echo $row['location'] ?>" readonly>
                                    </div>
                                    <div class="form-group col-6">
                                       <label for=""style="font-weight:bold">Phone : </label>
                                       <input type="text" class="form-control" value="<?php echo $row['code'] ?> <?php echo $row['phone'] ?>" readonly>
                                    </div>
                                    <div class="form-group col-6">
                                       <label for=""style="font-weight:bold">About Him/Her : </label>
                                       <input type="text" class="form-control" value="<?php echo $row['about'] ?>" readonly>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="paste-new-forms"></div>
                        </div>
                     </div>
               </form>
            </div>
         </div>
   </main>

<?php include_once 'includes/pro_footer.php'; ?>
