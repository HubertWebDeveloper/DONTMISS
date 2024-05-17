<?php include_once 'includes/header.php'; ?>

  <main>

    <!--
      - BANNER
    -->
<style>
    .banner .container .slider-item video{
        width:60%;
        height:100%;
        margin-left:20%;
    }
    @media(max-width:900px){
        .banner .container .slider-item video{
        margin-left:0px;
        width:100%;
        height:100%;
    }
    }
</style>
    <div class="banner">

        <div class="container">

            <div class="slider-container has-scrollbar">
            
                <?php
                $slide_sel = mysqli_query($con, "SELECT * FROM advertisement WHERE status='approved' OR status='default'");
                $slide_count = mysqli_num_rows($slide_sel);
                if($slide_count > 0){
                  while($slide_row = mysqli_fetch_assoc($slide_sel)){
                  $status = $slide_row['status'];
                  $logo = $slide_row['file'];
                   ?>
                    <div class="slider-item">
                      <?php
                        $target = $logo;
                        $img_exe = pathinfo($target, PATHINFO_EXTENSION);
                        if($img_exe == "mp4"){
                        ?><video autoplay muted src="Advert_img/<?php echo $slide_row['file'] ?>" style="background-image: radial-gradient(white 5%, #C0C0C0 30%);" class="banner-img"></video><?php
                        }else{
                        ?>
                        <img src="Advert_img/<?php echo $slide_row['file'] ?>" alt="women's latest fashion sale" class="banner-img">
                        <div class="banner-content">
                          <p class="banner-subtitle">Trending News</p>
                          <h2 class="showcase-desc"><?php echo $slide_row['content'] ?></h2>
                          <div style="display:flex;gap:12px">
                              <a href="register.php" class="banner-btn">Click here to Register Your shop Now</a>
                              <a href="advertisement.php" style="background:hsl(231, 100%, 8%);" class="banner-btn">Click here to Make Your advertisiment</a>
                          </div>
                          
                          
                        </div>
                        <?php
                        }
                      ?>
                       
                    </div>
                   <?php
                  }
                }
                ?>
            </div>
        </div>
    </div>


    <!--
      - CATEGORY
    -->

    <div class="category">

      <div class="container">

        <div><button class="icon prev" onclick="prev()"><i class="fas fa-angle-double-left"></i></button></div>
        <div><button class="icon b next" onclick="next()"><i class="fas fa-angle-double-right"></i></button></div>

        <div class="category-item-container">
          <?php
            $select = mysqli_query($con, "SELECT * FROM category WHERE category='shopping'");
            $counts = mysqli_num_rows($select);
            if($counts > 0){
              while($row = mysqli_fetch_assoc($select)){
                $name = $row['name'];
                $image = $row['logo'];
                $check_image = pathinfo($image,PATHINFO_EXTENSION);
                ?>
                <div class="category-item">
                  <div class="category-img-box">
                        <?php
                          if($check_image !=""){
                            ?><img src="logo_img/<?php echo $row['logo'] ?>" width="30" height="30" style="margin-top:10px"><?php
                          }else{
                            ?><i class="<?php echo $row['logo'] ?>" style="width:30px;height:30px;margin-top:10px"></i><?php
                          }
                        ?>
                  </div>
                  <div class="category-content-box">
                    <div class="category-content-flex">
                      <h3 class="category-item-title"><?php echo $row['name'] ?></h3>
                    </div>
                    <a href="product.php?name=<?php echo $name; ?>" class="category-btn">Show all</a>
                  </div>
                </div>
                <?php
              }
            }
          ?>
          

        </div>

      </div>

    </div>

    <!--
      - PRODUCT
    -->

    <div class="product-container">
        <div class="container">
           <div class="product-box">
                <div class="product-minimal">
                  <div class="product-showcase">

              <h2 class="title">Fashions / Styles / Imyambaro</h2>

              <div class="showcase-wrapper not-scrollbar">

                <div class="showcase-container">

                  <?php
                    $sel = mysqli_query($con, "SELECT * FROM product WHERE category='Clothing / Imyambaro' LIMIT 4");
                    $count = mysqli_num_rows($sel);
                    if($count > 0){
                      while($product_row = mysqli_fetch_assoc($sel)){
                      $id = $product_row['id'];
                      ?>
                      <div class="showcase">

                        <a href="productView.php?id=<?php echo $id ?>" class="showcase-img-box">
                          <img src="product_img/<?php echo $product_row['image'] ?>" alt="relaxed short full sleeve t-shirt" width="70" class="showcase-img">
                        </a>

                        <div class="showcase-content">
                          <a href="productView.php?id=<?php echo $id ?>">
                            <h4 class="showcase-title"><?php echo $product_row['title'] ?></h4>
                          </a>

                          <div class="price-box">
                            <p class="price" style="font-weight:500;font-size:13px;"><?php echo $product_row['price'] ?> RWF</p>
                            <p class="price" style="font-weight:500;font-size:13px;color:#5a5a5a"><?php echo $product_row['ksh_price'] ?> KSH</p>
                          </div>
                          <p style="color:red;font-size:10px;font-family:arigerian;box-shadow: 0px 0px 10px 10px rgba(0, 0, 0, 0.2);padding:5px 5px;border-radius:5px">Igiciro kiganirwaho / Price bargaining.</p>

                          <a href="productView.php?id=<?php echo $id; ?>" style="color:white;background:var(--salmon-pink);padding:5px 5px;border-radius:10px;margin-top:10px;font-size:13px;text-align:center">Check Location</a>

                        </div>
                      </div>
                      <?php
                      }
                    }
                  ?>
                </div>
              </div>

            </div>
                  <div class="product-showcase">
            
              <h2 class="title">Electronic Devices / Ibikoresho byamashanyarazi</h2>
            
              <div class="showcase-wrapper  not-scrollbar">
            
                <div class="showcase-container">

                <?php
                  $sel = mysqli_query($con, "SELECT * FROM product WHERE category='Electronic devices / ibikoresho byumuriro' LIMIT 4");
                  $count = mysqli_num_rows($sel);
                  if($count > 0){
                    while($product_row = mysqli_fetch_assoc($sel)){
                    $id = $product_row['id'];
                    ?>
                    <div class="showcase">

                      <a href="productView.php?id=<?php echo $id ?>" class="showcase-img-box">
                        <img src="product_img/<?php echo $product_row['image'] ?>" alt="relaxed short full sleeve t-shirt" width="70" class="showcase-img">
                      </a>

                      <div class="showcase-content">
                        <a href="productView.php?id=<?php echo $id ?>">
                          <h4 class="showcase-title"><?php echo $product_row['title'] ?></h4>
                        </a>

                        <div class="price-box">
                          <p class="price" style="font-weight:500"><?php echo $product_row['price'] ?> RWF</p>
                          <p class="price" style="font-weight:500;color:#5a5a5a"><?php echo $product_row['ksh_price'] ?> KSH</p>
                        </div>
                        <p style="color:red;font-size:10px;font-family:arigerian;box-shadow: 0px 0px 10px 10px rgba(0, 0, 0, 0.2);padding:5px 5px;border-radius:5px">Igiciro kiganirwaho / Price bargaining.</p>

                        <a href="productView.php?id=<?php echo $id; ?>" style="color:white;background:var(--salmon-pink);padding:5px 5px;border-radius:10px;margin-top:10px;font-size:13px;text-align:center">Check Location</a>

                      </div>
                    </div>
                    <?php
                    }
                  }
                ?>
            
                </div>

              </div>
            
            </div>
                  <div class="product-showcase">
            
              <h2 class="title">Lotion / Amavuta </h2>
            
              <div class="showcase-wrapper  not-scrollbar">
            
              <div class="showcase-container">

                <?php
                  $sel = mysqli_query($con, "SELECT * FROM product WHERE category='Lotion / Amavuta yokwisiga' LIMIT 4");
                  $count = mysqli_num_rows($sel);
                  if($count > 0){
                    while($product_row = mysqli_fetch_assoc($sel)){
                    $id = $product_row['id'];
                    ?>
                    <div class="showcase">

                      <a href="productView.php?id=<?php echo $id ?>" class="showcase-img-box">
                        <img src="product_img/<?php echo $product_row['image'] ?>" alt="relaxed short full sleeve t-shirt" width="70" class="showcase-img">
                      </a>

                      <div class="showcase-content">
                        <a href="productView.php?id=<?php echo $id ?>">
                          <h4 class="showcase-title"><?php echo $product_row['title'] ?></h4>
                        </a>

                        <div class="price-box">
                          <p class="price" style="font-weight:500"><?php echo $product_row['price'] ?> RWF</p>
                          <p class="price" style="font-weight:500;color:#5a5a5a"><?php echo $product_row['ksh_price'] ?> KSH</p>
                        </div>
                        <p style="color:red;font-size:10px;font-family:arigerian;box-shadow: 0px 0px 10px 10px rgba(0, 0, 0, 0.2);padding:5px 5px;border-radius:5px">Igiciro kiganirwaho / Price bargaining.</p>

                        <a href="productView.php?id=<?php echo $id; ?>" style="color:white;background:var(--salmon-pink);padding:5px 5px;border-radius:10px;margin-top:10px;font-size:13px;text-align:center">Check Location</a>

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
        </div>
    </div>

    <!-- featured product -->
    <div class="blog">

      <h2 class="title story">featured Products</h2>

      <div class="container">

        <div class="blog-container has-scrollbar slide">

          <?php
            $sel = mysqli_query($con, "SELECT * FROM product ORDER BY id DESC LIMIT 100");
            $count = mysqli_num_rows($sel);
            if($count > 0){
              while($product_row = mysqli_fetch_assoc($sel)){
              $id = $product_row['id'];
              ?>
              <div class="blog-card">
                <a href="productView.php?id=<?php echo $id ?>">
                  <img src="product_img/<?php echo $product_row['image'] ?>" alt="Clothes Retail KPIs 2021 Guide for Clothes Executives" width="100" height="150" class="blog-banner img-b">
                </a>
                <div class="blog-content">

                  <a href="productView.php?id=<?php echo $id ?>">
                    <h3 class="blog-title"><?php echo $product_row['title'] ?></h3>
                  </a>
                  <div class="price-box" style="display: flex;align-items: center;gap: 10px;">
                    <p class="price" style="font-weight:500;font-size:13px;"><?php echo $product_row['price'] ?> RWF</p>
                    <p class="price" style="font-weight:500;font-size:13px;color:#5a5a5a"><?php echo $product_row['ksh_price'] ?> KSH</p>
                  </div>
                  <p style="color:red;font-size:10px;font-family:arigerian;box-shadow: 0px 0px 10px 10px rgba(0, 0, 0, 0.2);padding:5px 5px;border-radius:5px;margin-bottom:10px;text-align:center">Igiciro kiganirwaho / Price bargaining.</p>
                  <a href="productView.php?id=<?php echo $id ?>" style="font-size:13px;border-radius: 10px; background: var(--salmon-pink);color: white;padding: 5px 5px;text-align:center">CheckLocation</a>

                </div>
              </div>
              <?php
              }
            }
            ?>
        </div>

      </div>

    </div>
    <!--- BLOG -->
    
    <!-- advertisement slider -->
    <?php
    $slide = mysqli_query($con, "SELECT * FROM advertisement WHERE status !='default'");
    $slide_count = mysqli_num_rows($slide);
    if($slide_count > 0){
      ?>
      <h2 style="padding:0px 9%;font-size:25px;font-weight:bold"><span class="circle"><b style="font-size:100px;margin-right:30px">.</b></span><span>Trending News</span></h2>
      <div class="slider">
        <div class="image_slider">
      <?php
      while($slide_row = mysqli_fetch_assoc($slide)){
          $logo = $slide_row['file'];
        ?>
        <div class="col-3">
          <div class="team">
              <?php
                $target = $logo;
                $img_exe = pathinfo($target, PATHINFO_EXTENSION);
                if($img_exe == "mp4"){
                    ?><video autoplay muted src="Advert_img/<?php echo $slide_row['file'] ?>"></video><?php
                }else{
                    ?><img src="Advert_img/<?php echo $slide_row['file'] ?>"><?php
                }
              ?>
          </div>
        </div>
        <?php
      }
    }
    ?>
      </div>
    </div>
    
    <?php
    $prod_sel = mysqli_query($con, "SELECT * FROM `story` ORDER BY id DESC LIMIT 3");
    $prod_count = mysqli_num_rows($prod_sel);
    if($prod_count > 0){
        ?>
    <div class="features">
        <div class="container">
            <div class="wrapper">
                <div class="column">
                    <div class="sectop flexitem">
                      <h2><span class="circle"><b style="font-size:100px">.</b></span><span>Hot&True Stories</span></h2>
                      <div class="second-links">
                        <a href="TrueStory.php" class="view-all">View all<i class="fas fa-arrow-right"></i></a>
                      </div>
                    </div>
                    <div class="products main flexwrap">
                        <?php
                          while($prod_row = mysqli_fetch_assoc($prod_sel)){
                            $id = $prod_row['id'];
                            ?>
                            <div class="item" style="width:90%;margin:auto;margin-bottom:10px">
                                <div class="media">
                                    <div class="thumbnail object-cover">
                                        <a href="payment.php?id=<?php echo $id ?>">
                                            <video class="post-image" src="session_video/<?php echo $prod_row['video'] ?>" style="width:100%;margin-top:20px;border-radius:10px"></video>
                                        </a>
                                    </div>
                                </div>
                                <div class="content">
                                  <h2 style="font-size:17px"> <a href="read_story.php?id=<?php echo $id ?>" style="color:black;font-weight:bold"><?php echo $prod_row['title'] ?></a></h2>
                                  <h3><a href="payment.php?id=<?php echo $id ?>" style="color:#5a5a5a;"><?php echo $prod_row['subcontent'] ?></a></h3>
                                  <a href="payment.php?id=<?php echo $id ?>" class="primary-button" style="padding: 0.3em 1em;margin-top:10px">Read More</a>
                                </div>
                            </div>
                            <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } else{echo "";}?>
    
  </main>

<?php include_once 'includes/pro_footer.php'; ?>