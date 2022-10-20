<?php
include "../Model/dbConnection.php";

// get doctor info
$sql = $pdo->prepare(
    "SELECT * FROM `date` 
    "
);
$sql->execute();
$doctorDressingTime = $sql->fetchAll(PDO::FETCH_ASSOC);
?>