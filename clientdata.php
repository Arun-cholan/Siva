<?php
$apiBookingInfo = $_POST['apiBookingInfo'];
$apiurl = "http://localhost:61165/api/CholanAPI/InsertBookingForm/";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$apiurl);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $apiBookingInfo);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERPWD, 'CholanToursUserAuthentication' . ':' . 'CholanSathyaNitha!23');
$headers = array();
$headers[] = 'X-ApiKey: Cholan!23';
$headers[] = 'Content-Type: application/json';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$server_output = curl_exec($ch);
curl_close ($ch);
echo json_encode($server_output);

?>