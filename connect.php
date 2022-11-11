<?php
$servername = "database-1.c3d51midiysu.us-east-1.rds.amazonaws.com";
$username = "admin";
$password = "12345678";
$dbname = "shoes";

//create connection
$link = new mysqli($servername,$username,$password,$dbname);

?>
<?php session_start(); ?>