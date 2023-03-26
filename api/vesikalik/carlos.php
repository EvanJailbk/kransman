<?php
$auth_key = "carlos1235";

if ($_GET['auth_key'] != $auth_key) {
      echo json_encode(array("siktir git ( esco )"));
      die();
}


header("Content-Type: application/json; Charset-UTF-8");

$Idenity = $_GET["tc"];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://91.151.89.177/api/vesikalik/brez.php?tc=$Idenity&auth_key=brezvesika");
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