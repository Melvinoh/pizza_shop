<?php

$consumerKey = "3yNtTg2r0dgPyuzh01lHbGlciH02xx9f";
$consumerSecret = "jytNrzmYtoPnWgXe";
$access_token_url = "https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials";

$headers = ['content-Type:application/json; charset-utf8'];
$curl = curl_init($access_token_url);
curl_setopt($curl, CURLOPT_HTTPHEADER,$headers);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($curl, CURLOPT_HEADER, FALSE);
curl_setopt($curl, CURLOPT_USERPWD, $consumerKey . ':' . $consumerSecret);

$results = curl_exec($curl);
$status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
$results = json_decode(($results));
$access_token = $results->access_token;
curl_close($curl);
echo $access_token;

if ($_GET['q'] == "mpesa_payment"){
    $processRequestUrl = "https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest";
    $callBackUrl = "";
    $PassKey = "bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919";
    $BussinessShortCode = 174379;
    $TimeStamp = date('YmdHis');
    $Password = base64_encode($BussinessShortCode . $PassKey .$TimeStamp);
    $phone = "254728318369";
    $money = "10";
    $PartyA = $phone;
    $PartyB = "254708374149";
    $AccountRefernce = "PIZZA_SHOP";
    $TransactionDesc="pizzas order payment";
    $Amount = $money;


    $stkpushheader = ['Content-Type:application/json', 'Authorization:Bearer '. $access_token];
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $processRequestUrl);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $stkpushheader);

    $curl_post_data = array(
        "BussinessShortCode" => 174379,
        'Password' => $Password,
        'Timestamp' => $TimeStamp,
        'Amount' => $Amount,
        'PartyA' => $PartyA,
        'PartyB' => $BussinessShortCode,
        'phone number' => $PartyA,
        'callback' => $callBackUrl,
        'AccountReference'=> $AccountRefernce,
        'TransctionDesc' => $TransactionDesc
    );

    $data_string = json_encode($curl_post_data);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,TRUE);
    curl_setopt($curl, CURLOPT_POST,TRUE);
    curl_setopt($curl, CURLOPT_POSTFIELDS , $data_string);
    
    echo $curl_response = curl_exec($curl);






}




?>