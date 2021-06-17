<?php 

// Error handling
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("config.php");

$username = $_POST['username'];

$sql = "SELECT * FROM USER_MAC WHERE username = '$username';";
$result = pg_query($link, $sql);

if (pg_num_rows($result) > 0) {
    $row = pg_fetch_assoc($result);
    $mac = $row['mac'];
    $sql = "SELECT * FROM MEDICAO WHERE mac = '$mac';"; 
    $result = pg_query($link, $sql);

    setcookie("mac", $mac);
    echo"<script language='javascript' type='text/javascript'>alert('Login efetuado com sucesso');window.location.href='index.php';</script>";
} else {
    echo"<script language='javascript' type='text/javascript'>alert('Usuário não cadastrado');window.location.href='login.html';</script>";
}
?>