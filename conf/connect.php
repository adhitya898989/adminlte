<?php 
$host = "localhost";
$pass = "";
$user = "root";
$db = "things";
$connect = mysqli_connect($host, $user, $pass, $db);

$table = "inventori";

if(!$connect){
    die('The connection is not successful');
} 

?>