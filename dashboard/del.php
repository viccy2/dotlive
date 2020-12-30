<?php
include("../functions/init.php");
if (!isset($_GET['id'])) {

	redirect("./details");
} else {
	$data = $_GET['id'];

	$sql = "DELETE FROM apartment WHERE `apt`='$data'";
	$res = query($sql);
	$row = mysqli_fetch_array($res);

	$pix = $row['pix'];

	unlink("../upload/apartment/$pix");

	redirect("./");
}
?>