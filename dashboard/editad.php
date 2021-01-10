<?php include("include/top.php");
if (!isset($_GET['id'])) {
  redirect("./");
}
$r  = $_SESSION['Username'];

$data = $_GET['id'];

$sql = "SELECT * FROM ads where `user` = '$r' AND `ads_id` = '$data'";
$res = query($sql);
if (row_count($res) == "") {
   
   redirect("./");
 }

$row = mysqli_fetch_array($res);

 ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Ads</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
              <li class="breadcrumb-item active">Edit Ads</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-12">
            <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit your ads details below;</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              
                <form id="data" enctype="multipart/form-data" method="post" role="form">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Ads_ID.:</label>
                        <input type="text" id="edadsid" class="form-control" value="<?php echo $data ?>" disabled>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Ads Tagline.:</label>
                          <input type="text" id="edtagl" value="<?php echo $row['tagline'] ?>" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                   <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Ads Duration.:</label>
                         <input type="text" id="dura" value="<?php echo $row['duration'] ?>" class="form-control" disabled>
                      </div>
                    </div>
                 <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Target.:</label>
                        <select class="form-control">
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
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Ads Link.:</label>
                        <input type="text" id="edlink" class="form-control" placeholder="e.g your whatsapp link or your telephone number" value="<?php echo $row['link'] ?>" required>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Ads Description<small><span style="color: red;"></span></small></label>
                        <textarea id="eddescp" class="form-control" rows="3" placeholder="<?php echo $row['descrip'] ?>" required><?php echo $row['descrip'] ?></textarea>
                      </div>
                    </div>
                  </div>
 
                 
                  <ul style="color: red;">
 <li>Please Kindly go back and recheck all details for any errors. DotLive shall not be responsible for any mistakes.</li>
 
                                       </ul>
                                          
                  <input type="button" name="edadsUpl" value="Next" id="edadsUpl" class="btn btn-success float-right">
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  
  </div>
 <?php include("include/footer.php"); ?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- ./wrapper -->




<!-- Modal -->
    <div class="modal fade" id="ModalCenter">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div style="background: #000000; color: white;" class="modal-content">
                <div class="modal-body">
                    <div id="msg" class="text-center"></div>
                </div>
            </div>
        </div>
    </div>  





<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<script src="ajax.js"></script>
</body>
</html>