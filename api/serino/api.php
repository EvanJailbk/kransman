<?php

header("Content-Type: application/json; Charset-UTF-8");

$Idenity = $_POST["tc"];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://javexlordan.com/api/tcdetay.php?tc=$Idenity");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
echo $Idenity;
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