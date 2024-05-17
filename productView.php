<?php include_once 'includes/header.php'; ?>
<style>
    @media (max-width:900px){
      .imgs img{
         width: 130px;
         height:150px;
      }
   }
   @media (max-width:768px){
      .imgs img{
         width: 100px;
         height:110px;
      }
   }
</style>

      <main>
        <?php
        if(isset($_GET['id'])){
         $id = $_GET['id'];
         $sel = mysqli_query($con, "SELECT * FROM product WHERE id='$id'");
         $row = mysqli_fetch_assoc($sel);
         $desc = $row['description'];
         $title = $row['title'];
         $categ = $row['category'];
        ?>
        <div class="single-product">
         <div class="container">
            <div class="wrapper">
               <!--<div class="breadcrumb">-->
               <!--   <ul class="flexitem">-->
               <!--      <li><a href="">Home</a></li>-->
               <!--      <li><a href=""><?php //echo $row['category'] ?></a></li>-->
               <!--      <li><?php //echo $row['title'] ?></li>-->
               <!--   </ul>-->
               <!--</div>-->
               <!-- breadcrumb end -->
               <div class="column">
                  <div class="products one">
                     <div class="flexwrap">
                        <div class="row">
                           <div class="item">
                              <div class="price">
                                 <!-- <span class="discount">32%<br>OFF</span> -->
                              </div>
                              <div class="big-image">
                                 <div class="big-image-wrapper swiper-wrapper">
                                    <div class="image-show swiper-slide">
                                       <a data-fslightbox href="product_img/<?php echo $row['image'] ?>"><img src="product_img/<?php echo $row['image'] ?>"></a>
                                    </div>
                                    <?php
                                     $sel_img = mysqli_query($con, "SELECT * FROM product WHERE title LIKE '%$title%' AND id !='$id' LIMIT 10");
                                     $img_count = mysqli_num_rows($sel_img);
                                     if($img_count > 0){
                                       while($img_row = mysqli_fetch_assoc($sel_img)){
                                          ?>
                                          <div class="image-show swiper-slide">
                                            <a data-fslightbox href="product_img/<?php echo $img_row['image'] ?>"><img src="product_img/<?php echo $img_row['image'] ?>"></a>
                                          </div>
                                          <?php
                                       }
                                     }
                                    ?>
                                 </div>
                                 <!--<div class="swiper-button-next"></div>-->
                                 <!--<div class="swiper-button-prev"></div>-->
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="item">
                              <h1><?php echo $row['title'] ?>.</h1>
                              <div class="content">
                                 <div class="stock-sku" style="margin-top:10px">
                                    <span class="available"><?php echo $row['description'] ?></span>
                                 </div>
                                 <div class="price" style="margin-top:10px">
                                    <span class="current"><?php echo $row['price'] ?> Rwf</span>,
                                    <span class="normal mini-text" style="text-decoration:none"><?php echo $row['ksh_price'] ?> Ksh</span>
                                    <p style="color:red;font-size:15px;font-family:arigerian;box-shadow: 0px 0px 10px 10px rgba(0, 0, 0, 0.2);padding:5px 5px;border-radius:5px;width:250px">Igiciro kiganirwaho / Price bargaining.</p>
                                 </div>
                              </div>
                              <p style="margin-top:50px;font-weight:bold">Find Product From Anyway</p>
                              <form action="" method="post" class="search" style="border:1px solid #5a5a5a;border-radius:10px;margin-bottom:20px;">
                                 <span class="icon-large"><i class="fas fa-location"></i></span>
                                 <input type="search" name="search" placeholder="Search for District / County / Location..." required>
                                 <button type="submit" name="submit_btn">Search</button>
                              </form>
                              <?php 
                               if(isset($_POST['submit_btn'])){
                                   $i=0;
                                 $search = $_POST['search'];
                                 $select = mysqli_query($con, "SELECT * FROM shopuser WHERE address LIKE '%$search%' AND product LIKE '%$categ%' LIMIT 10");
                                 $shop_count = mysqli_num_rows($select);
                               }else if(!isset($_POST['submit_btn'])){
                                   $i=0;
                                   $select = mysqli_query($con, "SELECT * FROM shopuser WHERE product LIKE '%$categ%' LIMIT 5");
                                   $shop_count = mysqli_num_rows($select);
                               }
                                 if($shop_count > 0){
                                    ?><h3 style="font-weight:bold">Shop With this product: (<?php echo $shop_count; ?> Shops)</h3><hr style="border:2px solid #5a5a5a;"><?php
                                    while($shop_row = mysqli_fetch_assoc($select)){
                                       $image1 = $shop_row['image1'];
                                       $image2 = $shop_row['image2'];
                                       $image3 = $shop_row['image3'];
                                       $i++;
                                       ?>
                                       <div class="shop-location">
                                          <div id="" class="location data" style="margin-top:30px">
                                             <div class="shop-details" style="margin-bottom:10px">
                                                <h3 style="font-weight:bold;font-family:arigerian;color:#5a5a5a;margin-bottom:5px;text-decoration:underline"><?php echo $i; ?>. Shop / Iduka</h3>
                                                <p style="font-size:15px">ShopName / Iduka: <span style="font-weight:bold"><?php echo $shop_row['name'] ?></span></p>
                                                <p style="font-size:15px">Phone number / Nimero ye: <span style="font-weight:bold"><?php echo $shop_row['code'] ?> <?php echo $shop_row['phone'] ?></span></p>
                                                <p style="font-size:15px">Email address / Imeri ye: <span style="font-weight:bold"><?php echo $shop_row['email'] ?></span></p>
                                                <p style="font-size:15px">Location / Aho aherereye: <span style="font-weight:bold"><?php echo $shop_row['address'] ?></span></p>
                                                <p style="font-size:15px">Products: <span style="color:darkred;font-weight:bold"><?php echo $shop_row['product'] ?></span></p>
                                                <div class="imgs" style="display:flex;gap:10px">
                                                   <?php
                                                    if($image1==""){
                                                      ?><img src="images/no_image.png"><?php
                                                    }else{
                                                      ?><a data-fslightbox href="shops_image/<?php echo $shop_row['image1'] ?>"><img src="shops_image/<?php echo $shop_row['image1'] ?>"></a><?php
                                                    }
                                                    if($image2==""){
                                                      ?><img src="images/no_image.png"><?php
                                                    }else{
                                                      ?><a data-fslightbox href="shops_image/<?php echo $shop_row['image2'] ?>"><img src="shops_image/<?php echo $shop_row['image2'] ?>"></a><?php
                                                    }
                                                    if($image3==""){
                                                      ?><img src="images/no_image.png"><?php
                                                    }else{
                                                      ?><a data-fslightbox href="shops_image/<?php echo $shop_row['image3'] ?>"><img src="shops_image/<?php echo $shop_row['image3'] ?>"></a><?php
                                                    }
                                                   ?>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <?php
                                    }
                                  }else{
                                    echo "<label style='color:red;box-shadow: 0px 0px 10px 10px rgba(0, 0, 0, 0.3);padding:10px 10px;border-radius:10px'>No Shop found in * $search * Sells * $title *.</label>";
                                 }
                              ?>
                              <div id="review-rorm" class="review-form">
                                 <h2 class="title">Write a Comments Here.</h2>
                                 <?php
                                 $msg = "";
                                 if(isset($_POST['comment'])){
                                    $email = $_POST['email'];
                                    $message = $_POST['message'];
                                    $date = date('Y-m-d');

                                    $insert = mysqli_query($con, "INSERT INTO `prod_comments`(`email`, `message`, `date`) 
                                    VALUES ('$email','$message','$date')");
                                    if($insert){
                                       $msg = "<label style='color:green;box-shadow: 0px 0px 10px 10px rgba(0, 0, 0, 0.2);'>Thank you for Comment.</label>";
                                    }else{
                                       $msg = "<label style='color:red;box-shadow: 0px 0px 10px 10px rgba(0, 0, 0, 0.2);'>Something went wrong.</label>";
                                    }
                                 }
                                 ?>
                                 <b><?php echo $msg; ?></b>
                                 <form action="" method="POST">
                                    <p style="margin-top:20px">Are you Satisfied enough?</p>
                                    <p>
                                       <label>Email</label>
                                       <input type="email" name="email" placeholder="Enter email" required>
                                    </p>
                                    <p>
                                       <label>Comment</label>
                                       <textarea name="message" placeholder="Text comment Here..." cols="30" rows="5" required></textarea>
                                    </p>
                                    <p><button type="submit" name="comment" class="primary-button">Send Comment</button></p>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
        </div>
         <!-- slider ends -->
         <div class="trending">
            <div class="container">
               <div class="wrapper">
                  <div class="sectop flexitem">
                     <h2><span class="circle"><b style="font-size:100px">.</b></span><span>Related Products</span></h2>
                  </div>
                  <div class="column">
                     <div class="flexwrap">
                        <?php
                         $sel2 = mysqli_query($con, "SELECT * FROM product WHERE category='$categ' LIMIT 12");
                         $count = mysqli_num_rows($sel2);
                         if($count > 0){
                           while($row2 = mysqli_fetch_assoc($sel2)){
                              $idd = $row2['id'];
                              ?>
                              <div class="row products mini">
                                 <div class="item">
                                    <div class="media">
                                       <div class="thumbnail object-cover">
                                          <a href="productView.php?id=<?php echo $idd ?>">
                                             <img src="product_img/<?php echo $row2['image'] ?>">
                                          </a>
                                       </div>
                                    </div>
                                    <div class="content">
                                       <h3 class="main-links"><a href=""><?php echo $row2['title'] ?>.</a></h3>
                                       <div class="price">
                                          <span class="current"><?php echo $row2['price'] ?> Rwf</span>,
                                          <span class="normal mini-text" style="text-decoration:none"><?php echo $row2['ksh_price'] ?> Ksh</span>
                                          <p style="color:red;font-size:10px;font-family:arigerian;box-shadow: 0px 0px 10px 10px rgba(0, 0, 0, 0.2);padding:5px 5px;border-radius:5px">Igiciro kiganirwaho / Price bargaining.</p>
                                       </div>
                                       <a href="productView.php?id=<?php echo $idd ?>" class="primary-button" style="padding: 0.3em 1em;">Check Location</a>
                                    </div>
                                 </div>
                              </div>
                              <?php
                           }
                         }
                        ?>
                        

                     </div>
                  </div>
               </div>
            </div>
         </div>
         <?php }else{echo "<script>window.open('index.php','_self')</script>";} ?>

      </main>

<?php include_once 'includes/pro_footer.php'; ?>