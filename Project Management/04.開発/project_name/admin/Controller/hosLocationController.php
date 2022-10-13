<?php
include("../Model/dbConnection.php");

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


if(isset($_POST["hospitalInfo"])){
    $hospitalName = $_POST["hospitalName"];
    $hospitalAddress  = $_POST["hospitalAddress"];
    $hospitalPhone  = $_POST["hospitalPhone"];
    $hospitalEmail  = $_POST["hospitalEmail"];
    $hospitalMap  = $_POST["hospitalMap"];

    $sql = $pdo->prepare(
        "INSERT INTO 
        hospital_location (
        hospital_name,
        address,
        email,
        contact,
        google_map_image) 
        VALUES 
        (
        :name,
        :address,
        :email,
        :contact,
        :map); 
        "
    );
    $sql->bindValue(":name",$hospitalName);
    $sql->bindValue(":address",$hospitalAddress);
    $sql->bindValue(":email",$hospitalEmail);
    $sql->bindValue(":contact",$hospitalPhone);
    $sql->bindValue(":map",$hospitalMap);

    $sql->execute();
}
