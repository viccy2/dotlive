<?php
include("include/top.php");
$data = $_GET['id'];
?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Rented Apartment Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active">Apartment Details</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

   <!-- Main content -->
    <section class="content">
               </thead>
         <?php
 $sql="SELECT * FROM apartment WHERE `apt` ='$data'";
 $result_set=query($sql);
 $row= mysqli_fetch_array($result_set);
 if (row_count($result_set) == "") {
   
   redirect("./myapartments");
 }
  ?>        
      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              
              <div class="col-12">
                <?php echo '
                <img src="../upload/apartment/'.$row['pix'].'" class="product-image" alt="Apartment Image">';
                ?>
              </div>
              
            </div>
            <div class="col-12 col-sm-6">
              <h3 class="my-3"><b>Suite No.:</b> <?php echo $row['apt']; ?></h3>
              <p><b>Apartment Type:</b> <?php echo $row['apartment']; ?></p>
              <p><b>Apartment Details:</b> <?php echo $row['description']; ?></p>
              <p><b>Water Type:</b> <?php echo $row['water']; ?></p>
              <p><b>Power Source:</b> <?php echo $row['power']; ?></p>
              <p><b>Toilet Type:</b> <?php echo $row['toilet']; ?></p>
              <p><b>Location:</b> <?php echo $row['location']; ?></p>
              <p><b>Campus:</b> <?php echo $row['state']; ?></p>
              <p><b>Price:</b> NGN <?php echo number_format($row['price']); ?></p>
              <hr>                
             
              <button type="button" class="btn btn-default btn-lg btn-flat" data-toggle="modal" data-target="#modal-lg">
                  <i class="fas fa-trash fa-lg mr-2"></i> 
                  Delete Apartment
                 </button>

                 <a href="./edit?id=<?php echo $row['apt']; ?>"><button type="button" class="btn btn-primary btn-lg btn-flat">
                  <i class="fas fa-edit fa-lg mr-2"></i> 
                  Edit Apartment
                 </button>
              </div>

            </div>
          </div>
          
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
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

      <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Delete Apartment?</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Note that, once apartment is deleted, all details as regards the apartent are cleared off also and can`t be recovered. <br/><br/>Do you want to proceed deleting this product?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <a href="./del?id=<?php echo $data; ?>"><button type="button" class="btn btn-danger">Continue</button></a>
                              </thead>
         
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SweetAlert2 -->
<script src="plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="plugins/toastr/toastr.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
</body>
</html>