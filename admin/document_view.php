<?php include_once '../includes/admin_header.php'; ?>


<?php
  if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql=mysqli_query($con, "SELECT * FROM file WHERE id='$id'");
    $row = mysqli_fetch_assoc($sql);
    $doc = $row['document'];
  }
  
?> 
  <object data="files/<?php echo $doc ?>" width="100%" height="700" type="application/word"></object>

<?php include_once '../includes/admin_footer.php'; ?>