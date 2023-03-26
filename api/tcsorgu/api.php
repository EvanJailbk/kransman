<?php

header("Content-Type: application/json; utf-8;");

include "../../server/authcontrol.php";

$link = new mysqli("localhost", "root", "", "101m");

ini_set("display_errors", 0);
error_reporting(0);

if (isset($_POST)) {
    $tc = htmlspecialchars($_POST["tc"]);
    $sql = "";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "$tc");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $adres = curl_exec($ch);
    curl_close($ch);
    if (!empty($tc)) {
        $sql = "SELECT * FROM 101m WHERE TC=?";
        $result = $link->prepare($sql);
        $result->bind_param("s", $tc);
        $result->execute();
        $result = $result->get_result();        
    }  else {
            echo json_encode(["success" => "false", "message" => "param error"]);
            die();
    }

    if (!$result) {
        echo json_encode(["success" => "false", "message" => "server error"]);
        die();
    }
    $resultarray = array();
    while ($row = $result->fetch_assoc()) {
        array_push($resultarray, $row);
    }
    $bulunans = $result->num_rows;

    if ($bulunans < 1) {
        echo json_encode(["success" => "false", "message" => "not found"]);
        die();
    }

    echo json_encode(["success" => "true", "number" => $bulunans, "data" => $resultarray, 'adres' => json_encode($adres)]);
    die();
} else {
    echo json_encode(["success" => "false", "message" => "request error"]);
    die();
}

