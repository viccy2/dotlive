<?php
include("../functions/init.php");

$Date = date("Y-m-d");

//adding days to a previous date
echo date('Y-m-d h:i:sa', strtotime($Date. ' + 3 year'))."<br>";
echo date('Y-m-d h:i:sa', strtotime($Date. ' + 2 days'));

//echo time and date in a unique way from database
date('D, M d, Y', strtotime($row['date']));

	//testing how the email will look like to the user
    $from 		= "noreply@dotlive.com.ng";
    $cmessage 	= "Best Regards<br/> <i>Team DotLive</i>";

    $due        = date('D, M d, Y', strtotime($date. ' + 1 week'));

	$headers  = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=\"iso-8859-1\"\n";
    $headers .= "X-Priority: 1 (Highest)\n";
    $headers .= "X-MSMail-Priority: High\n";
    $headers .= "Importance: High\n";

    $subject = "Your Apartment was Rented";

    $logo = 'https://dotlive.com.ng/assets/img/logo/2.png';
    $url  = 'https://dotlive.com.ng';
    $link = 'https://dotlive.com.ng/./dashboard/./credith';

	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>DotLive from DotEightPlus</title></head><link rel='stylesheet' href='https://dotlive.com.ng/assets/css/bootstrap.min.css'><body style='text-align: center;'>";
	$body .= "<section style='margin: 30px; margin-top: 50px ; background: #000000; color: white;'>";
	$body .= "<img style='margin-top: 35px' src='{$logo}' alt='DotLive'>";
	$body .= "<h1 style='margin-top: 45px; color: #fbb710'>Your Apartment was Rented</h1>
		<br/>";
	$body .= "<p style='margin-left: 45px; margin-top: 34px; text-align: left; font-size: 17px;'>Hi there! <br/> thank you for choosing DotLive as your apartment agency. <br/><br/> One of your apartment has been rented. Below are <br/> details about the apartment rented ;</p>
		<br/>";
	$body .= '<table class="text-center" style="width:90%; margin-left: 45px; color: white; border: 1px solid #f9f9ff;">
   <tr>
    <th style="border: 1px solid #f9f9ff;">Suite</th>
    <th style="border: 1px solid #f9f9ff;">Apartment</th>
    <th style="border: 1px solid #f9f9ff;">Date Paid</th>
    <th style="border: 1px solid #f9f9ff;">Tenant Telephone</th>
  </tr>
  <tr style="border: 1px solid #f9f9ff;">
    <td style="border: 1px solid #f9f9ff;">Eve</td>
    <td style="border: 1px solid #f9f9ff;">'.date('D, M d, Y', strtotime($Date)).'</td>
    <td style="border: 1px solid #f9f9ff;">94</td>
    <td style="border: 1px solid #f9f9ff;">94</td>
  </tr>
</table><br/>';
	$body .= "<p style='margin-left: 45px; text-align: left;'><a target='_blank' href='{$link}' style='color: #fbb710; text-decoration: none'>Kindly note that you are to verify this apartment and get your apartment key on or before  ".$due." else this apartment will no longer be yours. <br/> Kindly call the owner of this apartment via ".$tel."</a></p>
		<br/>";
	$body .= "<p style='margin-left: 45px; padding-bottom: 80px; text-align: left;'>Do not bother replying this email. This is a virtual email</p>";	
    $body .= "<p text-align: center;'><img src='https://dotlive.com.ng/assets/img/icon/5.png'>";
    $body .= "<p style='text-align: center;'>Email.: <span style='color: #fbb710'>support@dotlive.com.ng</span></p>";	
	$body .= "<p style='text-align: center;'>Call/Chat.: <span style='color: #fbb710'>+234(0) 810 317 1902</span></p>";	
	$body .= "<p style='text-align: center; padding-bottom: 50px;'>DotLive from DotEightPlus</p>";	
	$body .= "<script src='https://dotlive.com.ng/assets/js/bootstrap.min.js'></script>";
	$body .= "</section>";	
	$body .= "</body></html>";
    echo $subject, $body, $headers;


?>