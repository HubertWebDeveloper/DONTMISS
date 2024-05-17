<?php
include_once '../includes/connection.php';

if(isset($_GET['id'])){
   $id = $_GET['id'];

   $update = mysqli_query($con, "UPDATE `advertisement` SET `status`='approved' WHERE id='$id'");
   if($update){
      echo "<script>window.open('advertisement.php?num=advert','_self')</script>";
   }else{
      echo "<script>window.open('advertisement.php?num=advert','_self')</script>";
   }
}
if(isset($_GET['id2'])){
   $id2 = $_GET['id2'];

   $update = mysqli_query($con, "UPDATE `payment` SET `status`='approved' WHERE id='$id2'");
   if($update){
      echo "<script>window.open('payment.php?num=payment','_self')</script>";
   }else{
      echo "<script>window.open('payment.php?num=payment','_self')</script>";
   }
}if(isset($_GET['id3'])){
   $id3 = $_GET['id3'];

   $update = mysqli_query($con, "UPDATE `shopuser` SET `status`='approved' WHERE id='$id3'");
   if($update){
      echo "<script>window.open('register.php?num=register','_self')</script>";
   }else{
      echo "<script>window.open('register.php?num=register','_self')</script>";
   }
}
?>