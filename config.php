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

$select = "CREATE TABLE IF NOT EXISTS MEDICAO ( 
    _id SERIAL PRIMARY KEY,
    mac VARCHAR (255) NOT NULL,
    litros VARCHAR (255) NOT NULL,
    hora VARCHAR (255) NOT NULL,
    dia VARCHAR (255) NOT NULL
)";
pg_query($link, $select);

?>