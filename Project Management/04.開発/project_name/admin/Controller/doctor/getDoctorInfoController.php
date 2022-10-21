<?php
include "../Model/dbConnection.php";


$rowLimit = 5;
$page = (isset($_GET["page"])) ? $_GET["page"] : 1 ;
$startPage = ($page-1)*$rowLimit;

// get doctor info
$sql = $pdo->prepare(
    "SELECT * FROM `doctor`  LIMIT  $startPage,$rowLimit  ;
    "
);
$sql->execute();
$doctorInfo = $sql->fetchAll(PDO::FETCH_ASSOC);

// Pagination
$sql = $pdo->prepare(
    "SELECT COUNT(id) As total FROM `doctor` 
    "
);
$sql->execute();
$totalRecord = $sql->fetchAll(PDO::FETCH_ASSOC) [0]["total"];

$totalPages = ceil($totalRecord/$rowLimit);
?>