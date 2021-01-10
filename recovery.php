<?php
include("functions/init.php");
if (isset($_SESSION['Username'])) {
	unset($_SESSION['Username']);
}
if (!isset($_GET['id'])) {
   
   header("location: ./404");
} else {

$data = $_GET['id'];
}

$sql = "SELECT * FROM user WHERE `activator`= '$data'";
$res = query($sql);
if (row_count($res) == "") {
    
    header("location: ./404");
} else {

  $row = mysqli_fetch_array($res);

  $_SESSION['recc'] = $row['email'];


include("includes/header.php");
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
                                <h1 data-animation="bounceIn" data-delay="0.2s">Reset Password</h1>
                                <!-- breadcrumb Start-->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="./">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#">reset password</a></li> 
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
    <!--?  Contact Area start  -->
    <section class="contact-section">
        <div class="container">
           
            <div class="row">
                
                <div id="space" class="col-lg-12">
                    
                    <form class="form-contact contact_form" method="post" id="contactForm" novalidate="novalidate">
                        <div class="row">

                            <div class="col-sm-6">
                                <div class="form-group">
                                   <label><b style="color: #ff0000; font-size: 18px;">Create New Password.:</b></label>
                                    <input class="form-control valid" name="pword" id="pword" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Create new password'" placeholder="Create new password">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                     <label><b style="color: #ff0000; font-size: 18px;">Confirm Password.:</b></label>
                                    <input class="form-control valid" name="cpword" id="cpword" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm your password'" placeholder="Confirm your password">
                                </div>
                            </div>
                          
                           <div class="form-group mt-3 pl-5 col-lg-4">
                           <button type="button" id="update" onclick="updatePword();" class="button button-contactForm boxed-btn">update</button></a>
                        </div>
                          
                        </div>
                        
                    </form>
                </div>
                
            </div>
        </div>
    </section>
    <!-- Contact Area End -->
</main>

<!-- Modal -->
    <div class="modal fade" id="exampleModalCenter">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div style="background: #f9f9ff; color: #ff0000;" class="modal-content">
                <div class="modal-body">
                    <div id="msg" class="text-center"></div>
                </div>
            </div>
        </div>
    </div> 
 <?php include("includes/footer.php"); ?>

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

<!-- Jquery Plugins, main Jquery -->	
<script src="./assets/js/plugins.js"></script>
<script src="./assets/js/main.js"></script>
<script src="ajax.js"></script>
</body>
</html>

<?php
}
?>