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
            <h1>Ads Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active">Ads Details</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

   <!-- Main content -->
    <section class="content">
               </thead>
         <?php
 $sql="SELECT * FROM ads WHERE `ads_id` ='$data'";
 $result_set=query($sql);
 $row= mysqli_fetch_array($result_set);
 $_SESSION['date'] = $row['date'];
  ?>        
      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              
              <div class="col-12">
                <?php echo '
                <img src="../upload/ads/'.$row['file'].'" class="product-image" alt="ads image">';
                ?>
              </div>
              
            </div>
            <div class="col-12 col-sm-6">
              <h3 class="my-3"><b>Ads ID.:</b> <?php echo $row['ads_id']; ?></h3>
              <p><b>Tagline:</b> <?php echo $row['tagline']; ?></p>
              <p><b>Ads Details:</b> <?php echo $row['descrip']; ?></p>
              <p><b>Duration:</b> <?php echo $row['duration']; ?></p>
              <p><b>Date Submitted:</b> <?php echo $row['date']; ?></p>
              <p><b>Expiry Date:</b> <span id="demo"></span></p>
              <p><b>Target:</b> <?php echo $row['target']; ?></p>
              <p><b>Ads Price:</b> NGN <?php echo number_format($row['price']); ?></p>
              <hr>                
             
                <button type="button" class="btn btn-default btn-lg btn-flat" data-toggle="modal" data-target="#modal-lg">
                  <i class="fas fa-trash fa-lg mr-2"></i> 
                  Delete Ad
                 </button>

                 <a href="./editad?id=<?php echo $row['ads_id']; ?>"><button type="button" class="btn btn-primary btn-lg btn-flat">
                  <i class="fas fa-edit fa-lg mr-2"></i> 
                  Edit Ad
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
              <h4 class="modal-title">Delete Ad?</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Note that, once ad is deleted, all details as regards the ad are cleared off also and can`t be recovered. <br/><br/>Do you want to proceed deleting this ad?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <a href="./delads?id=<?php echo $data; ?>"><button type="button" class="btn btn-danger">Continue</button></a>
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
<script>
// Set the date we're counting down to
var countDownDate = new Date("<?php echo $_SESSION['date'] ?>").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = days + "days " + hours + "hours "
  + minutes + "min " + seconds + "sec ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
})
</script>
</body>
</html>