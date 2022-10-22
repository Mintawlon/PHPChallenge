<?php
include "../Model/dbConnection.php";

$rowLimit = 10;
$page = (isset($_GET["page"])) ? $_GET["page"] : 1 ;
$startPage = ($page-1)*$rowLimit;

// get article info
$sql = $pdo->prepare(
<<<<<<< HEAD
    "SELECT * FROM `article` WHERE del_flg != 1
=======
    "SELECT * FROM `article` LIMIT  $startPage,$rowLimit
>>>>>>> origin/main
    "
);
$sql->execute();
$homeArticleInfo = $sql->fetchAll(PDO::FETCH_ASSOC);

// Pagination
$sql = $pdo->prepare(
    "SELECT COUNT(id) As total FROM `date` 
    "
);
$sql->execute();
$totalRecord = $sql->fetchAll(PDO::FETCH_ASSOC) [0]["total"];

$totalPages = ceil($totalRecord/$rowLimit);
?>