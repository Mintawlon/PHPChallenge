<?php
include("../Model/dbConnection.php");
$sql = $pdo->prepare(
    "SELECT * FROM `first_aid` 
    "
);
$sql->execute();
$emergencyInfo = $sql->fetchAll(PDO::FETCH_ASSOC);

?>