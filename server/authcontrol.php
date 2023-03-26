<?php

error_reporting(0);
ini_set("display_errors", 0);

session_start();

if (!isset($_SESSION["id"]) && !isset($_SESSION["k_adi"])) {
    header("Content-Type: application/json; utf-8;");
    echo json_encode(["success" => "false", "message" => "ATANIZI SIKERIM OROSPU COCUKLARI"]);
    die();
}

?>