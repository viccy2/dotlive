<?php
include("functions/top.php");
if (!isset($_SESSION['upl']) && !isset($_SESSION['all']) && !isset($_SESSION['drt'])) {
	
	redirect("./payerror");
}

if (!isset($_SESSION['Username'])) {
	
	redirect("./payerror");
}

//get constants
    $upl = $_SESSION['upl'];
    $all = $_SESSION['all'];
    $drt = $_SESSION['drt'];
?>


<!---- Input Password modal ---->
    <div class="modal fade" id="exampModalCenter">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div style="background: #f9f9ff; color: #ff0000;" class="modal-content">
                <div class="modal-body">
                    
                <form class="form-contact contact_form" method="post" id="contactForm" novalidate="novalidate">
                     <input type="text" id="drt" value="<?php echo $drt ?>" hidden>
                          <input type="text" id="all" value="<?php echo $all ?>" hidden>
                           <input type="text" id="upl" value="<?php echo $upl ?>" hidden>
                   <div class="col-sm-12">
                    <div class="form-group">
                        <label><b style="color: #ff0000; font-size: 18px;">Kindly Input your password to confirm this transaction.:</b></label><br><br><br>
                        <input class="form-control valid" name="password" id="trpword" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your Password'" placeholder="Enter your Password" required>
                    </div>
                    <div id="msg"></div><br>
                    <button type="button" id="walpay" onclick="allonlPayme()" class="button button-contactForm boxed-btn">Confirm Payment</button>
                </div>
            </form>
            
                </div>
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
<script src="ajax.js"></script>
<script>
	$("#exampModalCenter").modal({backdrop: "static"});
</script>
</body>
</html>
<?php
//unset constants session
unset($_SESSION['upl']);
unset($_SESSION['all']);
unset($_SESSION['drt']);
?>