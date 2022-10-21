<?php

include("../Model/dbConnection.php");

$rowLimit = 2;
$page = (isset($_GET["page"])) ? $_GET["page"] : 1 ;
$startPage = ($page-1)*$rowLimit;

// get article info
$sql = $pdo->prepare(
    "SELECT * FROM `first_aid` LIMIT  $startPage,$rowLimit ;
    "
);
$sql->execute();
$emergencyInfo = $sql->fetchAll(PDO::FETCH_ASSOC);

// Add Tab
if(isset($_POST["addEmergencyTab"])){
    $header = $_POST["header"];
    $para = $_POST["paragraph"];
    $sql = $pdo->prepare(
        "INSERT INTO 
        emergency_page_header (
        header,
        text,
        create_date
        ) 
        VALUES 
        (
        :header,
        :paragraph,
        :createdDate
        );"
    );
    $sql->bindValue(":header",$header);
    $sql->bindValue(":paragraph",$para);
    $sql->bindValue(":createdDate", date("Y/m/d"));

    $sql->execute();
    header("Location: ../View/emergency.php");
}
// Add Article
if(isset($_POST["addEmergency"])){
    $image = $_POST["emergencyImage"];
    $header = $_POST["emergencyHeader"];
    $paragraph = $_POST["emergencyParagraph"];  

    $sql = $pdo->prepare(
        "INSERT INTO 
        first_aid (
        article_header,
        article_text,
        article_image,
        create_date
        ) 
        VALUES 
        (
        :header,
        :paragraph,
        :image,
        :createdDate
        );"
    );
    $sql->bindValue(":header",$header);
    $sql->bindValue(":paragraph",$paragraph);
    $sql->bindValue(":image",$image);
    $sql->bindValue(":createdDate", date("Y/m/d"));

    $sql->execute();
    header("Location: ../View/emergency.php");
}

// Pagination
$sql = $pdo->prepare(
    "SELECT COUNT(id) As total FROM `first_aid` 
    "
);
$sql->execute();
$totalRecord = $sql->fetchAll(PDO::FETCH_ASSOC) [0]["total"];

$totalPages = ceil($totalRecord/$rowLimit);
?>

