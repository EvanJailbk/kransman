<?php

include "../../server/authcontrol.php";

header('Content-Type: application/json');


$Idenity = $_GET["tc"];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://213.142.151.72/api/vesikalik/brez.php?tc=$Idenity&auth_key=lexperbrez");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

echo $response;