<?php
 include("../functions/init.php"); 
 if ($_SESSION['Username'] == "Guest" || $_SESSION['Username'] == "") {
     
     redirect("../signup");
 }
 include("include/head.php"); 
 include("include/sidebar.php"); ?>