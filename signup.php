<?php
include("functions/top.php");
if (isset($_SESSION['Username'])) {
    unset($_SESSION['Username']);
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
                                <h1 data-animation="bounceIn" data-delay="0.2s">Let`s Get Started</h1>
                                <!-- breadcrumb Start-->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="./">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#">Sign up</a></li> 
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
                    <h2 class="contact-title">Select a Category</h2>
                </div>
                    <form class="form-contact contact_form" method="post" id="contactForm" novalidate="novalidate">
                        <div class="row">
                          
                           <div class="form-group mt-3 pl-5 col-lg-4">
                            <button type="button" id="userr" class="button button-contactForm boxed-btn">User</button>
                        </div>

                         <div class="form-group mt-3 pl-5 col-lg-4">
                            <button type="button" id="land" class="button button-contactForm boxed-btn">Landlord</button>
                        </div>

                         <div class="form-group mt-3 pl-5 col-lg-4">
                            <button type="button" id="agt" class="button button-contactForm boxed-btn">Agent</button>
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
 <script>
    //user signup function
    document.getElementById('userr').addEventListener('click', userView);

    function userView()
    {
       
      var xhr = new  XMLHttpRequest();
      document.getElementById('space').innerHTML = "<span style='color: #ff0000'>Loading.. Please wait!</span>";
      xhr.open('GET', './user', true);

      xhr.onload = function ()
      {
        if (xhr.status == 200) {
          //document.write(this.responseText);
          document.getElementById('space').innerHTML= xhr.responseText;
        } else {

          document.getElementById('space').innerHTML = "<span style='color: #ff0000'>Error loading document. <br/> Kindly try again later!</span>";
        }
      }

      xhr.send();
    }


    //landlord signup
    document.getElementById('land').addEventListener('click', landView);

    function landView()
    {
       
      var xhr = new  XMLHttpRequest();
      document.getElementById('space').innerHTML = "<span style='color: #ff0000'>Loading.. Please wait!</span>";
      xhr.open('GET', './land', true);

      xhr.onload = function ()
      {
        if (xhr.status == 200) {
          //document.write(this.responseText);
          document.getElementById('space').innerHTML= xhr.responseText;
        } else {

          document.getElementById('space').innerHTML = "<span style='color: #ff0000'>Error loading document. <br/> Kindly try again later!</span>";
        }
      }

      xhr.send();
    }


    //agent signup
    document.getElementById('agt').addEventListener('click', agtView);

    function agtView()
    {
       
      var xhr = new  XMLHttpRequest();
      document.getElementById('space').innerHTML = "<span style='color: #ff0000'>Loading.. Please wait!</span>";
      xhr.open('GET', './agt', true);

      xhr.onload = function ()
      {
        if (xhr.status == 200) {
          //document.write(this.responseText);
          document.getElementById('space').innerHTML= xhr.responseText;
        } else {

          document.getElementById('space').innerHTML = "<span style='color: #ff0000'>Error loading document. <br/> Kindly try again later!</span>";
        }
      }

      xhr.send();
    }

  </script>
</body>
</html>