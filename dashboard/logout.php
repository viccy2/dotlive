<?php
include("../functions/init.php");

$lstseen = date("Y-m-d h:i:sa");
$username = $_SESSION['Username'];

$sql = "UPDATE user SET `lstseen` ='$lstseen' WHERE `email`= '$username'";
$result = query($sql);

session_destroy();
header("location: .././");

// redirect("login.php");
?>