<?php


$auth_key = "lexas";

if ($_GET['auth_key'] != $auth_key) {
      echo json_encode(array("Key Yanlış"));
      die();
}

header("Content-Type: application/json; utf-8;");

$Idenity = htmlspecialchars($_GET["tc"]);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://185.237.14.84/vesikaehliyet.php?tc=$Idenity&hash=brezyarramiyesin");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

echo $response;
?>