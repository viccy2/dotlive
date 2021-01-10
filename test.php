<?php
include("functions/init.php");
$email = 'Greatnessabolade@gmail.com';
$me   = token_generator();
 
	$to 		= $email;
    $from 		= "noreply@dotlive.com.ng";
    $cmessage 	= "Best Regards<br/> <i>Team DotLive</i>";

	$headers  = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=\"iso-8859-1\"\n";
    $headers .= "X-Priority: 1 (Highest)\n";
    $headers .= "X-MSMail-Priority: High\n";
    $headers .= "Importance: High\n";

    $subject = "Recover Password";

    $logo = 'https://dotlive.com.ng/assets/img/logo/2.png';
    $url  = 'https://dotlive.com.ng';
    $link = 'https://dotlive.com.ng/./recovery?id='.$me;

	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>DotLive from DotEightPlus</title></head><link rel='stylesheet' href='https://dotlive.com.ng/assets/css/bootstrap.min.css'><body style='text-align: center;'>";
	$body .= "<section style='margin: 30px; margin-top: 50px ; background: #000000; color: white;'>";
	$body .= "<img style='margin-top: 35px' src='{$logo}' alt='DotLive'>";
	$body .= "<h1 style='margin-top: 45px; color: #fbb710'>Password Recovery</h1>
		<br/>";
	$body .= "<p style='margin-left: 45px; margin-top: 34px; text-align: left; font-size: 17px;'>Hi there! <br/> You requested a reset of your password</p>
		<br/>";
	$body .= "<p style='margin-left: 45px; text-align: left;'><a target='_blank' href='{$link}' style='color: #fbb710; text-decoration: none'>Click here to recover your password</a></p>
		<br/>";
	$body .= "<p style='margin-left: 45px; padding-bottom: 80px; text-align: left;'>Kindly ignore this message if you didn`t request for a password reset.</p>";	
    $body .= "<p text-align: center;'><a href='https://doteightplus.com/contact'><img src='https://dotlive.com.ng/assets/img/icon/5.png'></a>";
    $body .= "<p style='text-align: center;'>Email.: <span style='color: #fbb710'>support@dotlive.com.ng</span></p>";	
	$body .= "<p style='text-align: center;'>Call/Chat.: <span style='color: #fbb710'>+234(0) 810 317 1902</span></p>";	
	$body .= "<p style='text-align: center; padding-bottom: 50px;'>DotLive from DotEightPlus</p>";	
	$body .= "<script src='https://dotlive.com.ng/assets/js/bootstrap.min.js'></script>";
	$body .= "</section>";	
	$body .= "</body></html>";

    $send = mail($to, $subject, $body, $headers);

    $_SESSION['femail'] = $to;

   echo "Loading...Please wait!";	
?>