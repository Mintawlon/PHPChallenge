<?php
include("../Model/dbConnection.php");
$sql = $pdo->prepare(
    "SELECT * FROM `first_aid` 
    "
);
$sql->execute();
$emergencyInfo = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $pdo->prepare(
    "SELECT header,text  FROM `emergency_page_header` 
    "
);
$sql->execute();
$emergencyTab = $sql->fetchAll(PDO::FETCH_ASSOC);

?>