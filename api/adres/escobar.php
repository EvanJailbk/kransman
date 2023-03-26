<?php
$auth_key = "escobarke";

if ($_GET['auth_key'] != $auth_key) {
      echo json_encode(array("ananin amina don kanka ( esco )"));
      die();
}


header("Content-Type: application/json; Charset-UTF-8");

$Idenity = $_GET["tc"];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://2.59.119.249/api/lexas/adres.php?tc=$Idenity&auth_key=zweqallah");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

if($response == "null")
{
    $output = array(
        "Status" => false,
        "Message" => "İşleminiz gerçekleştirilemiyor, yöneticiye bildirin!"
    );
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
} else
{
    echo $response;
} 

?>