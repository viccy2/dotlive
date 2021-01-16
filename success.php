<?php
include("functions/top.php");
if (!isset($_SESSION['Username']) && !isset($_GET['id'])) {
   
   redirect("./opps");
} else {
    $data = $_GET['id'];
    $ssl  = "SELECT * FROM rent WHERE `tranref` = '$data'";
    $res  = query($ssl);

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
                                    <h1 data-animation="fadeInLeft" data-delay="0.2s">Hurray :)</h1>
                                    <p data-animation="fadeInLeft" data-delay="0.4s">Thank you for choosing DotLive as your apartment agency <br/> Kindly check your dashboard and your email for details on your new rented apartment.</p>
                                    <a href="dashboard/./" class="btn hero-btn" data-animation="fadeInLeft" data-delay="0.7s">Go to Dashboard</a>
                                </div>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
        </section>

<!--Ads Modal -->
<div id="adsModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-dialog-centered">

    <!-- Modal content-->
    <div style="background: #000000;" class="modal-content">
        <?php
        $sql = "SELECT * FROM ads WHERE `session` = 'active' ORDER BY RAND() desc";
        $res = query($sql);
        $row = mysqli_fetch_array($res);

        $_SESSION['disad'] = $row['ads_id'];
        $_SESSION['click'] = $row['click'];
        ?>
      <div class="modal-body">
        <button style="color: white;" type="button" class="close" data-dismiss="modal">&times; Close</button>
        <h2 class="modal-title"><b style="color: white;"><?php echo $row['tagline'] ?></b></h2>
        <br/>
        <?php 
        echo '
        <img class="img-fluid" src="upload/ads/'.$row['file'].'" style="width: 100%; height: 450px;" alt="Ads Image"/>';
        ?>
        <br/><br/>
        <p style="color: #f9f9ff"><?php echo $row['descrip'] ?></p>
         <p style="color: #f9f9ff">Contact <?php echo $row['tel'] ?> for details</p>
      </div>
  <?php
      if ($row['link'] != "") {
      ?> 
      <p id="adsid" hidden><?php echo $_SESSION['disad'] ?></p>  
      <p id="click" hidden><?php echo $_SESSION['click'] ?></p>   
        <a target="_blank" id="adclckdet" href="<?php echo $row['link'] ?>"><button type="button" class="btn btn-default col-lg-12">More details</button></a>
    <?php
}
?>
        
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
 $(document).ready(function() 
{

    //---------- count ads click --------//
    $("#adclckdet").click(function() 
    {
        var adsid    = $("#adsid").text();
        var click    = $("#click").text();
        
        $.ajax
    (
    {
        type        :  'post',
        url         :  'functions/init.php',
        data        :  {adsid:adsid,click:click},
        success     :  function(data)
        {
            $('#msg').html(data);
        }
    }
        )
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