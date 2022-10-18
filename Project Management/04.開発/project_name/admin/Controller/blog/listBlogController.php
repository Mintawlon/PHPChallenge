<?php
include "../Model/dbConnection.php";
//for admin user name 
$sql = $pdo->prepare("SELECT * FROM blog");

$sql->execute();
$blogList = $sql->fetchAll(PDO::FETCH_ASSOC);
