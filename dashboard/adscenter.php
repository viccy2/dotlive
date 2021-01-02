<?php
include("include/top.php");
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ads Center</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active">Ads Center</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
               <div class="nav nav-pills">
<?php
$name = $_SESSION['Username'];
$sql = "SELECT SUM(`sn`) as adstot FROM ads WHERE `user` = '$name'";
$result = query($sql);
$row = mysqli_fetch_array($result);
  ?>    
                <a href="./ads" class="btn btn-primary btn-block"><b>Upload Ads</b></a>
          
                <a href="#activity" data-toggle="tab" class="btn btn-primary btn-block active"><b>All Ad(s)<sup> <span class="badge badge-danger right"><?php echo $row['adstot'];?></span></sup></b></a>

              
                <a href="#timeline" data-toggle="tab" class="btn btn-primary btn-block"><b>Expired Ads<sup> <span class="badge badge-danger right"><?php echo $a;?></span></sup></b></a>
              </div>
            </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

                  
          
          </div>
          <!-- /.col -->
          <div class="col-md-9">
           
                <div class="tab-content">
                  <div class="tab-pane active" id="activity">
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">All Ad(s)</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th style="width: 15%;">Ads_ID.</th>
                      <th style="width: 15%;">Image</th>
                      <th style="width: 15%;">Tagline</th>
                      <th style="width: 15%;">Duration</th>
                      <th style="width: 15%;">Amount Paid</th>
                      <th style="width: 15%;">Expiry Date</th>
                      <th style="width: 15%;"></th>
                    </tr>
                    </thead>
          <?php
  $r = $_SESSION['Username'];
 $sql="SELECT * FROM ads WHERE `user` = '$r' AND `session` = 'active'";
 $result_set=query($sql);
 while($row= mysqli_fetch_array($result_set))
 {
  ?>                   
 <tbody>
                    <tr>
                      <td><a href="#"><?php echo $row['ads_id']; ?></a></td>
                      </td>
                      <?php          
                    echo '
 <td><img style= "width: 50px; height: 50px;" src= "../upload/ads/'.$row['file'].'"  alt="product picture"></td>';
 ?>
                      <td><?php echo $row['tagline']; ?></td>
                      <td><?php echo $row['duration']; ?></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">NGN <?php echo number_format($row['price']); ?></div>
                      </td>

                      <td><?php echo $row['date']; ?></td>
                      <td><a href="./adsdetails?id=<?php echo $row['ads_id']; ?>"> More Details</td>
                    </tr>
              
                    </tbody>
                    <?php
                  }
                  ?>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
             
            </div>
            <!-- /.card -->
                    <!-- /.post -->
                  </div>


<div class="tab-pane" id="timeline">
                    <!-- The timeline -->
                    <div class="timeline timeline-inverse">
                      <!-- timeline time label -->
                     
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <div>                    

                          <div class="timeline-body">
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Expired Ad(s)</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                 <table class="table m-0">
                    <thead>
                    <tr>
                      <th style="width: 15%;">Ads_ID.</th>
                      <th style="width: 15%;">Image</th>
                      <th style="width: 15%;">Tagline</th>
                      <th style="width: 15%;">Duration</th>
                      <th style="width: 15%;">Amount Paid</th>
                      <th style="width: 15%;">Expired Date</th>
                    </tr>
                    </thead>
          <?php
  $r = $_SESSION['Username'];
 $sql="SELECT * FROM ads WHERE `user` = '$r' AND `session` = 'expired'";
 $result_set=query($sql);
 while($row= mysqli_fetch_array($result_set))
 {
  ?>                   
 <tbody>
                    <tr>
                      <td><a href="#"><?php echo $row['ads_id']; ?></a></td>
                      </td>
                      <?php          
                    echo '
 <td><img style= "width: 50px; height: 50px;" src= "../upload/ads/'.$row['file'].'"  alt="product picture"></td>';
 ?>
                      <td><?php echo $row['tagline']; ?></td>
                      <td><?php echo $row['duration']; ?></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">NGN <?php echo number_format($row['price']); ?></div>
                      </td>

                      <td><?php echo $row['date']; ?></td>
                    </tr>
              
                    </tbody>
                    <?php
                  }
                  ?>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
             
            </div>
            <!-- /.card -->
    <!-- /.content -->
    <!-- /.content -->
                          </div>
                         
                        
                      </div>
                      <!-- END timeline item -->
                     
                      <!-- END timeline item -->
                      <!-- timeline item -->
                     
                     
                    
                     
                    </div>
                  </div>

                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
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
</body>
</html>