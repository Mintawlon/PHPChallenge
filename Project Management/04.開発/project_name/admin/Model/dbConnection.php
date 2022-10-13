<?php
$hostname = "localhost";
$port = "3306";
$dbname = "project_name";
$username ="root";
$password = "";
$pdo = new PDO(
    "mysql:host=$hostname;port=$port;dbname=$dbname", 
$username, $password);
?>
