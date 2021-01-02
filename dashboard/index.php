<?php
 include("include/top.php");
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
       <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-check"></i></span>
              <a style="color: black" href="./myapartments">
              <div class="info-box-content">
                <span class="info-box-text">Rented Apartment(s)</span>
              <?php
 $r = $_SESSION['Username'];
 $sql="SELECT SUM(sn) AS cart from apartment WHERE `uploader` = '$r' AND `status` = 'rented'";
 $result_set=query($sql);
 $row= mysqli_fetch_array($result_set);

if (row_count($result_set) == 1) {
  
  $a = $row['cart'];
} else {

  $a = 0;
}
 echo '<span class="info-box-number">'.$a.'</span>'; 
 
 $rs = $_SESSION['Username'];
 $sqls="SELECT SUM(sn) AS cart from apartment WHERE `uploader` = '$rs' AND `status` = 'available'";
 $result_sets=query($sqls);
 $rows= mysqli_fetch_array($result_sets);

if (row_count($result_sets) == 1) {
  
  $b = $rows['cart'];
} else {

  $b = 0;
}
$_SESSION['new'] = $b;
  ?>                
                
              </div>
            </a>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-credit-card"></i></span>
              <a style="color: black" href="./profile">
              <div class="info-box-content">
                <span class="info-box-text">Wallet Balance </span>
                 <?php
                 $r = $_SESSION['Username'];
 $sql="SELECT SUM(`price`) as `alto` FROM rent WHERE `uploader` = '$r'";
 $result_set=query($sql);
 $row= mysqli_fetch_array($result_set);
 if (row_count($result_set) == 1) {
 
    $wallet = $row['alto'];
    } else {

    $wallet = 0.00;
    }  
   echo '<span class="info-box-number">NGN '.$wallet.'</span>';  
  ?>                
                
                
              </div>
            </a>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-list"></i></span>
              <a style="color: black" href="./sales">
              <div class="info-box-content">
                <span class="info-box-text">Unread Chats</span>
             
                <span class="info-box-number">0</span>
                
              </div>
            </a>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fa fa-newspaper"></i></span>
              <a style="color: black" href="./ads">
              <div class="info-box-content">
                <span class="info-box-text">Active Ads</span>
                
               <span class="info-box-number">null</span>
                
              </div>
            </a>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
                    <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Your Apartment(s)</h3>

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
                      <th style="width: 15%;">Suite_No.</th>
                      <th style="width: 15%;">Image</th>
                      <th style="width: 15%;">Apartment Type</th>
                      <th style="width: 15%;">Water Type</th>
                      <th style="width: 15%;">Power Source</th>
                      <th style="width: 15%;">Price</th>
                      <th style="width: 15%;"></th>
                    </tr>
                    </thead>
         <?php
         $r = $_SESSION['Username'];
 $sql="SELECT * FROM apartment WHERE `uploader` = '$r' AND `status` = 'available'";
 $result_set=query($sql);
 while($row= mysqli_fetch_array($result_set))
 {
  ?>   
           
 <tbody>
                    <tr>
                      <td><a href="#"><?php echo $row['apt']; ?></a></td>
                      </td>
                      <?php          
                    echo '
 <td><img style= "width: 100px; height: 100px;" src= "../upload/apartment/'.$row['pix'].'"  alt="product picture"></td>';
 ?>
                      <td><?php echo $row['apartment']; ?></td>
                      <td><?php echo $row['water']; ?></td>
                      <td><?php echo $row['power']; ?></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">NGN <?php echo number_format($row['price']); ?></div>
                      </td>
                      <td><a href="./details?id=<?php echo $row['apt']; ?>"> More Details</td>
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

                                <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Pending Apartment(s)</h3>

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
                       <th style="width: 15%;">Suite_No.</th>
                      <th style="width: 15%;">Image</th>
                      <th style="width: 15%;">Date Paid</th>
                      <th style="width: 15%;">Tenant Tel</th>
                      <th style="width: 15%;">Price</th>
                      <th style="width: 15%;"></th>
                    </tr>
                    </thead>
         <?php
         $r = $_SESSION['Username'];
 $sql="SELECT * FROM rent WHERE `uploader` = '$r' AND `status` = 'pending'";
 $result_set=query($sql);
 while($row= mysqli_fetch_array($result_set))
 {
  ?>   
           
                    <tbody>
                    <tr>
                      <td><a href="#"><?php echo $row['apt']; ?></a></td>
                      </td>
                      <?php          
                    echo '
 <td><img style= "width: 100px; height: 100px;" src= "../upload/product/'.$row['pix'].'"  alt="product picture"></td>';
 ?>
                      <td>
                      <td><?php echo $row['paydate']; ?></td>
                      <td><?php echo $row['tenanttel']; ?></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">NGN <?php echo $row['price']; ?></div>
                      </td>
                      <td><a href="./chat?id=<?php echo $row['tenantmail'] ?>"> More Details</td>
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
             

                                <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Rented Apartment(s)</h3>

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
                       <th style="width: 15%;">Suite_No.</th>
                      <th style="width: 15%;">Image</th>
                      <th style="width: 15%;">Date Paid</th>
                      <th style="width: 15%;">Tenant Tel</th>
                      <th style="width: 15%;">Price</th>
                      <th style="width: 15%;"></th>
                    </tr>
                    </thead>
         <?php
         $r = $_SESSION['Username'];
 $sql="SELECT * FROM rent WHERE `uploader` = '$r' AND `status` = 'rented'";
 $result_set=query($sql);
 while($row= mysqli_fetch_array($result_set))
 {
  ?>   
           
                    <tbody>
                    <tr>
                      <td><a href="#"><?php echo $row['apt']; ?></a></td>
                      </td>
                      <?php          
                    echo '
 <td><img style= "width: 100px; height: 100px;" src= "../upload/product/'.$row['pix'].'"  alt="product picture"></td>';
 ?>
                      <td>
                      <td><?php echo $row['paydate']; ?></td>
                      <td><?php echo $row['tenanttel']; ?></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">NGN <?php echo $row['price']; ?></div>
                      </td>
                      <td><a href="./chat?id=<?php echo $row['tenantmail'] ?>"> More Details</td>
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


                    <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Active Ads</h3>

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
                      <th>Ad_ID</th>
                      <th>Ad_Image</th>
                      <th>Duration</th>
                      <th>Date Submitted</th>
                      <th>Number of Clicks</th>
                      <th></th>
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
                       <td><img style= "width: 100px; height: 100px;" src= "../upload/ads/<?php echo $row['file'] ?>"  alt="Ads image"></td>';
                      <td><?php echo $row['duration']; ?></td>
                      <td><?php echo $row['date']; ?></td>
                      <td><?php echo $row['click']; ?></span></td>
                      <td><a href="./adsdetails?id=<?php echo $row['ads_id']; ?>">More Details</a></td>
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

              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
    
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
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