<?php
include("functions/top.php");
if (!isset($_GET['id'])) {
   
   redirect("./apartment");
} else {
   $data = $_GET['id'];

   $sql = "SELECT * FROM apartment WHERE `apt` = '$data'";
   $res = query($sql);
   $row = mysqli_fetch_array($res);

   $uploader = $row['uploader'];
}
?>

<main>
   <!--? slider Area Start-->
   <section class="slider-area slider-area2">
     <div class="slider-active">
       <!-- Single Slider -->
       <div class="single-slider slider-height2">
         <div class="container">
           <div class="row">
             <div class="col-xl-8 col-lg-11 col-md-12">
               <div class="hero__caption hero__caption2">
                 <h1 data-animation="bounceIn" data-delay="0.2s"><?php echo $data ?></h1>
                 <!-- breadcrumb Start-->
                 <nav aria-label="breadcrumb">
                   <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="./">Home</a></li>
                     <li class="breadcrumb-item"><a href="#">Apartment</a></li> 
                  </ol>
               </nav>
               <!-- breadcrumb End -->
            </div>
         </div>
      </div>
   </div>          
</div>
</div>
</section>
<!--? Blog Area Start -->
<section class="blog_area single-post-area section-padding">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 posts-list">
            <div class="single-post">
               <div class="feature-img">
                  <img style="width: 100%; height: 700px;" class="img-fluid" src="upload/apartment/<?php echo $row['pix'] ?>" alt="DotLive">
               </div>
               <div class="blog_details">
                  <h2 style="color: #2d2d2d;"><?php echo $row['apartment'] ?>
                  </h2>
                  <ul class="blog-info-link mt-3 mb-4">
                     <li style=""><a href="#"><i class="fa fa-user"></i> <?php echo $row['uploader'] ?></a></li>
                     <?php
                      $sql2 = "SELECT * FROM user WHERE `email` = '$uploader'";
                      $res2 = query($sql2);

                       $row2 = mysqli_fetch_array($res2);
                     if ($row2['nin'] == "verified" || $row2['agtbiz'] == "Dot Housing") {
                         ?>
                     <li><a href="#"> <i style="color: red;" class="fas fa-check-circle"> Verified</i></a></li>
                     <?php
                  } else {
                   ?>
                 <li><a href="#"><i class="fas fa-star-half">Unverified</i></a></li>
                  <?php
                  }
                   ?>
                  </ul>
                  <p style="font-size: 22px;" class="excert">
                     Power Source.: <?php echo $row['power'] ?><br><br>
                                   Water Type.: <?php echo $row['water'] ?> <br><br>
                                   Toilet Type.: <?php echo $row['toilet'] ?> <br><br>
                                   Apartment Campus.: <?php echo $row['state'] ?> <br><br>
                                   Apartment Location.: <?php echo $row['location'] ?><br><br>
                                   <span style="color: #ff0000">Price.: NGN <?php echo number_format($row['price']) ?>/yr</span>
                  </p>
                  <p style="font-size: 22px;">
                     Description.: <?php echo $row['description'] ?>
                  </p>
                  
               </div>
            </div>
            <?php
            if (isset($_SESSION['Username'])) {
            ?>
           <div class="form-group">
               <a href="./aptpaycat?drt=<?php echo md5(rand()); ?>&id=<?php echo $row['price'] ?>&mla=<?php echo $_SESSION['Username'] ?>"><button type="submit" class="button button-contactForm btn_1 boxed-btn">Get Apartment</button></a>
            </div> 
      <?php
    } else {
?>
  <div class="form-group">
               <a href="./signup"><button type="submit" class="button button-contactForm btn_1 boxed-btn">Get Apartment</button></a>
            </div> 
      <?php
    }
    ?>
      
      
   </div>
  
</div>
</div>
</section>
<!-- Blog Area End -->
</main>
 <?php include("includes/footer.php"); ?>

<!-- JS here -->

<script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="./assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="./assets/js/owl.carousel.min.js"></script>
<script src="./assets/js/slick.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="./assets/js/wow.min.js"></script>
<script src="./assets/js/animated.headline.js"></script>
<script src="./assets/js/jquery.magnific-popup.js"></script>

<!-- Date Picker -->
<script src="./assets/js/gijgo.min.js"></script>
<!-- Nice-select, sticky -->
<script src="./assets/js/jquery.nice-select.min.js"></script>
<script src="./assets/js/jquery.sticky.js"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="./assets/js/jquery.counterup.min.js"></script>
<script src="./assets/js/waypoints.min.js"></script>
<script src="./assets/js/jquery.countdown.min.js"></script>
<script src="./assets/js/hover-direction-snake.min.js"></script>

<!-- contact js -->
<script src="./assets/js/contact.js"></script>
<script src="./assets/js/jquery.form.js"></script>
<script src="./assets/js/jquery.validate.min.js"></script>
<script src="./assets/js/mail-script.js"></script>
<script src="./assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->	
<script src="./assets/js/plugins.js"></script>
<script src="./assets/js/main.js"></script>

</body>
</html>