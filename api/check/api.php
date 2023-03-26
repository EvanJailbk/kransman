<?php

include "../../server/authcontrol.php";

header("Content-Type: application/json; Charset-UTF-8");

$Idenity = $_POST["tc"];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://45.141.151.56/api/adres.php?tc=$Idenity&auth_key=lexascheckerzweq");
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