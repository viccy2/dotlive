<?php include("include/top.php");
$r  = $_SESSION['Username'];

$sql = "SELECT * FROM user where `email` = '$r'";
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
            <h1>Apartment Store</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
              <li class="breadcrumb-item active">Apartment Store</li>
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
                <h3 class="card-title">Kindly input your apartment details below;</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              
                <form id="data" enctype="multipart/form-data" method="post" role="form">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Suite_No.:</label>
                        <input type="text" id="suite" class="form-control" value="<?php echo 'DotLive-'.rand(0, 999).''?>" disabled>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Apartment Type.:</label>
                        <select id="apt" class="form-control" required>
                                        <option id="apt">Self-Contain</option>
                                        <option id="apt">Room</option>
                                        <option id="apt">Family House</option>
                                        <option id="apt">Room & Parlour</option>
                                        <option id="apt">Boys Quarter</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                   <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Water Type.:</label>
                        <select id="water" class="form-control" required>
                                        <option id="water">Borehole</option>
                                        <option id="water">Well</option>
                                        <option id="water">Public Water</option>
                                        <option id="water">None</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Power Source.:</label>
                        <select id="power" class="form-control" required>
                                        <option id="power">PHCN</option>
                                        <option id="power">Solar Station</option>
                                        <option id="power">Dotron</option>
                                        <option id="power">Generator</option>
                                        <option id="power">None</option>
                        </select>
                      </div>
                    </div>
                 <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Select your state.:</label>
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
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Telephone.:</label>
                        <input type="number" id="tel" value="<?php echo $row['tel'] ?>" class="form-control" placeholder="370" disabled>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Email.:</label>
                        <input type="text" id="email" class="form-control" value="<?php echo $row['email'] ?>" placeholder="370" disabled>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Apartment Price.:</label>
                        <input type="number" id="price" class="form-control" placeholder="30000" required>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Apartment Location.:</label>
                        <input type="text" id="twn" class="form-control" placeholder="30000" required>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Apartment Description<small><span style="color: red;"></span></small></label>
                        <textarea id="desc" class="form-control" rows="3" placeholder="Tell more about your apartment" required></textarea>
                      </div>
                    </div>
                  </div>
 
                 <?php
                 if ($row['acct'] == null || $row['acct'] == "") {
                 ?>
                 <div class="form-group">
                    <label class="col-form-label" for="inputWarning">Account Number.:</label>
                    <input type="text" id="acct" class="form-control is-warning" id="inputWarning">
                  </div>
                  <?php
                } else {
                  ?>
                  <div class="form-group">
                    <label class="col-form-label" for="inputWarning">Account Number.:</label>
                    <input type="text" id="acct" value="<?php echo $row['acct'] ?>" class="form-control is-warning" id="inputWarning" disabled>
                  </div>
                  <?php
                }
                if ($row['bank'] == null || $row['bank'] == "") {
                  ?>
                   <div class="form-group">
                        <label>Bank Name.:</label>
                        <input type="text" id="bank" class="form-control is-warning" id="inputWarning">
                      </div>
                   <?php
                   } else {
                   ?>   
                   <div class="form-group">
                        <label>Bank Name.:</label>
                        <input type="text" id="bank" class="form-control is-warning" id="inputWarning" value="<?php echo $row['bank'] ?>" disabled>
                      </div>
                   <?php
                   }
                   ?>
                  <br/><br/>
                  <ul style="color: red;">
 <li>Please Kindly go back and recheck all details for any errors. DotLive shall not be responsible for any mistakes.</li>
 
                                       </ul>
                                          
                  <input type="button" name="aptmentUpl" value="Next" id="aptmentUpl" class="btn btn-success float-right">
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