<?php 
include_once '../includes/connection.php'; 
if(!isset($_SESSION['email']) && !isset($_SESSION['type'])){  //User_session
   echo "<script>window.open('index.php','_self')</script>";
} 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/admin_style.css" />
    <title>Don't Miss.</title>
    <link rel="shortcut icon" href="../images/myLogo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>   
</head>
<?php 
$dot = ".";
if(isset($_GET['num'])){
    $name = $_GET['num'];
}else{
    $name = "dashboard";
}
?>
<style>
   <?php
   if($name==$name){
      ?>
      .list-group <?php echo $dot ?><?php echo $name ?>{
      background:#ff9900;
      color:white;
      }
      <?php
   }
   ?>
</style>
<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div style="background:white;" id="sidebar-wrapper">
            <div class="sidebar-heading" style="box-shadow: 0px 5px 1px rgba(0, 0, 0, 0.3);">
					<img src="../images/myLogo.png" style="width:50px;height:50px;border-radius:50%">
					<span style="color:#5a5a5a;font-weight:bold">DON'T MISS.</span>
				</div>
            <div class="list-group list-group-flush my-3">
                <?php
                if($_SESSION['type']=="admin"){
                    $sel = mysqli_query($con, "SELECT * FROM admin_categ");
                }else{
                    $sel = mysqli_query($con, "SELECT * FROM admin_categ WHERE name='Dashboard' OR name='Comments' OR name='Products' OR name='Sessions' OR name='Categories' OR name='Session_files'");
                }
                $count = mysqli_num_rows($sel);
                if($count > 0){
                    while($row = mysqli_fetch_assoc($sel)){
                        $name = $row['title'];
                        ?>
                           <a href="location.php?num=<?php echo $name ?>" class="list-group-item <?php echo $name ?>">
					           <i class="fas fa-tachometer-alt me-2"></i><?php echo $row['name'] ?>
				           </a>
                        <?php
                    }
                }
                ?>
               <a href="logout.php" class="list-group-item" style="color:red">
					<i class="fas fa-power-off me-2"></i>Logout
				</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent px-3" style="height:78px;box-shadow: 0px 5px 1px rgba(0, 0, 0, 0.8);">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link second-text fw-bold" href="#">
                                <?php
                                if($_SESSION['type']=="admin"){
                                    ?><i class="fas fa-user me-2"></i>Admin Panel<?php
                                }else{
                                    ?><i class="fas fa-user me-2"></i>Partner Panel<?php
                                }
                                ?>
                                
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>