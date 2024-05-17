<?php
include_once '../includes/connection.php';

if(isset($_GET['id'])){
   $id = $_GET['id'];

   $delete = mysqli_query($con, "DELETE FROM `product` WHERE id='$id'");
   if($delete){
      echo "<script>window.open('product.php?num=product','_self')</script>";
   }else{
      echo "<script>window.open('product.php?num=product','_self')</script>";
   }
}
if(isset($_GET['id2'])){
   $id2 = $_GET['id2'];

   $delete = mysqli_query($con, "DELETE FROM `category` WHERE id='$id2'");
   if($delete){
      echo "<script>window.open('category.php?num=category','_self')</script>";
   }else{
      echo "<script>window.open('category.php?num=category','_self')</script>";
   }
}
if(isset($_GET['id3']) || isset($_GET['video'])){
   $id3 = $_GET['id3'];
   $video = $_GET['video'];

   unlink("../session_video/".$video);
   $delete = mysqli_query($con, "DELETE FROM `session` WHERE id='$id3'");
   if($delete){
      echo "<script>window.open('session.php?num=session','_self')</script>";
   }else{
      echo "<script>window.open('session.php?num=session','_self')</script>";
   }
}
if(isset($_GET['id4'])){
   $id4 = $_GET['id4'];

   $delete = mysqli_query($con, "DELETE FROM `staff` WHERE id='$id4'");
   if($delete){
      echo "<script>window.open('staff.php?num=staff','_self')</script>";
   }else{
      echo "<script>window.open('staff.php?num=staff','_self')</script>";
   }
}
if(isset($_GET['id5']) || isset($_GET['document'])){
   $id5 = $_GET['id5'];
   $document = $_GET['document'];

   unlink("../files/".$document);
   $delete = mysqli_query($con, "DELETE FROM `file` WHERE id='$id5'");
   if($delete){
      echo "<script>window.open('file.php?num=file','_self')</script>";
   }else{
      echo "<script>window.open('file.php?num=file','_self')</script>";
   }
}
?>