<?php include("include/top.php");
if (!isset($_GET['id'])) {
  redirect("./");
}
$r  = $_SESSION['Username'];

$data = $_GET['id'];

$sql = "SELECT * FROM ads where `user` = '$r' AND `ads_id` = '$data'";
$res = query($sql);

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
                        <select id="dura" class="form-control" required>
                                        <option id="dura">A Day</option>
                                        <option id="dura">A Week</option>
                                        <option id="dura">3 Days</option>
                                        <option id="dura">A Month</option>
                                        <option id="dura">A Year</option>
                        </select>
                      </div>
                    </div>
                 <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Target.:</label>
                        <select id="loc" class="form-control" required>
                                        <option id="loc" name="loc">Abuja</option>
                                        <option id="loc" name="loc">Abia</option>
                                        <option id="loc" name="loc">Adamawa</option>
                                        <option id="loc" name="loc">Akwa Ibom</option>
                                        <option id="loc" name="loc">Anambra</option>
                                        <option id="loc" name="loc">Bauchi</option>
                                        <option id="loc" name="loc">Bayelsa</option>
                                        <option id="loc" name="loc">Benue</option>
                                        <option id="loc" name="loc">Borno</option>
                                        <option id="loc" name="loc">Cross River</option>
                                        <option id="loc" name="loc">Delta</option>
                                        <option id="loc" name="loc">Ebonyi</option>
                                        <option id="loc" name="loc">Edo</option>
                                        <option id="loc" name="loc">Ekiti</option>
                                        <option id="loc" name="loc">Enugu</option>
                                        <option id="loc" name="loc">Gombe</option>
                                        <option id="loc" name="loc">Imo</option>
                                        <option id="loc" name="loc">Jigawa</option>
                                        <option id="loc" name="loc">Kaduna</option>
                                        <option id="loc" name="loc">Kano</option>
                                        <option id="loc" name="loc">Katsina</option>
                                        <option id="loc" name="loc">Kebbi</option>
                                        <option id="loc" name="loc">Kogi</option>
                                        <option id="loc" name="loc">Kwara</option>
                                        <option id="loc" name="loc">Lagos</option>
                                        <option id="loc" name="loc">Nassarawa</option>
                                        <option id="loc" name="loc">Niger</option>
                                        <option id="loc" name="loc">Ogun</option>
                                        <option id="loc" name="loc">Ondo</option>
                                        <option id="loc" name="loc">Osun</option>
                                        <option id="loc" name="loc">Oyo</option>
                                        <option id="loc" name="loc">Plateau</option>
                                        <option id="loc" name="loc">Rivers</option>
                                        <option id="loc" name="loc">Sokoto</option>
                                        <option id="loc" name="loc">Taraba</option>
                                        <option id="loc" name="loc">Yobe</option>
                                        <option id="loc" name="loc">Zamfara</option>
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