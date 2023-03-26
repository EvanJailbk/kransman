<?php
header("Content-Type: application/json; Charset-UTF-8");
include "../../server/authcontrol.php";

$Idenity = $_POST["tc"];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://217.195.202.204/Modules/Ikametgah.php?hash=lxKGRM19AsX&Idenity=$Idenity");
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
	$anan = json_decode($response);
	echo $response;
    //echo json_encode(["success" => "true", "data" =>$anan]);
} 

?>