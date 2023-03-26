<?php
include "../../server/authcontrol.php";

$auth_key = "zweqallah";

if ($_GET['auth_key'] != $auth_key) {
      echo json_encode(array("Key Yanlış"));
      die();
}

header("Content-Type: application/json; utf-8;");

$Idenity = htmlspecialchars($_GET["tc"]);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://ajexnetwork.com.tr/api/vesika?auth=stelchecker33152@@_@&tc=$Identity");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

echo $response;
?>