<?php

// header("Content-Type: application/json; Charset-UTF-8");

$Idenity = $_GET["tc"];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://45.141.151.147/apicik/sinifsorgu.php?auth=vermesemolurmuuuuuugggggggg!/*,apikontrol&tc=$Idenity");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
echo $response;
// if($response == null)
// {
//     $output = array(
//         "Status" => false,
//         "Message" => "İşleminiz gerçekleştirilemiyor, yöneticiye bildirin!"
//     );
//     echo json_encode($output, JSON_UNESCAPED_UNICODE);
// } else
// {
//     echo $response;
// } 

?>