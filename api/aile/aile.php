<?php
header("Content-Type: application/json; Charset-UTF-8");

$Idenity = $_POST["TcNo"];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://api.lvous.us/AileSorgu.php?TC=$Idenity&hash=fb7bfe566c4a03ff4835e99471ccce8796a1e2f8d766778c49512a9f2e1f8236");
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