<?php

// Error handling
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("config.php");

// // create curl resource
// $ch = curl_init();

// // set url
// curl_setopt($ch, CURLOPT_URL, "192.168.0.10/salvaMedicao"); // colocar o ip da esp

// //return the transfer as a string
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// // $output contains the output string
// $output = curl_exec($ch);

// // close curl resource to free up system resources
// curl_close($ch);

$obj = json_decode(file_get_contents('php://input'));

date_default_timezone_set("America/Sao_Paulo");
$hora = date("H:i:s");
$dia = date("d/m/Y");

$sql = "INSERT INTO MEDICAO (mac, litros, hora, dia) VALUES ('$obj->Mac', '$obj->Litros', '$hora', '$dia');";

pg_query($link, $sql);

?>