<?php

$consumerKey = "";
$consumerSecret = "";
$access_token_url = "";

$headers = ['content-Type:application/json; charset-utf8'];
$curl = curl_init($access_token_url);
curl_setopt($curl, CURLOPT_HTTPHEADER,$headers);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($curl, CURLOPT_HEADER, FALSE);
curl_setopt($curl, CURLOPT_HEADER, FALSE);
curl_setopt($curl, CURLOPT_USERPWD, $consumerKey . ':' . $consumerSecret);

$results = curl_exec($curl);
$status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
$results = json_decode(($results));

echo $access_token = $results->access_token;
curl_close($curl);




?>