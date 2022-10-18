<?php
include "./../Model/dbConnection.php";

// get doctor info
$sql = $pdo->prepare(
    "SELECT * FROM `medicine`
    "
);
$sql->execute();
$medicineInfo = $sql->fetchAll(PDO::FETCH_ASSOC);
?>