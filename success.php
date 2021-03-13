<?php
include("functions/top.php");
if (!isset($_SESSION['Username']) && !isset($_GET['id']) && isset($_GET['xp'])) {
   
   redirect("./opps");
} else {
    $data = $_GET['id'];
    $ssl  = "SELECT * FROM rent WHERE `tranref` = '$data'";
    $res  = query($ssl);

    $timlocxp = date('D, M d, Y', strtotime($_GET['xp']));

    if (row_count($res) == "") {
        
        redirect("./opps");
    } else {}}
?>

<!--? slider Area Start-->
<section class="slider-area ">
    <div class="slider-active">
        <!-- Single Slider -->
        <div class="single-slider slider-height d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7 col-md-12">
                        <div class="hero__caption">
                            <h1 data-animation="fadeInLeft" data-delay="0.2s">Hurray 🎉 </h1>
                            <p data-animation="fadeInLeft" data-delay="0.4s">You just rented an apartment.<br /><br />
                                Kindly note that you are to verify this apartment and get your apartment key on or
                                before <b style="color: #ff0000; font-size: 18px;"><?php echo $timlocxp; ?>.</b>
                                Else this apartment will no longer be yours and the money paid refunded. </p>

                            <p data-animation="fadeInLeft" data-delay="0.4s">Kindly refer to our renting policy as
                                regards this</p>
                            <a href="dashboard/./" class="btn hero-btn" data-animation="fadeInLeft" data-delay="0.7s">Go
                                to Dashboard</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



</div>
</div>
</div>


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
<script>
$(document).ready(function() {

    //---------- count ads click --------//
    $("#adclckdet").click(function() {
        var adsid = $("#adsid").text();
        var click = $("#click").text();

        $.ajax({
            type: 'post',
            url: 'functions/init.php',
            data: {
                adsid: adsid,
                click: click
            },
            success: function(data) {
                $('#msg').html(data);
            }
        })
    })
})
</script>
<?php
    if (isset($_SESSION['Username'])) {
     $sql = "SELECT * FROM ads WHERE `session` = 'active' ORDER BY RAND() desc";
     $res = query($sql);
     if (row_count($res) <= 0) {
            
        } else {
      ?>
<script>
$("#adsModal").modal();
</script>
<?php
}
}
?>
</body>

</html>