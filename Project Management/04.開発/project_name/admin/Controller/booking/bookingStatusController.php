<?php
include "../Model/dbConnection.php";
//pending list
$sql = $pdo->prepare("SELECT * FROM booking where status=0");
$sql->execute();
$patientBookingList = $sql->fetchAll(PDO::FETCH_ASSOC);

//approved list
$sql = $pdo->prepare("SELECT * FROM booking where status=1");
$sql->execute();
$approved = $sql->fetchAll(PDO::FETCH_ASSOC);

//reject List
$sql = $pdo->prepare("SELECT * FROM booking where status=2");
$sql->execute();
$rejected = $sql->fetchAll(PDO::FETCH_ASSOC);
