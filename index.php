<?php
include("functions/top.php");
?>

    <main>
        <!--? slider Area Start-->
        <section class="slider-area ">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-7 col-md-12">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInLeft" data-delay="0.2s">No More<br> Hostel Issues!</h1>
                                    <p data-animation="fadeInLeft" data-delay="0.4s">Get affordable, cheap and beautiful hostels for living, meetups and bootcamps from the comfort of your homes.</p>
                                    <a href="./apartments" class="btn hero-btn" data-animation="fadeInLeft" data-delay="0.7s">Browse Apartments</a>
                                </div>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
        </section>
        <!-- ? services-area -->
        <div class="services-area">
            <div class="container">
                <div class="row justify-content-sm-center">
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="single-services mb-30">
                            <div class="features-icon">
                                <img style="width: 50px; height: 50px;" src="assets/img/icon/3.png" alt="">
                            </div>
                            <div class="features-caption">
                                <h3>20+ Apartments</h3>
                                <p>Over 20 apartments apartments now registered</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="single-services mb-30">
                            <div class="features-icon">
                                <img style="width: 50px; height: 50px;" src="assets/img/icon/1.png" alt="">
                            </div>
                            <div class="features-caption">
                                <h3>Money Back Guarantee</h3>
                                <p>Don`t love an apartment? We`ll refund back your fee.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="single-services mb-30">
                            <div class="features-icon">
                                <img style="width: 70px; height: 70px;" src="assets/img/icon/2.png" alt="">
                            </div>
                            <div class="features-caption">
                                <h3>Easy on Agents</h3>
                                <p>Nice agents dashboard to upload apartments</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Courses area start -->
        <div class="courses-area section-padding40 fix">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h2 style="color: #ff0000">Available Apartment</h2>
                        </div>
                    </div>
                </div>
                <div class="courses-actives">
                    <!-- Single -->
     <?php
     $sql = "SELECT * FROM apartment WHERE `status` = 'available' ORDER BY RAND() desc LIMIT 8";
     $res = query($sql);

     while($row = mysqli_fetch_array($res)) {

        $uploader = $row['uploader'];
     ?>               

                    <div class="properties pb-20">
                        <div class="properties__card">
                            <div class="properties__img overlay1">
                                <a href="#"><img style="width: 100%; height: 315px;" src="upload/apartment/<?php echo $row['pix'] ?>" alt="DotLive"></a>
                            </div>
                            <div class="properties__caption">
                                <p><?php echo $row['apt'] ?></p>
                                <h3><a href="#"><?php echo $row['apartment'] ?></a></h3>
                                <p>Power Source.: <?php echo $row['power'] ?><br>
                                   Water Type.: <?php echo $row['water'] ?> <br>
                                   Toilet Type.: <?php echo $row['toilet'] ?><br>
                                   Apartment Campus.: <?php echo $row['state'] ?><br>
                                   Apartment Location.: <?php echo $row['location'] ?>

                                </p>
                                <div class="properties__footer d-flex justify-content-between align-items-center">
                                    <div class="restaurant-name">
                                        <?php 
                                        $sql2 = "SELECT * FROM user WHERE `email` = '$uploader'";
                                        $res2 = query($sql2);

                                         $row2 = mysqli_fetch_array($res2);

                                         if ($row2['category'] == "agent") {
                                           $name = $row2['agtbiz'];

                                         } else {

                                            $name = $row2['name'];
                                         }

                                         if ($row2['nin'] == "verified" || $row2['agtbiz'] == "Dot Housing") {
                                        ?>
                                       <div class="rating">
                                            <i style="color: red;" class="fas fa-check-circle"> Verified</i>
                                        </div>
                                        <?php
                                    } else {
                                    ?>
                                   <div class="rating">
                                            <i class="fas fa-star-half">Unverified</i>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                        <p><?php echo $name ?></p>
                                    </div>
                                    <div class="price">
                                        <span class="text-danger">₦<?php echo number_format($row['price']) ?></span>
                                    </div>
                                </div>
                                <a href="./details?id=<?php echo $row['apt'] ?>" class="border-btn border-btn2">View More Details</a>
                            </div>

                        </div>
                    </div>
                    <?php
                }
                ?>

                    
                    
                    <!-- Single -->
                </div>
            </div>
        </div>
        <!-- Courses area End -->


        <!--? About Area-3 Start -->
        <section class="about-area3 fix">
            <div class="support-wrapper align-items-center">
                <div class="right-content3">
                    <!-- img -->
                    <div class="right-img">
                        <img src="assets/img/gallery/about3.png" alt="">
                    </div>
                </div>
                <div class="left-content3">
                    <!-- section tittle -->
                    <div class="section-tittle section-tittle2 mb-20">
                        <div class="front-text">
                            <h2 style="color: #ff0000">100% Money Back Gaurantee</h2>
                        </div>
                    </div>
                    <div class="single-features">
                      
                        <div class="features-caption">
                            <p>Flexible Payment Gateway</p>
                        </div>
                    </div>
                    <div class="single-features">
                        
                        <div class="features-caption">
                            <p>Secured and Verified</p>
                        </div>
                    </div>
                    <div class="single-features">
                       
                        <div class="features-caption">
                            <p>Get a room from your space</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->
        <!--? Team -->
        <section class="team-area section-padding40 fix">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h2>Team DotLive</h2>
                        </div>
                    </div>
                </div>
                <div class="team-active">
                    <div class="single-cat text-center">
                        <div class="cat-icon">
                            <img src="assets/img/gallery/Great.png" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="#">Abolade Greatness</a></h5>
                            <p>Team Lead</p>
                        </div>
                    </div>
                    <div class="single-cat text-center">
                        <div class="cat-icon">
                            <img src="assets/img/gallery/frank.png" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="#">Akintomide Franklin</a></h5>
                            <p>Human Relations</p>
                        </div>
                    </div>
                    <div class="single-cat text-center">
                        <div class="cat-icon">
                            <img src="assets/img/gallery/sam.png" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="#">Aholu Samuel</a></h5>
                            <p>Database Engineer</p>
                        </div>
                    </div>
                    <div class="single-cat text-center">
                        <div class="cat-icon">
                            <img src="assets/img/gallery/deji.png" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="#">Ayodeji Omojola</a></h5>
                            <p>Web Developer</p>
                        </div>
                    </div>
                    <div class="single-cat text-center">
                        <div class="cat-icon">
                            <img src="assets/img/gallery/vic.png" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="#">Oluyitan Victor</a></h5>
                            <p>Social Media Analyst</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services End -->
        <!--? About Area-2 Start -->
        <section class="about-area2 fix pb-padding">
            <div class="support-wrapper align-items-center">
                <div class="right-content2">
                    <!-- img -->
                    <div class="right-img">
                        <img src="assets/img/gallery/nn.png" alt="">
                    </div>
                </div>
                <div class="left-content2">
                    <!-- section tittle -->
                    <div class="section-tittle section-tittle2 mb-20">
                        <div class="front-text">
                            <h2 class="">No more stress! <br/> We`ve got you covered</h2>
                            <p>The automated process on our website takes you through all process in ensuring that you get the perfect apartment for your temporary stay.</p>
                            <a href="./signup" class="btn">Create a free account</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->
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
<!-- Progress -->
<script src="./assets/js/jquery.barfiller.js"></script>

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

<script>!function(e,t,a){var c=e.head||e.getElementsByTagName("head")[0],n=e.createElement("script");n.async=!0,n.defer=!0, n.type="text/javascript",n.src=t+"/static/js/chat_widget.js?config="+JSON.stringify(a),c.appendChild(n)}(document,"https://app.engati.com",{bot_key:"92512df1eca84de8",welcome_msg:true,branding_key:"default",server:"https://app.engati.com",e:"p" });</script>
       <script>
  if ('serviceWorker' in navigator) {
    console.log("Will the service worker register?");
    navigator.serviceWorker.register('service-worker.js')
      .then(function(reg){
        console.log("Yes, it did.");
      }).catch(function(err) {
        console.log("No it didn't. This happened: ", err)
      });
  }
</script>
<script src="service-worker.js">
        // Service worker for Progressive Web App
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('service-worker.js', {
            scope: '.' // THIS IS REQUIRED FOR RUNNING A PROGRESSIVE WEB APP FROM A NON_ROOT PATH
        }).then(function(registration) {
            // Registration was successful
            console.log('ServiceWorker registration successful with scope: ', registration.scope);
        }, function(err) {
            // registration failed :(
            console.log('ServiceWorker registration failed: ', err);
        });
    }
</script>

</body>
</html>