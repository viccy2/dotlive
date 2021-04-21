<?php
include("functions/init.php");
if(!isset($_SESSION['Username'])) {

redirect("./apartment");

} else {




//constants
$email   = $_SESSION['Username'];
$upl     = $_POST['upl'];
$all     = $_POST['all']; 
$drt     = $_POST['drt'];

//pass them in session
$_SESSION['upl'] = $upl;
$_SESSION['all'] = $all;
$_SESSION['drt'] = $drt;


if ($upl == $email) {
 
  redirect("./error");
 
} else {


$tranref = "DLAPT-".date("Y").rand(0, 99999999);



$curl = curl_init();

$customer_email = $email;
$amount = $all;  
$currency = "NGN";
$txref = $tranref; // ensure you generate unique references per transaction.
$PBFPubKey = "FLWPUBK_TEST-050f3bacfc7b7d0e6a2a572af4bf11ce-X"; // get your public key from the dashboard.
$redirect_url = "https://dotlive.com.ng/./pay";


curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.ravepay.co/flwv3-pug/getpaidx/api/v2/hosted/pay",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode([
    'amount'=>$amount,
    'customer_email'=>$customer_email,
    'currency'=>$currency,
    'txref'=>$txref,
    'PBFPubKey'=>$PBFPubKey,
    'redirect_url'=>$redirect_url
  ]),
  CURLOPT_HTTPHEADER => [
    "content-type: application/json",
    "cache-control: no-cache"
  ],
));

$response = curl_exec($curl);
$err = curl_error($curl);

if($err){
  // there was an error contacting the rave API
  redirect("./payerror");
  die('Curl returned error: ' . $err);
}

$transaction = json_decode($response);

if(!$transaction->data && !$transaction->data->link){
  // there was an error from the API
  print_r('API returned error: ' . $transaction->message);
}

// redirect to page so User can pay
// uncomment this line to allow the user redirect to the payment page
header('Location: ' . $transaction->data->link);
}
}
?>