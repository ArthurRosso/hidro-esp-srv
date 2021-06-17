<?php 

// Error handling
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("config.php");

$username = $_POST['username'];
$mac = $_POST['mac'];

$result = pg_query($link, $sql);

$sql = "INSERT INTO USER_MAC (username, mac) VALUES ('$username', '$mac');";

pg_query($link, $sql);

setcookie("mac", $mac);
echo"<script language='javascript' type='text/javascript'>alert('Login efetuado com sucesso');window.location.href='index.php';</script>";

?>