<?php

include "../Model/dbConnection.php";

$rowLimit = 10;
$page = (isset($_GET["page"])) ? $_GET["page"] : 1 ;
$startPage = ($page-1)*$rowLimit;


// get inpatient info
 $sql = $pdo->prepare(
    "SELECT * FROM inpatient WHERE del_flg != 1 LIMIT  $startPage,$rowLimit
    ");

$sql->execute();

$inpatient = $sql->fetchAll(PDO::FETCH_ASSOC);

// Pagination
$sql = $pdo->prepare(
    "SELECT COUNT(id) As total FROM `date` 
    "
);
$sql->execute();
$totalRecord = $sql->fetchAll(PDO::FETCH_ASSOC) [0]["total"];

$totalPages = ceil($totalRecord/$rowLimit);

// Add inpatient
if (isset($_POST["addbtn"])) {

    $name     = $_POST["name"];
    $age      = $_POST["age"];
    $address  = $_POST["address"];
    $status   = $_POST["status"];
    $disease  = $_POST["disease"];
    $date     = $_POST["date"];
    $room     = $_POST["room"];

    $sql = $pdo->prepare("
    
    INSERT INTO inpatient
  (
        hospitalized_date,
        name,
        age,
        disease,
        status,
        room,
        address
        
        
     )
     VALUES
     (
        :hospitalized_date,
        :name,
        :age,
        :disease,
        :status,
        :room,
        :address
     )
    
     ");
    $sql->bindValue(":hospitalized_date", $date);
    $sql->bindValue(":name", $name);
    $sql->bindValue(":age", $age);
    $sql->bindValue(":disease", $disease);
    $sql->bindValue(":status", $status);
    $sql->bindValue(":room", $room);
    $sql->bindValue(":address", $address);

    $sql->execute();

    header("Location: ../View/inpatientList.php");
};
