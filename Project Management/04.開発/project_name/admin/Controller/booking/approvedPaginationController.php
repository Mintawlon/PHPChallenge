<?php
include "../Model/dbConnection.php";

$rowLimit = 1;
$page = (isset($_GET["page"])) ? $_GET["page"] : 1 ;
$startPage = ($page-1)*$rowLimit;

//approved list
$sql = $pdo->prepare("SELECT * FROM booking WHERE status=1 LIMIT  $startPage,$rowLimit");
$sql->execute();
$approved = $sql->fetchAll(PDO::FETCH_ASSOC);

// Pagination
$sql = $pdo->prepare(
    "SELECT COUNT(id) As total FROM `booking` WHERE status=1
    "
);
$sql->execute();
$totalRecord = $sql->fetchAll(PDO::FETCH_ASSOC) [0]["total"];

$totalPages = ceil($totalRecord/$rowLimit);
