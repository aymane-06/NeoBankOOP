<?php

$db_user="root";
$db_server="localhost";
$db_pass="";
$db_name="neobank";

try{
$dsn="mysql:host=$db_server;dbname=$db_name";
$pdo=new PDO($dsn, $db_user, $db_pass);
// echo"connected";
}catch(PDOException $e){
   echo "error";
}


?>