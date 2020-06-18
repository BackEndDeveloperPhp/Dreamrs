
<?php require_once "config/database.php"; ?>
<?php require_once "objects/about.php"; ?>

<?php 
   $database = new Database(); 
   $db = $database->getConnection();
   $about = new About($db); 
   $rows = $about->read();
   // print_r($row);
?>





   <!--::team part end::-->
   <section class="about_part section-padding">
      <div class="container">
         <div class="row">
            <div class="section_tittle">
               <h2><span>about</span> us</h2>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-6 col-md-6">
               <div class="about_img">
                  <img src="img/about.png" alt="">
               </div>
            </div>
            
            <div class="offset-lg-1 col-lg-5 col-sm-8 col-md-6">
               <div class="about_text">
                 <h2><?= $rows['title']; ?></h2>
                  <p><?= $rows['description']; ?></p>
                  <a href="#" class="btn_1">learn More</a>
                  <div class="about_part_counter">
                     <div class="single_counter">
                        <span class="counter"><?= $rows['project']; ?></span>
                        <p>project</p>
                     </div>
                     <div class="single_counter">
                        <span class="counter"><?= $rows['client']; ?></span>
                        <p>clients</p>
                     </div>
                     <div class="single_counter">
                        <span class="counter"><?= $rows['member']; ?></span>
                        <p>member</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--::team part end::-->