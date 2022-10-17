<?php
include "../Model/dbConnection.php";

// get doctor info
$sql = $pdo->prepare(
    "SELECT * FROM `doctor` 
    "
);
$sql->execute();
$doctorInfo = $sql->fetchAll(PDO::FETCH_ASSOC);
?>