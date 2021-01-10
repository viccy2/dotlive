<?php
include("../functions/init.php");
if (!isset($_GET['id'])) {

	redirect("./details");
} else {
	$data = $_GET['id'];


	//get image
	$sql2 = "SELECT * FROM apartment WHERE `apt` = '$data'";
	$res2 = query($sql2);	
	$row = mysqli_fetch_array($res2);
	if (row_count($res2) == "") {
   
   redirect("./details");
 }
	$pix = $row['pix'];

	//delete image from upload folder
	$delpix = "../upload/apartment/$pix";
	unlink($delpix);

	//delete room details from db
	$sql = "DELETE FROM apartment WHERE `apt` = '$data'";
	$res = query($sql);

	redirect("./myapartments");
}
?>