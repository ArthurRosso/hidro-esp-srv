<?php

// Error handling
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/* Attempt to connect to PostgreSQL database */
$host = "127.0.0.1";
$port = "5432";
$dbname = "hidro-esp";
$user = "arthur";
$passwd = "";
$con_string = "host=$host port=$port dbname=$dbname user=$user password=$passwd sslmode=require";
$link = pg_connect($con_string);
 
// Check connection
if($link === false){
    echo ("Could not connect");
}

$sql = "CREATE TABLE IF NOT EXISTS MEDICAO ( 
            id SERIAL PRIMARY KEY,
            mac VARCHAR (255),
            litros VARCHAR (255),
            hora VARCHAR (255),
            dia VARCHAR (255)
        );";
pg_query($link, $sql);

$sql = "CREATE TABLE IF NOT EXISTS USER_MAC ( 
            id SERIAL PRIMARY KEY,
            username VARCHAR (255),
            mac VARCHAR (255)
        );";
pg_query($link, $sql);

?>