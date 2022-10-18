<?php
include("../../Model/dbConnection.php");

$sql = $pdo->prepare(
    "SELECT * FROM `hospital_location` 
    "
);
$sql->execute();
$hospitalInfo = $sql->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// var_export($hospitalInfo);
// echo $hospitalInfo[0]["hospital_id"];
// echo $hospitalInfo[0]["hospital_name"];
// echo $hospitalInfo[0]["address"];
// echo $hospitalInfo[0]["email"];
// echo $hospitalInfo[0]["contact"];
// echo $hospitalInfo[0]["google_map_image"];



