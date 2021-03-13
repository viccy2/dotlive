<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href=".././" class="brand-link">
        <img src="../assets/img/logo/2.png" alt="DotLive" class="brand-image elevation-3" style="opacity: 0.8">
        <span style="font-size: 12px;"
            class="brand-text font-weight-light"><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from
            DotEightPlus</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <?php
$name = $_SESSION['Username'];
$sql = "SELECT * FROM user WHERE `email` = '$name'";
$result = query($sql);
$row = mysqli_fetch_array($result);

$category   = $row['category'];
  ?>
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">

            <div class="info">
                <a href="./profile" class="d-block text-center" style="text-transform: capitalize;">Welcome
                    <?php echo $row['name']; ?></a>

                <a style="font-size: 13px;" href="./profile" class="d-block text-center">My Profile</a>
            </div>

        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="./" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-right"></i>
                        </p>
                    </a>

                </li>
                <br />
                <li class="nav-item has-treeview">
                    <a href="./myapartments" class="nav-link">
                        <i class="nav-icon fa fa-school"></i>
                        <p>
                            My Apartment
                            <i class="fas fa-angle-right right"></i>

                        </p>
                    </a>

                </li>
                <br />
                <li class="nav-item has-treeview">
                    <a href="./chat" class="nav-link">
                        <i class="nav-icon fa fa-envelope"></i>
                        <p>
                            Chat Room
                            <i class="right fas fa-angle-right"></i>
                        </p>
                    </a>

                </li>
                <br />
                <li class="nav-item has-treeview">
                    <a href="./adscenter" class="nav-link">
                        <i class="nav-icon fas fa-credit-card"></i>
                        <p>
                            Ads Center
                            <i class="right fas fa-angle-right"></i>
                        </p>
                    </a>

                </li>
                <br />
                <li class="nav-item has-treeview">
                    <a href="./credith" class="nav-link">
                        <i class="nav-icon fas fa-credit-card"></i>
                        <p>
                            Transaction History
                            <i class="right fas fa-angle-right"></i>
                        </p>
                    </a>

                </li>
                <br />

                <li class="nav-item has-treeview">
                    <a href="./tc" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Terms and Conditions
                            <i class="fas fa-angle-right right"></i>
                        </p>
                    </a>

                </li>

                <br />
                <li class="nav-item has-treeview">
                    <a href="./compose" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Support Ticket
                            <i class="fas fa-angle-right right"></i>
                            <span class="badge badge-info right"><?php echo $_SESSION['al'];?></span>
                        </p>
                    </a>
                </li>
                <br />
                <li class="nav-item has-treeview">
                    <a href="./profile" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Profile
                            <i class="fas fa-angle-right right"></i>
                        </p>
                    </a>

                </li>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>