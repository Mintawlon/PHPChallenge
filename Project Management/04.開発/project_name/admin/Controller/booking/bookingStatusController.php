<?php
include "../Model/dbConnection.php";
$sql = $pdo->prepare("SELECT * FROM booking where status=0");
$sql->execute();
$patientBookingList = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $pdo->prepare("SELECT * FROM booking where status=1");
$sql->execute();
$approved = $sql->fetchAll(PDO::FETCH_ASSOC);
