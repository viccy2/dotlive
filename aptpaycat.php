<?php
include("functions/top.php");
if(!isset($_SESSION['apt']) && !isset($_SESSION['prc']) && !isset($_SESSION['uplo'])) {

redirect("./apartments");

} else {

$suite   = $_SESSION['apt'];
$all     = $_SESSION['prc']; 
$upl     = $_SESSION['uplo'];
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
                                <h1 data-animation="bounceIn" data-delay="0.2s">Payment Category</h1>
                                <!-- breadcrumb Start-->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="./">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#">Payment Category</a></li>
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
                    <div class="col-12">
                        <h2 class="contact-title">Select a Payment Category</h2>
                    </div>
                    <div class="row">
                        <div class="form-group mt-3 pl-5 col-lg-6">
                            <button type="button" data-toggle="modal" data-backdrop="static"
                                data-target="#exampModalCenter" class="button button-contactForm boxed-btn">Pay From
                                Your Wallet</button>
                        </div>

                        <form action="./aptpay" class="form-contact contact_form col-lg-6" method="post"
                            novalidate="novalidate">

                            <input type="text" name="drt" value="<?php echo $suite ?>" hidden>
                            <input type="text" name="all" value="<?php echo $all ?>" hidden>
                            <input type="text" name="upl" value="<?php echo $upl ?>" hidden>
                            <button type="submit" class="button button-contactForm boxed-btn">Use Other Payment
                                Method</button>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Contact Area End -->
</main>

<!---- Input Password modal ---->
<div class="modal fade" id="exampModalCenter">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div style="background: #f9f9ff; color: #ff0000;" class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <form class="form-contact contact_form" method="post" id="contactForm" novalidate="novalidate">
                    <input type="text" id="drt" value="<?php echo $suite ?>" hidden>
                    <input type="text" id="all" value="<?php echo $all ?>" hidden>
                    <input type="text" id="upl" value="<?php echo $upl ?>" hidden>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label><b style="color: #ff0000; font-size: 18px;">Kindly input your password to confirm
                                    this transaction.:</b></label><br><br><br>
                            <input class="form-control valid" name="password" id="trpword" type="password"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your Password'"
                                placeholder="Enter your Password" required>
                        </div>
                        <div id="msg"></div><br>
                        <button type="button" id="walpay" onclick="allPayme()"
                            class="button button-contactForm boxed-btn">Confirm Payment</button>

                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel Payment</button>
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