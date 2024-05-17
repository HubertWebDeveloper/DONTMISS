<?php
if(isset($_GET['num'])){
   $name = $_GET['num'];

   if($name=="dashboard"){
      echo "<script>window.open('home.php?num=$name','_self')</script>";
   }else if($name=="product"){
      echo "<script>window.open('product.php?num=$name','_self')</script>";
   }else if($name=="payment"){
      echo "<script>window.open('payment.php?num=$name','_self')</script>";
   }else if($name=="register"){
      echo "<script>window.open('register.php?num=$name','_self')</script>";
   }else if($name=="advert"){
      echo "<script>window.open('advertisement.php?num=$name','_self')</script>";
   }else if($name=="story"){
      echo "<script>window.open('story.php?num=$name','_self')</script>";
   }else if($name=="partner"){
      echo "<script>window.open('partner.php?num=$name','_self')</script>";
   }else if($name=="support"){
      echo "<script>window.open('support.php?num=$name','_self')</script>";
   }else if($name=="comment"){
      echo "<script>window.open('comment.php?num=$name','_self')</script>";
   }else if($name=="session"){
      echo "<script>window.open('session.php?num=$name','_self')</script>";
   }else if($name=="subscribe"){
      echo "<script>window.open('subscribe.php?num=$name','_self')</script>";
   }else if($name=="category"){
      echo "<script>window.open('category.php?num=$name','_self')</script>";
   }else if($name=="staff"){
      echo "<script>window.open('staff.php?num=$name','_self')</script>";
   }else if($name=="admincateg"){
      echo "<script>window.open('admin_category.php?num=$name','_self')</script>";
   }else if($name=="file"){
      echo "<script>window.open('file.php?num=$name','_self')</script>";
   }else if($name=="prodComment"){
      echo "<script>window.open('prodComment.php?num=$name','_self')</script>";
   }else{
      echo "<script>window.open('home.php?num=dashboard','_self')</script>";
   }
}
?>