<?php
include("functions/top.php");
if (!isset($_GET['apr']) && !isset($_GET['loc']) && !isset($_GET['prc']) && !isset($_GET['toi']) && !isset($_GET['wat'])) {
   
   redirect("./apartments");
} else {

    $apr  = $_GET['apr'];
    $loc  = $_GET['loc'];
    $prc  = $_GET['prc'];
    $toi  = $_GET['toi'];
    $wat  = $_GET['wat'];

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
                                    <h1 data-animation="bounceIn" data-delay="0.2s">Available Apartments</h1>
                                    <!-- breadcrumb Start-->
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="./">Home</a></li>
                                            <li class="breadcrumb-item"><a href="#">Apartments</a></li> 
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
        <!-- Courses area start -->
        <div class="courses-area section-padding40 fix">
            <div class="container">
               
                    <form class="form-contact contact_form" method="post" id="contactForm" novalidate="novalidate">
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="form-group">
                                 <label><b style="color: #ff0000; font-size: 18px;">Price Range.:</b></label><br/>
                                    <input id="price" type="range" id="a" name="a" step="1500" min="5000" max="300000" value="<?php echo $prc ?>" oninput="x.value=parseInt(a.value)">
                                    <br>
                                     NGN <output id="price" name="x" for="a"><?php echo number_format($prc) ?></output>              
                                                       
                               </div>
                            </div>
                            <div class="col-sm-4">
                                 <label><b style="color: #ff0000; font-size: 18px;">Campus.:</b></label>
                                <div class="form-group">
                                <select id="loc" name="loc" class="form-control" required>
                                        <option id="loc" name="loc"><?php echo $loc ?></option>
                                         <option id="loc" name="loc">Abubakar Tafawa Balewa University, Bauchi</option>
                                        <option id="loc" name="loc">Ahmadu Bello University, Zaria</option>
                                        <option id="loc" name="loc">Bayero University, Kano</option>
                                        <option id="loc" name="loc">Federal University Gashua, Yobe</option>
                                        <option id="loc" name="loc">Federal University of Petroleum Resources, Effurun</option>
                                        <option id="loc" name="loc">Federal University of Technology, Akure</option>
                                        <option id="loc" name="loc">Federal University of Technology, Minna</option>
                                        <option id="loc" name="loc">Federal University of Technology, Owerri</option>
                                        <option id="loc" name="loc">Federal University, Dutse, Jigawa State</option>
                                        <option id="loc" name="loc">Federal University, Dutsin-Ma, Katsina</option>
                                        <option id="loc" name="loc">Federal University, Kashere, Gombe State</option>
                                        <option id="loc" name="loc">Federal University, Lafia, Nasarawa State</option>
                                        <option id="loc" name="loc">Federal University, Lokoja, Kogi State</option>
                                        <option id="loc" name="loc">Alex Ekwueme University, Ndufu-Alike, Ebonyi State</option>
                                        <option id="loc" name="loc">Federal University, Otuoke, Bayelsa</option>
                                        <option id="loc" name="loc">Federal University, Oye-Ekiti, Ekiti State</option>
                                        <option id="loc" name="loc">Federal University, Wukari, Taraba State</option>
                                        <option id="loc" name="loc">Federal University, Birnin Kebbi</option>
                                        <option id="loc" name="loc">Federal University, Gusau Zamfara</option>
                                        <option id="loc" name="loc">Michael Okpara University of Agricultural Umudike</option>
                                        <option id="loc" name="loc">Modibbo Adama University of Technology, Yola</option>
                                        <option id="loc" name="loc">National Open University of Nigeria, Lagos</option>
                                        <option id="loc" name="loc">Nigeria Police Academy Wudil</option>
                                        <option id="loc" name="loc">Nigerian Defence Academy Kaduna</option>
                                        <option id="loc" name="loc">Nnamdi Azikiwe University, Awka</option>
                                        <option id="loc" name="loc">Obafemi Awolowo University,Ile-Ife</option>
                                        <option id="loc" name="loc">University of Abuja, Gwagwalada</option>
                                        <option id="loc" name="loc">Federal University of Agriculture, Abeokuta</option>
                                        <option id="loc" name="loc">University of Agriculture, Makurdi</option>
                                        <option id="loc" name="loc">University of Benin</option>
                                        <option id="loc" name="loc">University of Calabar</option>
                                        <option id="loc" name="loc">University of Ibadan</option>
                                        <option id="loc" name="loc">University of Ilorin</option>
                                        <option id="loc" name="loc">University of Jos</option>
                                        <option id="loc" name="loc">University of Lagos</option>
                                        <option id="loc" name="loc">University of Maiduguri</option>
                                        <option id="loc" name="loc">University of Nigeria, Nsukka</option>
                                        <option id="loc" name="loc">University of Port-Harcourt</option>
                                        <option id="loc" name="loc">University of Uyo</option>
                                        <option id="loc" name="loc">Usumanu Danfodiyo University</option>
                                        <option id="loc" name="loc">Nigerian Maritime University Okerenkoko, Delta State</option>
                                        <option id="loc" name="loc">Air Force Institute of Technology, Kaduna</option>
                                        <option id="loc" name="loc">Nigerian Army University Biu</option>
                                        <option id="loc" name="loc">Abia State University, Uturu</option>
                                        <option id="loc" name="loc">Adamawa State University Mubi</option>
                                        <option id="loc" name="loc">Adekunle Ajasin University, Akungba</option>
                                        <option id="loc" name="loc">Akwa Ibom State University, Ikot Akpaden</option>
                                        <option id="loc" name="loc">Ambrose Alli University, Ekpoma</option>
                                        <option id="loc" name="loc">Chukwuemeka Odumegwu Ojukwu University, Uli</option>
                                        <option id="loc" name="loc">University of Jos</option>
                                        <option id="loc" name="loc">University of Lagos</option>
                                        <option id="loc" name="loc">University of Maiduguri</option>
                                        <option id="loc" name="loc">University of Nigeria, Nsukka</option>
                                        <option id="loc" name="loc">Bauchi State University, Gadau</option>
                                        <option id="loc" name="loc">Benue State University, Makurdi</option>
                                        <option id="loc" name="loc">Yobe State University, Damaturu</option>
                                        <option id="loc" name="loc">Cross River State University of Technology, Calabar</option>
                                        <option id="loc" name="loc">Delta State University Abraka</option>
                                        <option id="loc" name="loc">Ebonyi State University, Abakalik</option>
                                        <option id="loc" name="loc">Ekiti State University</option>
                                        <option id="loc" name="loc">Enugu State University of Science and Technology, Enugu</option>
                                        <option id="loc" name="loc">Ibrahim Badamasi Babangida University, Lapai</option>
                                        <option id="loc" name="loc">Ignatius Ajuru University of Education,Rumuolumeni</option>
                                        <option id="loc" name="loc">Imo State University, Owerri</option>
                                        <option id="loc" name="loc">Sule Lamido University, Kafin Hausa, Jigawa</option>
                                        <option id="loc" name="loc">Kaduna State University, Kaduna</option>
                                        <option id="loc" name="loc">Kano University of Science &amp; Technology, Wudil</option>
                                        <option id="loc" name="loc">Kebbi State University of Science and Technology, Aliero</option>
                                        <option id="loc" name="loc">Kwara State University, Ilorin</option>
                                        <option id="loc" name="loc">Kogi State University Anyigba</option>
                                        <option id="loc" name="loc">Ladoke Akintola University of Technology, Ogbomoso</option>
                                        <option id="loc" name="loc">Ondo State University of Science and Technology Okitipupa</option>
                                        <option id="loc" name="loc">River State University</option>
                                        <option id="loc" name="loc">Olabisi Onabanjo University, Ago Iwoye</option>
                                        <option id="loc" name="loc">Lagos State University, Ojo</option>
                                        <option id="loc" name="loc">Niger Delta University Yenagoa</option>
                                        <option id="loc" name="loc">Nasarawa State University Keffi</option>
                                        <option id="loc" name="loc">Plateau State University Bokkos</option>
                                        <option id="loc" name="loc">Tai Solarin University of Education Ijebu Ode</option>
                                        <option id="loc" name="loc">Umar Musa Yar&#8217; Adua University Katsina</option>
                                        <option id="loc" name="loc">Osun State University Osogbo</option>
                                        <option id="loc" name="loc">Taraba State University, Jalingo</option>
                                        <option id="loc" name="loc">Sokoto State University</option>
                                        <option id="loc" name="loc">Yusuf Maitama Sule University Kano</option>
                                        <option id="loc" name="loc">Oyo State Technical University Ibadan</option>
                                        <option id="loc" name="loc">Ondo State University of Medical Sciences</option>
                                        <option id="loc" name="loc">Edo University Iyamo</option>
                                        <option id="loc" name="loc">Eastern Palm University Ogboko, Imo State</option>
                                        <option id="loc" name="loc">University of Africa Toru Orua, Bayelsa State</option>
                                        <option id="loc" name="loc">Bornu State University, Maiduguri</option>
                                        <option id="loc" name="loc">Moshood Abiola University of Science and Technology Abeokuta</option>
                                        <option id="loc" name="loc">Gombe State University of Science and Technology</option>
                                        <option id="loc" name="loc">Zamfara State University</option>
                                        <option id="loc" name="loc">Bayelsa Medical University</option>
                        </select>                       
                                                       
                                </div>
                            </div>
                            <div class="col-sm-2">
                                 <label><b style="color: #ff0000; font-size: 18px;">Apartment Type.:</b></label>
                                <div class="form-group">
                                 <select name="aprmt" id="aprmt" class="form-control" required>
                                    <option name="aprmt" id="aprmt"><?php echo $apr ?></option>
                                     <option id="apt">Self-Contain</option>
                                        <option id="apt">Room</option>
                                        <option id="apt">Family House</option>
                                        <option id="apt">Room & Parlour</option>
                                        <option id="apt">Boys Quarter</option>
                        </select>                        
                                                       
                                </div>
                            </div>


                            <div class="col-sm-2">
                                 <label><b style="color: #ff0000; font-size: 18px;">Water Type.:</b></label>
                                <div class="form-group">
                                 <select name="water" id="water" class="form-control" required>
                                    <option name="water" id="water"><?php echo $wat ?></option>
                                    <option id="water">Borehole</option>
                                        <option id="water">Well</option>
                                        <option id="water">Public Water</option>
                                        <option id="water">None</option>
                        </select>                        
                                                       
                                </div>
                            </div>


                             <div class="col-sm-2">
                                 <label><b style="color: #ff0000; font-size: 18px;">Toilet Type.:</b></label>
                                <div class="form-group">
                                <select id="toi" class="form-control" required>
                                        <option id="toi"><?php echo $toi ?></option>
                                        <option id="toi">Pit Toilet</option>
                                        <option id="toi">Water Closet</option>
                                        <option id="toi">Public Toilet</option>
                                        <option id="toi">None</option>
                        </select>                  
                                                       
                                </div>
                            </div>
                           
                     
                          <div class="form-group mt-5 pl-5 col-lg-2">
                            <button type="button" onclick="filterApt();" class="button button-contactForm boxed-btn">Apply</button>                            
                        </div>
                        </div>
                    </form>

                <div class="row mt-5">
                    <?php
     $sql = "SELECT * FROM apartment WHERE `status` = 'available' AND `apartment` = '$apr' AND `state` = '$loc' AND `toilet` = '$toi' AND `price` <= '$prc' ORDER BY RAND() desc";
     $res = query($sql);

     if (row_count($res) == 0) {
         
         echo '<h3 class="text-center text-danger"> Opps, we don`t have any aparment matching your filter</h3>';
     } else {

     while($row = mysqli_fetch_array($res)) {

        $uploader = $row['uploader'];
     ?>              
                    <div class="col-lg-4">
                        <div class="properties properties2 mb-30">
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
                                        <span class="text-danger">NGN <?php echo number_format($row['price']) ?>/yr</span>
                                    </div>
                                </div>
                                    <a href="./details?id=<?php echo $row['apt'] ?>" class="border-btn border-btn2">View More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                }
                ?>
                </div>
            </div>
        </div>
        <!-- Courses area End -->
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
    <script src="ajax.js"></script>

</body>
</html>