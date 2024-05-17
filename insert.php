<?php
include_once 'includes/connection.php';
$smg = "";

if(isset($_POST["save"]))
{
   $name = $_POST['name'];
   $email = $_POST['email'];
   $code = $_POST['code'];
   $phone = $_POST['phone'];
   $product = $_POST['product'];
   $address = $_POST['address'];
   $status = "pending";
   $image1 = $_FILES['image1']['name'];
   $image2 = $_FILES['image2']['name'];
   $image3 = $_FILES['image3']['name'];

   if($image1==""){
      $img1 = "";
   }else{
      $img1 = $_FILES['image1']['name'];
      $temp_name = $_FILES['image1']['tmp_name'];
      move_uploaded_file($temp_name, "shops_image/$img1");
   }
   if($image2==""){
      $img2 = "";
   }else{
      $img2 = $_FILES['image2']['name'];
      $temp_name = $_FILES['image2']['tmp_name'];
      move_uploaded_file($temp_name, "shops_image/$img2");
   }
   if($image3==""){
      $img3 = "";
   }else{
      $img3 = $_FILES['image3']['name'];
      $temp_name = $_FILES['image3']['tmp_name'];
      move_uploaded_file($temp_name, "shops_image/$img3");
   }

 $query = mysqli_query($con, "INSERT INTO `shopuser`(`name`, `email`, `code`, `phone`, `product`, `address`, `image1`, `image2`, `image3`, `status`) 
 VALUES ('$name','$email','$code','$phone','$product','$address','$img1','$img2','$img3','$status')");
 
 if($query)
 {
   echo "<script>window.open('index.php','_self')</script>";
 }
}
?>