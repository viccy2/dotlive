<?php
include("../functions/init.php");
if (!isset($_GET['id'])) {

	redirect("./adsdetails");
} else {
	$data = $_GET['id'];


	//get image
	$sql2 = "SELECT * FROM ads WHERE `ads_id` = '$data'";
	$res2 = query($sql2);	
	$row = mysqli_fetch_array($res2);
	if (row_count($result_set) == "") {
   
   redirect("./adsdetails");
 }
	$pix = $row['file'];

	//delete image from upload folder
	$delpix = "../upload/ads/$pix";
	unlink($delpix);

	//delete room details from db
	$sql = "DELETE FROM ads WHERE `ads_id` = '$data'";
	$res = query($sql);

	redirect("./adscenter");
}
?>