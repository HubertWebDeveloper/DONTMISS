<?php include_once 'includes/header.php'; ?>

<?php
if(isset($_GET['id'])){
   $topic_id = $_GET['id'];
   ?>
   <main>
      <div class="container" style="margin-bottom:50px">
        <div class="row">
            <div class="col-md-12">
               <?php
                  $msg = "";
                  if(isset($_POST['payment'])){
                     $name = $_POST['name'];
                     $email = $_POST['email'];
                     $number = $_POST['paid_num'];
                     $code = $_POST['code'];
                     $number1 = $_POST['paid_num1'];
                     $code1 = $_POST['code1'];
                     $payment_type = $_POST['type'];
                     $date = date('Y-m-d');

                     if($number=="" && $code==""){
                        $numbertxt = $_POST['paid_num1'];
                        $codetxt = $_POST['code1'];
                     }else if($number1=="" && $code1==""){
                        $numbertxt = $_POST['paid_num'];
                        $codetxt = $_POST['code'];
                     }

                        $insert = mysqli_query($con, "INSERT INTO `payment`(`topic_id`, `name`, `email`, `number`, `code`, `amount`, `payment_type`, `date`, `status`)
                     VALUES ('$topic_id','$name','$email','$numbertxt','$codetxt','','$payment_type','$date','pending')");
                     if($insert){
                        //$msg = "Payment successfuly, we'll email you after approval.";
                        echo "<script>window.open('read_story.php?id=$topic_id && email=$email','_self')</script>";
                     }else{
                        $msg = "Something went wrong try again";
                     }
                  }
               ?>
               <b><?php echo $msg;?></b>
               <form action="" method="POST" enctype="multipart/form-data">
                  <div class="card mt-4" style="border:1px solid #00021d">
                     <div class="card-header" style="background:#00021d">
                        <h4 style="color:white">Payment 
                        <button type="submit" name="payment" style="background:red;border:1px solid red" class="float-end btn btn-primary">Payment</button>
                        </h4>
                     </div>
                     <div class="card-body">
                        <div class="main-form mt-3 border-bottom">
                           <div class="row">
                              <div class="form-group col-6">
                                 <label for="">Name</label>
                                 <input type="text" name="name" class="form-control" required placeholder="Enter name">
                              </div>
                              <div class="form-group col-6">
                                 <label for="">Email</label>
                                 <input type="email" name="email" class="form-control" required placeholder="Example@gmail.com">
                              </div>
                              <div class="form-group col-12" style="text-align:center">
                                 <label style="font-weight:bold">SELECT PAYEMNT METHOD</label>
                                 <select id="name" name="type" class="form-control" style="text-align:center">
                                    <option value="bank">Bank</option>
                                    <option value="mpesa">Mpesa</option>
                                    <option value="momo">Momo</option>
                                 </select>
                              </div>
                              <div class="content" style="text-align:center">
                                <div id="bank" class="data">
                                   
                                </div>
                                <div id="mpesa" class="data">
                                    <p>1. go to mpesa app or section</p>
                                    <p>2. Select send money</p>
                                    <p>3. Put number 0742241398 </p>
                                    <p>4. Put Amount 500 Ksh.</p>
                                    <p>5. Put your pin</p>
                                    <p>6. Complite your process</p>
                                    <p style="color:black;font-weight:bold">TO COMPLETE YOUR PAYEMNT PROCESS.</p>
                                    <div class="row">
                                       <div class="form-group col-6">
                                          <label for="">Number</label>
                                          <input type="number" name="paid_num" class="form-control" placeholder="250712345678">
                                       </div>
                                       <div class="form-group col-6">
                                          <label for="">Transaction Code</label>
                                          <input type="text" name="code" class="form-control" placeholder="*161* Txld:12344567*S* ">
                                       </div>
                                    </div>
                                </div>
                                <div id="momo" class="data">
                                    <p>1. go to mtn app or section</p>
                                    <p>2. Hitamo kohereza amafaranga</p>
                                    <p>3. Shyirimo iyinimero  0781794795 </p>
                                    <p>4. Shyiramo amafaranga 500 Rwf.</p>
                                    <p>6. Emeza kwishyura</p>
                                    <p style="color:black;font-weight:bold">KWEMEZA IGIKORWA MUKOZE.</p>
                                    <div class="row">
                                       <div class="form-group col-6">
                                          <label for="">Nimero</label>
                                          <input type="number" name="paid_num1" class="form-control" placeholder="0712345678">
                                       </div>
                                       <div class="form-group col-6">
                                          <label for="">Kode igaragaza kwishyura</label>
                                          <input type="text" name="code1" class="form-control" placeholder="*161* Txld:12344567*S* ">
                                       </div>
                                    </div>
                                </div>
                              </div>
                           </div>
                           <div class="paste-new-forms"></div>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
   </main>
   <?php
  
}else if(isset($_GET['donate'])){
?>   
   <main>
      <div class="container" style="margin-bottom:50px">
        <div class="row">
            <div class="col-md-12">
               <?php
                  $msg = "";
                  if(isset($_POST['support'])){
                     $name = $_POST['name'];
                     $email = $_POST['email'];
                     
                     $number = $_POST['paid_num'];
                     $code = $_POST['code'];
                     $amount = $_POST['amount'];
                     
                     $number1 = $_POST['paid_num1'];
                     $code1 = $_POST['code1'];
                     $amount1 = $_POST['amount1'];
                     
                     $payment_type = $_POST['type'];
                     $date = date('Y-m-d');

                     if($number=="" && $code=="" && $amount==""){
                        $numbertxt = $_POST['paid_num1'];
                        $codetxt = $_POST['code1'];
                        $amounttxt = $_POST['amount1'];
                     }else if($number1=="" && $code1=="" && $amount1==""){
                        $numbertxt = $_POST['paid_num'];
                        $codetxt = $_POST['code'];
                        $amounttxt = $_POST['amount'];
                     }

                    $insert = mysqli_query($con, "INSERT INTO `payment`(`topic_id`, `name`, `email`, `number`, `code`, `amount`, `payment_type`, `date`, `status`)
                    VALUES ('0','$name','$email','$numbertxt','$codetxt','$amounttxt','$payment_type','$date','support')");
                    if($insert){
                        $msg = "<label style='color:green'>Payment successfuly, Thank you for supporting Us.</label>";

                    }else{
                        $msg = "<label style='color:red'>Something went wrong try again</label>";
                    }
                  }
               ?>
               <b><?php echo $msg;?></b>
               <form action="" method="POST" enctype="multipart/form-data">
                  <div class="card mt-4" style="border:1px solid #00021d">
                     <div class="card-header" style="background:#00021d">
                        <h4 style="color:white">Support Us 
                        <button type="submit" name="support" style="background:red;border:1px solid red" class="float-end btn btn-primary">Support</button>
                        </h4>
                     </div>
                     <div class="card-body">
                        <div class="main-form mt-3 border-bottom">
                           <div class="row">
                              <div class="form-group col-6">
                                 <label for="">Name</label>
                                 <input type="text" name="name" class="form-control" required placeholder="Enter name">
                              </div>
                              <div class="form-group col-6">
                                 <label for="">Email</label>
                                 <input type="email" name="email" class="form-control" required placeholder="Example@gmail.com">
                              </div>
                              <div class="form-group col-12" style="text-align:center">
                                 <label style="font-weight:bold">SELECT PAYEMNT METHOD</label>
                                 <select id="name" name="type" class="form-control" style="text-align:center" required>
                                    <option value="bank">Bank</option>
                                    <option value="mpesa">Mpesa</option>
                                    <option value="momo">Momo</option>
                                 </select>
                              </div>
                              <div class="content" style="text-align:center">
                                <div id="bank" class="data">
                                   
                                </div>
                                <div id="mpesa" class="data">
                                    <p>1. go to mpesa app or section</p>
                                    <p>2. Select send money</p>
                                    <p>3. Put number 0742241398 </p>
                                    <p>4. Put Amount.</p>
                                    <p>5. Put your pin</p>
                                    <p>6. Complite your process</p>
                                    <p style="color:black;font-weight:bold">TO COMPLETE YOUR SUPPORT PROCESS PLEASE!.</p>
                                    <div class="row">
                                       <div class="form-group col-6">
                                          <label for="">Amount</label>
                                          <input type="number" name="amount" class="form-control" placeholder="Enter Amount.">
                                       </div>
                                       <div class="form-group col-6">
                                          <label for="">Number</label>
                                          <input type="number" name="paid_num" class="form-control" placeholder="0712345678">
                                       </div>
                                       <div class="form-group col-6">
                                          <label for="">Transaction Code</label>
                                          <input type="text" name="code" class="form-control" placeholder="*161* Txld:12344567*S* ">
                                       </div>
                                    </div>
                                </div>
                                <div id="momo" class="data">
                                    <p>1. go to mtn app or section</p>
                                    <p>2. Hitamo kohereza amafaranga</p>
                                    <p>3. Shyirimo iyinimero  0781794795 </p>
                                    <p>4. Shyiramo amafaranga.</p>
                                    <p>6. Emeza kwishyura</p>
                                    <p style="color:black;font-weight:bold">KWEMEZA IGIKORWA MUKOZE!.</p>
                                    <div class="row">
                                       <div class="form-group col-6">
                                          <label for="">Amafaranga</label>
                                          <input type="number" name="amount1" class="form-control" placeholder="Enter Amount.">
                                       </div>
                                       <div class="form-group col-6">
                                          <label for="">Nimero</label>
                                          <input type="number" name="paid_num1" class="form-control" placeholder="0712345678">
                                       </div>
                                       <div class="form-group col-6">
                                          <label for="">Kode igaragaza kwishyura</label>
                                          <input type="text" name="code1" class="form-control" placeholder="*161* Txld:12344567*S* ">
                                       </div>
                                    </div>
                                </div>
                              </div>
                           </div>
                           <div class="paste-new-forms"></div>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
   </main>
   <?php }else{echo "<script>window.open('index.php','_self')</script>";  }?>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#name").on('change', function(){
                $(".data").hide();
               $("#" + $(this).val()).fadeIn(700);
            }).change();
        });
    </script>
    <script>
        $(document).ready(function (c) {
            $('.alert-close').on('click', function (c) {
                $('.main-mockup').fadeOut('slow', function (c) {
                    $('.main-mockup').remove();
                });
            });
        });
    </script>

<?php include_once 'includes/pro_footer.php'; ?>
