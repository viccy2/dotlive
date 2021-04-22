<?php
//creating the database to use

//heroku db
//$con = mysqli_connect("us-cdbr-east-03.cleardb.com","b035ecdb1188fa","53fa1a7e","heroku_5f230635e2239b6");

//local db
$con = mysqli_connect("localhost","root","","dotlive");


//whogohost db
//$con = mysqli_connect("localhost","paradi12_user","securemelikekilode","paradi12_dotlive");

function row_count($result) {

global $con;

	return mysqli_num_rows($result); 
}


function escape($string) {
	global $con;


	return mysqli_real_escape_string($con, $string);
}


function query($query) {
		global $con;

		return mysqli_query($con, $query);
}


function confirm($result) {
		global $con;
	if(!$result) {

		die("QUERY FAILED" . mysqli_error($con));
	}
}

function last_id($last_id) {

	global $con;

	return mysqli_insert_id($con);
}

function fetch_array($result) {

global $con;

return mysqli_fetch_array($result);

}

?>