<?php 
$user = 'admin';
$password= 'admin';
$server='localhost';
$database='school';

$database=mysqli_connect($server , $password, $user , $database)or die("no se puede conectar a la base de datos");


mysqli_query($database, "SET NAMES 'utf8'");

?>