<?php include_once 'includes/connection.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Don't Miss</title>

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="images/myLogo.png" type="image/x-icon">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="css/style2.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style.scss">
  <link rel="stylesheet" href="css/advert_slide.css">

  <!--
    - google font link
  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="css/rateyo.css">
  <link rel="stylesheet" href="css/slick.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/css/bootstrap-tokenfield.min.css">

   <!-- ------- swiper for slider images -----------  -->
   <link rel="stylesheet" href="css/all-swiper.css" />
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<style>
  a{
    text-decoration:none;
  }
  .support-btn{
    background:hsl(231, 100%, 8%);
    color:white;
    border-radius:10px;
    padding:10px 10px;
    text-decoration:none;
    font-size:13px;
  }
  .support-btn:hover{
    background:hsl(31, 100%, 50%);
  }
  @media (max-width:900px){
    .support-btn{
      width:25%;
      margin-left:75%;
      margin-top:-60px;
      margin-bottom:20px;
      font-size:13px;
      text-align:center;
    }
  }
</style>

<body>


  <div class="overlay"></div>

  <!--
    - MODAL
  -->

  <div class="modal" style="display:none" data-modal >

    <div class="modal-close-overlay" data-modal-overlay></div>

    <div class="modal-content">

      <button class="modal-close-btn" data-modal-close>
        <i class="fas fa-times"></i>
      </button>

      <div class="newsletter-img">
        <img src="images/logo.png" alt="subscribe newsletter" width="300" height="150">
      </div>

      <div class="newsletter" style="background:none;padding:20px 20px">

        <form action="#">

          <div class="newsletter-header">

            <h3 class="newsletter-title" style="text-transform:uppercase;font-size:15px">Fill From Get Nearly Shop.</h3>

            <p class="newsletter-desc" style="color:#5a5a5a">
              Fill this form in order to get nearly before search another location.
              <b>Uzuza imyirindoro hano kugirango ubashe kubona icyushaka hafi yawe.</b>
            </p>

          </div>

          <input type="email" name="email" class="email-field" placeholder="Email Address" required>
          <input type="email" name="email" class="email-field" placeholder="Email Address" required>
          <button type="submit" class="btn-newsletter">Submit</button>

        </form>

      </div>

    </div>

  </div>





  <!--
    - NOTIFICATION TOAST
  -->

  <div class="notification-toast" data-toast style="position: fixed;">

    <button class="toast-close-btn" data-toast-close>
      <ion-icon name="close-outline"></ion-icon>
    </button>

    <div class="toast-banner">
      <img src="images/message.png" alt="Rose Gold Earrings" width="80" height="70">
    </div>

    <div class="toast-detail">

      <p class="toast-message">
        Text Us For Any Support.
      </p>

      <p class="toast-title">
        <input type="text" name="" placeholder="name" class="form-control">
      </p><br>
      <p class="toast-title">
        <textarea name="" cols="30" rows="5" class="form-control" placeholder="Text For Support..."></textarea>
      </p>

      <p class="toast-meta">
        <button name="">Send</button>
      </p>

    </div>

  </div>
  





  <!--
    - HEADER
  -->
  <?php
  if(isset($_GET['new_name'])){
    $new_name = $_GET['new_name'];
  }else{
    $new_name = "home";
  }
    $sel = mysqli_query($con, "SELECT * FROM dontmiss_category");
    $count = mysqli_num_rows($sel);
  ?>
  <header>

    <div class="header-main" style="background:white;box-shadow: 0px 0px 10px 10px rgba(0, 0, 0, 0.3);">

      <div class="container">

        <a href="#" class="header-logo">
          <img src="images/logo.png" alt="" width="120" height="50">
        </a>

        <a href="payment.php?donate=donate" class="support-btn">SupportUs</a>

        <?php
        if($new_name=="home"){
          ?>
          <form action="productSearch.php" method="POST" class="header-search-container">

            <input type="search" name="type" class="search-field" placeholder="Enter your product name...">

            <button type="submit" class="search-btn" name="btn">
              <ion-icon name="search-outline"></ion-icon>
            </button>

          </form>
          <?php
        }else if($new_name=="health" || $new_name=="consultation" || $new_name=="mediation"){
          ?>
          <form action="serviceSearch.php?new_name=<?php echo $new_name ?>" method="POST" class="header-search-container">

            <input type="search" name="type" class="search-field" placeholder="Enter your session name...">

            <button type="submit" class="search-btn" name="btn">
              <ion-icon name="search-outline"></ion-icon>
            </button>

          </form>
          <?php
        }
        ?>

        <div class="header-user-actions">

          <button class="action-btn">
            <ion-icon name="person-outline"></ion-icon>
          </button>

        </div>

      </div>

    </div>

    <nav class="desktop-navigation-menu">

      <div class="container">

        <ul class="desktop-menu-category-list">

        <?php
         if($count > 0){
          while($row = mysqli_fetch_assoc($sel)){
            $name = $row['category'];
            if($name=="home"){
              if($new_name=="home"){
                ?>
               <li class="menu-category">
                 <a href="index.php?new_name=<?php echo $name; ?>" class="menu-title" style="color:var(--salmon-pink)"><?php echo $row['name']; ?></a>
               </li>
              <?php
              }else{
                ?>
               <li class="menu-category">
                 <a href="index.php?new_name=<?php echo $name; ?>" class="menu-title"><?php echo $row['name']; ?></a>
               </li>
              <?php
              }
              
            }else if($name=="consultation"){
              if($new_name=="consultation"){
                ?>
               <li class="menu-category">
                 <a href="service.php?new_name=<?php echo $name; ?>" class="menu-title" style="color:var(--salmon-pink)"><?php echo $row['name']; ?></a>
               </li>
              <?php
              }else{
                ?>
               <li class="menu-category">
                 <a href="service.php?new_name=<?php echo $name; ?>" class="menu-title"><?php echo $row['name']; ?></a>
               </li>
              <?php
              }
              
            }else if($name=="health"){
              if($new_name=="health"){
                ?>
               <li class="menu-category">
                 <a href="service.php?new_name=<?php echo $name; ?>" class="menu-title" style="color:var(--salmon-pink)"><?php echo $row['name']; ?></a>
               </li>
              <?php
              }else{
                ?>
               <li class="menu-category">
                 <a href="service.php?new_name=<?php echo $name; ?>" class="menu-title"><?php echo $row['name']; ?></a>
               </li>
              <?php
              }
            }else if($name=="mediation"){
              if($new_name=="mediation"){
                ?>
               <li class="menu-category">
                 <a href="service.php?new_name=<?php echo $name; ?>" class="menu-title" style="color:var(--salmon-pink)"><?php echo $row['name']; ?></a>
               </li>
              <?php
              }else{
                ?>
               <li class="menu-category">
                 <a href="service.php?new_name=<?php echo $name; ?>" class="menu-title"><?php echo $row['name']; ?></a>
               </li>
              <?php
              }
            }else if($name=="blog"){
              if($new_name=="blog"){
                ?>
               <li class="menu-category">
                 <a href="blog.php?new_name=<?php echo $name; ?>" class="menu-title" style="color:var(--salmon-pink)"><?php echo $row['name']; ?></a>
               </li>
              <?php
              }else{
                ?>
               <li class="menu-category">
                 <a href="blog.php?new_name=<?php echo $new_name; ?>" class="menu-title"><?php echo $row['name']; ?></a>
               </li>
              <?php
              }
            }
            
          }
         }
        ?>

        </ul>

      </div>

    </nav>

    <div class="mobile-bottom-navigation">

      <button class="action-btn" data-mobile-menu-open-btn>
        <i class="fas fa-bars"></i>
        <span>Menu</span>
      </button>
      <?php
         if($new_name=="home"){
          ?>
          <a href="index.php?new_name=home" class="action-btn" style="border-radius:20px;background:var(--salmon-pink);text-align:center">
            <i class="fas fa-home"></i>
            <span>Home</span>
         </a>
          <?php
         }else{
          ?>
          <a href="index.php?new_name=home" class="action-btn" style="text-align:center">
            <i class="fas fa-home"></i>
            <span>Home</span>
         </a>
          <?php
         }
         //home--------------
         if($new_name=="health"){
          ?>
          <a href="service.php?new_name=health" class="action-btn" style="border-radius:20px;background:var(--salmon-pink);text-align:center">
            <i class="fas fa-medkit"></i>
            <span>Health</span>
         </a>
          <?php
         }else{
          ?>
          <a href="service.php?new_name=health" class="action-btn" style="text-align:center">
            <i class="fas fa-medkit"></i>
            <span>Health</span>
         </a>
          <?php
         }
         //health--------------
         if($new_name=="consultation"){
          ?>
          <a href="service.php?new_name=consultation" class="action-btn" style="border-radius:20px;background:var(--salmon-pink);text-align:center">
            <i class="fas fa-assistive-listening-systems"></i>
            <span>Consultation</span>
         </a>
          <?php
         }else{
          ?>
          <a href="service.php?new_name=consultation" class="action-btn" style="text-align:center">
            <i class="fas fa-assistive-listening-systems"></i>
            <span>Consultation</span>
         </a>
          <?php
         }
         //consultation--------------
         if($new_name=="mediation"){
          ?>
          <a href="service.php?new_name=mediation" class="action-btn" style="border-radius:20px;background:var(--salmon-pink);text-align:center">
            <i class="fas fa-assistive-listening-systems"></i>
            <span>Mediation</span>
         </a>
          <?php
         }else{
          ?>
          <a href="service.php?new_name=mediation" class="action-btn" style="text-align:center">
            <i class="fas fa-assistive-listening-systems"></i>
            <span>Mediation</span>
         </a>
          <?php
         }
         //mediation--------------
         if($new_name=="blog"){
            ?>
            <a href="blog.php?new_name=blog" class="action-btn" style="border-radius:20px;background:var(--salmon-pink);text-align:center">
              <i class="fas fa-th"></i>
              <span>Blog</span>
           </a>
            <?php
           }else{
            ?>
            <a href="blog.php?new_name=blog" class="action-btn" style="text-align:center">
              <i class="fas fa-th"></i>
              <span>Blog</span>
           </a>
            <?php
           }
      ?>

    </div>

    <nav class="mobile-navigation-menu  has-scrollbar" data-mobile-menu>

      <div class="menu-top">
        <!-- <h2 class="menu-title">Menu</h2> -->
        <img src="images/logo.png" width="80%" height="80" style="margin-bottom: 10px;">

        <button class="menu-close-btn" data-mobile-menu-close-btn>
          <ion-icon name="close-outline"></ion-icon>
        </button>
      </div>

      <ul class="mobile-menu-category-list" style="box-shadow: 0px 7px 2px rgba(0, 0, 0, 0.5);border-radius:10px">
        <li class="menu-category">
          <a href="#" class="menu-title" style="font-weight:bold;text-transform:uppercase;padding:5px 70px;">Category List</a>
        </li>
      </ul>

      <ul class="mobile-menu-category-list">
        <?php
        if($new_name=="home"){
          $sels = mysqli_query($con, "SELECT * FROM category WHERE category='shopping'");
          $counts = mysqli_num_rows($sels);
          if($counts > 0){
            while($rows = mysqli_fetch_assoc($sels)){
                $name = $rows['name'];
              $image = $rows['logo'];
              $check_image = pathinfo($image,PATHINFO_EXTENSION);
              ?>
                <li class="menu-category" style="display:flex;gap:20px">
                  <?php
                  if($check_image !=""){
                    ?><img src="logo_img/<?php echo $rows['logo'] ?>" width="30" height="30" style="margin-top:10px"><?php
                  }else{
                    ?><i class="<?php echo $rows['logo'] ?>" style="width:30px;height:30px;margin-top:10px"></i><?php
                  }
                  ?>
                  
                  <a href="product.php?name=<?php echo $name; ?>" class="menu-title"><?php echo $rows['name'] ?></a>
                </li>
              <?php
            }
          }
          
        }else if($new_name=="consultation"){
          $sels = mysqli_query($con, "SELECT * FROM category WHERE category='consultation'");
          $counts = mysqli_num_rows($sels);
          if($counts > 0){
            while($rows = mysqli_fetch_assoc($sels)){
                $name = $rows['name'];
              $image = $rows['logo'];
              $check_image = pathinfo($image,PATHINFO_EXTENSION);
              ?>
                <li class="menu-category" style="display:flex;gap:20px">
                  <?php
                  if($check_image !=""){
                    ?><img src="logo_img/<?php echo $rows['logo'] ?>" width="30" height="30" style="margin-top:10px"><?php
                  }else{
                    ?><i class="<?php echo $rows['logo'] ?>" style="width:30px;height:30px;margin-top:10px"></i><?php
                  }
                  ?>
                  
                  <a href="serviceView.php?name=<?php echo $name; ?>" class="menu-title"><?php echo $rows['name'] ?></a>
                </li>
              <?php
            }
          }
        }else if($new_name=="health"){
          $sels = mysqli_query($con, "SELECT * FROM category WHERE category='health'");
          $counts = mysqli_num_rows($sels);
          if($counts > 0){
            while($rows = mysqli_fetch_assoc($sels)){
                $name = $rows['name'];
              $image = $rows['logo'];
              $check_image = pathinfo($image,PATHINFO_EXTENSION);
              ?>
                <li class="menu-category" style="display:flex;gap:20px">
                  <?php
                  if($check_image !=""){
                    ?><img src="logo_img/<?php echo $rows['logo'] ?>" width="30" height="30" style="margin-top:10px"><?php
                  }else{
                    ?><i class="<?php echo $rows['logo'] ?>" style="width:30px;height:30px;margin-top:10px"></i><?php
                  }
                  ?>
                  
                  <a href="serviceView.php?name=<?php echo $name; ?>" class="menu-title"><?php echo $rows['name'] ?></a>
                </li>
              <?php
            }
          }
        }else if($new_name=="mediation"){
          $sels = mysqli_query($con, "SELECT * FROM category WHERE category='mediation'");
          $counts = mysqli_num_rows($sels);
          if($counts > 0){
            while($rows = mysqli_fetch_assoc($sels)){
                $name = $rows['name'];
              $image = $rows['logo'];
              $check_image = pathinfo($image,PATHINFO_EXTENSION);
              ?>
                <li class="menu-category" style="display:flex;gap:20px">
                  <?php
                  if($check_image !=""){
                    ?><img src="logo_img/<?php echo $rows['logo'] ?>" width="30" height="30" style="margin-top:10px"><?php
                  }else{
                    ?><i class="<?php echo $rows['logo'] ?>" style="width:30px;height:30px;margin-top:10px"></i><?php
                  }
                  ?>
                  
                  <a href="serviceView.php?name=<?php echo $name; ?>" class="menu-title"><?php echo $rows['name'] ?></a>
                </li>
              <?php
            }
          }
        }
        ?>
      </ul>

    </nav>

  </header>