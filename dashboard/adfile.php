<?php include("include/top.php");

if(!isset($_GET['id'])) {

  redirect("./ads");

} else {

  $data   = $_GET['id'];

  $sql    = "SELECT * FROM `ads` WHERE `ads_id` = '$data'";
  $res    = query($sql);

  if (row_count($res) == "") {
   
   redirect("./ads");
  }

  $row    = mysqli_fetch_array($res);

  $_SESSION['adsimg']  = $data;
}

 ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Upload Ads Image</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
              <li class="breadcrumb-item active">Ads Image</li>
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
                <h3 class="card-title">Kindly upload ads image below;</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              
                <form id="data" enctype="multipart/form-data" method="post" role="form">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Ads_ID.:</label>
                        <input type="text" value="<?php echo $row['ads_id'] ?>" class="form-control" disabled>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Ads Price</label>
                        <input type="text" value="NGN <?php echo number_format($row['price']) ?>"  class="form-control" disabled>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Ads Details<small><span style="color: red;"></span></small></label>
                        <textarea  class="form-control" rows="3" placeholder="<?php echo $row['descrip'] ?>" disabled></textarea>
                      </div>
                    </div>
                   

                  </div>
 



                  <div class="form-group">
                     <label for="customFile">Upload Ads Image</label> 

                   
                  </div>
                    <div class="col-12 mb-3">
                     <input type="file" id="adsfile" class="form-control" name="file" required>
                   </div> 


                   <br/><br/>
                   <ul style="color: red;">
 <li>Please Kindly go back and recheck all details for any errors. DotLive shall not be responsible for any mistakes.</li>
                   </ul>                      
                  <input type="button" value="Submit" id="adsfileUpl" class="btn btn-success float-right">
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