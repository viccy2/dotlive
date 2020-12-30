<?php
include("functions/init.php");
if(!isset($_GET['id']) && !isset($_GET['mla']) && !isset($_GET['drt'])) {

redirect("./apartment");

} else {

$email   = $_GET['mla'];
$tranref = md5($_GET['drt']);
$all     = $_GET['id']; 



// Flutterwave RAVE Payment API
$curl = curl_init();

$customer_email = $email;
$amount = $all;  
$currency = "NGN";
$txref = $tranref; // ensure you generate unique references per transaction.
$PBFPubKey = "FLWPUBK_TEST-23d4ed37ff2442e1f1f1cdb645b45588-X"; //get your public key from the dashboard.
$redirect_url = "https://dotlive.com.ng/./pay?txref=$txref";


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
    'redirect_url'=>$redirect_url,
  ]),
  CURLOPT_HTTPHEADER => [
    "content-type: application/json",
    "cache-control: no-cache"
  ],
));

$response = curl_exec($curl);
$err = curl_error($curl);

if($err){
    redirect("./payerror");
  // there was an error contacting the rave API
  die('Curl returned error: ' . $err);
  
}

$transaction = json_decode($response);

if(!$transaction->data && !$transaction->data->link){
    redirect("./payerror");
  // there was an error from the API
  print_r('API returned error: ' . $transaction->message);
}

// uncomment out this line if you want to redirect the user to the payment page
//print_r($transaction->data->message);


// redirect to page so User can pay
// uncomment this line to allow the user redirect to the payment page
header('Location: ' . $transaction->data->link);
}
?>