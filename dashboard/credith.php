<?php include("include/top.php"); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Transaction History</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
       <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-credit-card"></i></span>
              <a style="color: black" href="#">
              <div class="info-box-content">
                <span class="info-box-text">Wallet Balance </span>
                 <?php
                 $r = $_SESSION['Username'];
 $sql="SELECT * FROM user WHERE `email` = '$r'";
 $result_set=query($sql);
 $row= mysqli_fetch_array($result_set);
 if ($row['wallet'] == "") {

    $wallet = 0; 
    
    } else {

    $wallet = number_format($row['wallet']);
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


<div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-list"></i></span>
              <a style="color: black" href="#">
              <div class="info-box-content">
                <span class="info-box-text">Ledger Balance </span>
                 <?php
                 $r = $_SESSION['Username'];
 $sql="SELECT * FROM user WHERE `email` = '$r'";
 $result_set=query($sql);
 $row= mysqli_fetch_array($result_set);
 if ($row['tempwallet'] == "") {

    $twallet = 0; 
    
    } else {

    $twallet = number_format($row['tempwallet']);
    }  
   echo '<span class="info-box-number">NGN '.$twallet.'</span>';  
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
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-coins"></i></span>
              <a style="color: black" href="./fund">
              <div class="info-box-content">
                <span class="info-box-text">Fund Wallet</span>
             
                <span class="info-box-number">click here</span>
                
              </div>
            </a>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fa fa-coins"></i></span>
              <a style="color: black" href="./withdraw">
              <div class="info-box-content">
                <span class="info-box-text">Withdraw Funds</span>
               <span class="info-box-number">click here</span>
                
              </div>
            </a>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Transaction History</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body p-0">
          <div class="table-responsive">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 25%">
                        Transaction Ref
                      </th>
                      <th style="width: 25%">
                        Item
                      </th>
                      <th style="width: 15%">
                          Amount
                      </th>
                      <th style="width: 25%">
                         Pay Date
                      </th>
                      <th style="width: 15%">
                         Mode of Payment
                      </th>
                      <th style="width: 15%">
                         Status
                      </th>
                      <th style="width: 15%">
                         Transaction Type
                      </th>
                  </tr>
              </thead>
                             </thead>
        <?php
         $uu = $_SESSION['Username'];
 $sql="SELECT * FROM wallet_his WHERE `user` = '$uu' ORDER BY id asc";
 $result_set=query($sql);
 while($row= mysqli_fetch_array($result_set))
 {
  ?>   
         
              <tbody>
                <tr>
                      <td><?php echo $row['transref']; ?></td>
                      <td><?php echo $row['details']; ?></td>
                      <td>NGN <?php echo number_format($row['amt']); ?> </td>
                      <td><?php echo date('D, M d, Y', strtotime($row['date'])); ?></td>
                       <td><?php echo $row['mode']; ?></td>
                      <td><?php echo $row['status']; ?></td>
                      <td><?php echo $row['type']; ?></td>
                   </tr>  
              </tbody>
              <?php
            }
            ?>
          </table>
        </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->

    
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
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

</body>
</html>