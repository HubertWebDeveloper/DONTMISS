<?php include_once 'includes/header.php'; ?>

<main>
   <?php
   if(isset($_GET['name'])){
      $name = $_GET['name'];
   }else{echo "<script>window.open('index.php','_self')</script>";}

      if(isset($_GET['page'])){
         $page = $_GET['page'];
      }else{
         $page = 1;
      }
      $number_per_page = 10;
      $start_from = ($page-1)*10;
   ?>
   <div class="trending">
      <div class="container" style="margin-top:-50px">
         <div class="wrapper">
            <div class="sectop flexitem">
               <h2><span class="circle"><b style="font-size:100px">.</b></span><span><?php echo $name ?></span></h2>
            </div>
            <div class="column">
               <div class="flexwrap">
                  <?php
                     $sel2 = mysqli_query($con, "SELECT * FROM product WHERE category LIKE '$name' LIMIT $start_from,$number_per_page");
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
               <div class="container" style="margin-bottom:50px">
                  <nav aria-label="..." style="float:right">
                     <ul class="pagination" style="display:flex;gap:10px">
                        <?php
                           $sql_page = mysqli_query($con, "SELECT * FROM product WHERE category LIKE '$name'");
                           $total = mysqli_num_rows($sql_page);
                           $total_page = ceil($total/$number_per_page);
                           if($page>1){
                           ?>
                              <li class="page-item">
                                 <a class="page-link" href="product.php?page=<?php echo ($page-1); ?> && name=<?php echo $name;?>"><i class="fas fa-angle-double-left"></i> Previous</a>
                              </li>
                           <?php
                           }
                           for($i=1;$i<$total_page;$i++){
                              ?>
                                 <li class="page-item">
                                    <a class="page-link page" href="product.php?page=<?php echo $i ?> && name=<?php echo $name;?>"><?php echo $i ?></a>
                                 </li>
                              <?php
                           }
                           if($i>$page){
                           ?>
                              <li class="page-item">
                                 <a class="page-link" href="product.php?page=<?php echo ($page+1); ?> && name=<?php echo $name;?>">Next <i class="fas fa-angle-double-right"></i></a>
                              </li>
                           <?php
                           }
                        ?>
                     </ul>
                  </nav>
               </div>
            </div>
         </div>
      </div>
   </div>
</main>

<?php include_once 'includes/pro_footer.php'; ?>