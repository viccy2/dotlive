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
                    <h1>Verify Apartment</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="./">Home</a></li>
                        <li class="breadcrumb-item active">Verify Apartment</li>
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

                        <button title="Love" type="button" class="btn btn-default btn-lg btn-flat" data-toggle="modal"
                            data-target="#modal-lg"> 💗
                        </button>

                        <button title="Real, No Love" type="button" data-toggle="modal" data-target="#modal-lg"
                            class="btn btn-default btn-lg btn-flat"> 👎
                        </button>

                        <button title="Not Real" type="button" data-toggle="modal" data-target="#modal-lg"
                            class="btn btn-default btn-lg btn-flat"> ❌
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




<!--- Love modal --->
<div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Love this Apartment?</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Clicking on the accept button makes your payment for this apartment enabled and your rent
                    activated.
                    This process is not reversible. <br /><br /> Are you sure you love this apartment?
                </p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn  btn-danger" data-dismiss="modal">No</button>
                <p id="lover" hidden><?php echo $data; ?></p>
                <button type="button" id="lovebtn" class="btn btn-default">Yes</button></a>
                </thead>

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->




<!--- unLove modal --->
<div class="modal fade" id="modal-unlike">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Don`t Like this Apartment?</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Clicking on the accept button makes your payment for this apartment enabled and your rent
                    activated.
                    This process is not reversible. <br /><br /> Are you sure you love this apartment?
                </p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn  btn-danger" data-dismiss="modal">No</button>
                <a href="./love?id=<?php echo $data; ?>"><button type="button" class="btn btn-default">Yes</button></a>
                </thead>

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->




<!--- hate modal --->
<div class="modal fade" id="modal-hate">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Love this Apartment?</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Clicking on the accept button makes your payment for this apartment enabled and your rent
                    activated.
                    This process is not reversible. <br /><br /> Are you sure you love this apartment?
                </p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn  btn-danger" data-dismiss="modal">No</button>
                <a href="./love?id=<?php echo $data; ?>"><button type="button" class="btn btn-default">Yes</button></a>
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
<script src="ajax.js"></script>
</body>

</html>