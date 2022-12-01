<?php
function getPageSSL($url){
    $ch =  curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt($ch, CURLOPT_TIMEOUT, 3000);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json'));
    $payout_data = curl_exec($ch);
    return $payout_data;
}
$data = getPageSSL("https://beautify.house3d.net/api/material-type?per-page=100");
header('Content-Type: application/json');
echo $data;
