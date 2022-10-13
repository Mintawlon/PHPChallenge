<?php
$hostname = "localhost";
<<<<<<< HEAD
$port = 3306;
$dbname = "hospital_project";
$username = "root";
$password = "";

$pdo = new PDO(

    "mysql:host=$hostname;port=$port;dbname=$dbname",
    $username,
    $password
);

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

=======
$port = "3306";
$dbname = "project_name";
$username ="root";
$password = "";
$pdo = new PDO(
    "mysql:host=$hostname;port=$port;dbname=$dbname", 
$username, $password);
?>
>>>>>>> origin/main
