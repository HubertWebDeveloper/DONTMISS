<?php include_once 'includes/header.php'; ?>
<style>
   .post-filter{
   display:flex;
   justify-content: center;
   text-align:center;
   column-gap: 1.5rem;
   margin-top:2rem !important;
}
.filter-item{
   font-size:0.9rem;
   font-weight:500;
   cursor:pointer;
}
.active-filter{
   background:orange;
   color:white;
   padding:4px 10px;
   border-radius:4px;
}
.post{
   display:grid;
   grid-template-columns: repeat(auto-fit, minmax(280px, auto));
   justify-content:center;
   gap: 1.5rem; 
}
.post-box{
   background: #fff;
   box-shadow: 0 4px 14px hsl(355deg 25% 15% / 10%);
   padding:15px;
   border-radius:0.5rem;
}
.post-img{
   width:100%;
   height:200px;
   object-fit:cover;
   object-position:center;
   border-radius:0.5rem;
}
.category{
   font-size:0.9rem;
   font-weight:500;
   text-transform:uppercase;
   color:orange;
}
.post-title{
   font-size:1.3rem;
   font-weight:600;
   color: #5a5a5a;
   display: -webkit-box;
   -webkit-line-clamp:2;
   -webkit-box-orient:vertical;
   overflow: hidden;

}
.post-date{
   display:flex;
   font-size:0.875rem;
   text-transform:uppercase;
   font-weight:400;
   margin-top:4px;
   color:#1E90FF;
}
.post-decription{
   font-size:0.9rem;
   line-height:1.5rem;
   margin: 5px 0 10px;
   display: -webkit-box;
   -webkit-line-clamp:10;
   -webkit-box-orient:vertical;
   overflow: hidden;
}
.profile{
   display:flex;
   align-items:center;
   gap:10px;
}
.profile-img{
   width:35px;
   height:35px;
   border-radius:50%;
   object-fit:cover;
   object-position:center;
   border: 2px solid orange;
}
</style>
<main>
   <div class="mytitle" style="text-align:center">
            <p style="font-size:30px;font-weight:600;font-family:arigerian">Our Latest News</p>
            <hr style="margin-top:20px;margin-bottom:30px;">
   </div>
   <!-- ---------- brands ------ -->
   <div class="banners">
            <div class="container">
               <div class="wrapper">
                  <div class="column">
                     <section class="post container">
                        <?php
                           include_once 'includes/connection.php';
                           $select = mysqli_query($con, "SELECT * FROM blog LIMIT 3");
                           $count = mysqli_num_rows($select);
                           if($count > 0){
                              while($row = mysqli_fetch_assoc($select)){
                                 ?>
                                 <div class="post-box religion" style="box-shadow: 0px 0px 10px 10px rgba(0, 0, 0, 0.5);margin-bottom:50px">
                                    <img src="images/<?php echo $row['image'];?>" class="post-img">
                                    <a href="post-page.php" class="post-title" style="color:#5a5a5a"><?php echo $row['title'];?></a>
                                    <span class="post-date"><?php echo $row['date'];?>.</span>
                                    <p class="post-decription"><?php echo $row['content'];?></p>
                                    <div class="profile">
                                       <img src="images/myLogo.png" class="profile-img">
                                       <span class="profile-name">Don't Miss.</span>
                                    </div>
                                 </div>
                                 <?php
                              }
                           }
                        ?>
                     </section>
                  </div>
               </div>
            </div>
   </div>
</main>

<?php include_once 'includes/pro_footer.php'; ?>