<?php
include "../Model/dbConnection.php";

$sql = $pdo->prepare(
    "SELECT * FROM `hospital_location` 
    "
);
$sql->execute();
$hospitalInfo = $sql->fetchAll(PDO::FETCH_ASSOC);




