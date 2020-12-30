<?php include("include/top.php"); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
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
  ?>                
            <h1>Wallet Balance.: <span style="color: red;">NGN <?php echo number_format($wallet) ?></span>
              <br>
              <a href="./withdraw"><button type="button" name="submit" value="Withdraw Funds" class="btn btn-success">Withdraw Funds</button></a>
              <a href="./fund"><button type="button" name="submit" value="Withdraw Funds" class="btn btn-primary">Fund Wallet</button></a>
            </h1>
          </div>
         
        </div>
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
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 15%">
                        Item
                      </th>
                      <th style="width: 15%">
                          Amount
                      </th>
                      <th style="width: 15%">
                         Pay Date
                      </th>
                    
                  </tr>
              </thead>
                             </thead>
        <?php
         $uu = $_SESSION['Username'];
 $sql="SELECT * FROM rent WHERE `uploader` = '$uu'";
 $result_set=query($sql);
 while($row= mysqli_fetch_array($result_set))
 {
  ?>   
         
              <tbody>
                  <tr>
                      <td>
                         <?php echo $row['apt']; ?> 
                      </td>
                      <td>
                     
                           NGN <?php echo number_format($row['price']); ?>
                        
                      </td>
                    
 <td><?php echo $row['paydate']; ?></td>';

                    
                     
                  </tr>
                 
                  
                 
              </tbody>
              <?php
            }
            ?>
          </table>
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