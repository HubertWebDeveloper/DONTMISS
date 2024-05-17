<?php include_once '../includes/admin_header.php'; ?>


<?php
  if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql=mysqli_query($con, "SELECT * FROM file WHERE id='$id'");
    $row = mysqli_fetch_assoc($sql);
  }
  
?>
  <embed type="application/pdf" src="../files/<?php echo $row['document'] ; ?>" width="100%" height="700">                  

<?php include_once '../includes/admin_footer.php'; ?>
      
        