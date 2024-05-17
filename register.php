<?php include_once 'includes/header.php'; ?>

    <main>
      <div class="container" style="margin-bottom:50px">
        <div class="row">
            <div class="col-md-12">

                <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                        unset($_SESSION['status']);
                    }
                ?>
                  <form action="insert.php" method="POST" enctype="multipart/form-data">
                     <div class="card mt-4" style="border:1px solid #00021d">
                        <div class="card-header" style="background:#00021d">
                           <h4 style="color:white">Register Now 
                           <button type="submit" name="save" class="float-end btn btn-primary">Submit Data</button>
                           </h4>
                        </div>
                        <div class="card-body">
                           <div class="main-form mt-3 border-bottom">
                              <div class="row">
                                    <div class="form-group col-6">
                                       <label for="">Shop name</label>
                                       <input type="text" id="name" name="name" class="form-control" required placeholder="Enter Name">
                                    </div>
                                    <div class="form-group col-6">
                                       <label for="">Code</label>
                                       <input type="text" id="code" name="code" class="form-control" required placeholder="Enter County Code">
                                    </div>
                                    <div class="form-group col-6">
                                       <label for="">Contact</label>
                                       <input type="phone" id="contact" name="phone" class="form-control" required placeholder="Enter Contact">
                                    </div>
                                    <div class="form-group col-6">
                                       <label for="">Email</label>
                                       <input type="email" id="email" name="email" class="form-control" required placeholder="Enter Email">
                                    </div>
                                    <div class="form-group col-6">
                                       <label for="">Full address</label>
                                       <input type="text" id="address" name="address" class="form-control" required placeholder="Enter Address">
                                    </div>
                                    <div class="form-group col-12">
                                       <label for="">Category</label>
                                       <input type="text" id="category" name="product" class="form-control" required placeholder="Enter Category">
                                    </div>
                                    <p style="color:red">Shyiraho Amafoto aranga iduka ryawe mumpande sitandukanye* / Attach shop image in different position*</p>
                                    <div class="form-group col-6">
                                       <label for="">Image 1</label>
                                       <input type="file" name="image1" class="form-control">
                                    </div>
                                    <div class="form-group col-6">
                                       <label for="">Image 2</label>
                                       <input type="file" name="image2" class="form-control">
                                    </div>
                                    <div class="form-group col-6">
                                       <label for="">Image 3</label>
                                       <input type="file" name="image3" class="form-control">
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
         </div>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/bootstrap-tokenfield.js"></script>
    <script>
   $(document).ready(function(){
 
 $('#category').tokenfield({
  autocomplete:{
   source: ['Clothing / Imyambaro','Shoes / Inkweto','Jewelry / Imirimbo','Lotion / Amavuta yokwisiga',
   'bags / Ibikapu','mattress / Amamatera','Plant nurseries / Ibiti byigenmwe','Spare parts / piyese zibinyabiziga',
   'Furniture / Ibikoresho bibajwe','Hardware store / ubwubatsi','Utensils / Ibikoresho byomukikoni','Phones / Amaterephone',
   'Electronic Devices / Ibikoresho byumuriro','Sports Things / ibijyanye nasiporo'],
   delay:100
  },
  showAutocompleteOnFocus: true
 });

 $('#programmer_form').on('submit', function(event){
  event.preventDefault();
  if($.trim($('#name').val()).length == 0)
  {
   alert("Please Enter Your Name");
   return false;
  }
  else if($.trim($('#skill').val()).length == 0)
  {
   alert("Please Enter Atleast one Skill");
   return false;
  }
  else
  {
   var form_data = $(this).serialize();
   $('#submit').attr("disabled","disabled");
   $.ajax({
    url:"insert.php",
    method:"POST",
    data:form_data,
    beforeSend:function(){
     $('#submit').val('Submitting...');
    },
    success:function(data){
     if(data != '')
     {
      $('#name').val('');
      $('#skill').tokenfield('setTokens',[]);
      $('#success_message').html(data);
      $('#submit').attr("disabled", false);
      $('#submit').val('Submit');
     }
    }
   });
   setInterval(function(){
    $('#success_message').html('');
   }, 5000);
  }
 });
 
});
</script>
<?php include_once 'includes/pro_footer.php'; ?>
