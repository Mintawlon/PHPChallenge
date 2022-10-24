<?php

// echo "OK";
session_start();

include "../Model/dbConnection.php";

$rowLimit = 10;
$page = (isset($_GET["page"])) ? $_GET["page"] : 1 ;
$startPage = ($page-1)*$rowLimit;

//get doctor info
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = $pdo->prepare(
        "SELECT id,doctor_name,profile_photo,speciality,age FROM `doctor` WHERE id=:id
        "
    );
    $sql->bindValue(":id", $id);
    $sql->execute();
    $doctorInfo = $sql->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION["doctorInfo"] = $doctorInfo;
    $id = $doctorInfo[0]["id"];
    $doctorName = $doctorInfo[0]["doctor_name"];
    header("Location: ../View/date.php");
}


//display date info
$sql = $pdo->prepare(
       
        "SELECT doctor_name,age,speciality,date,startTime,endTime
        FROM doctor
        LEFT JOIN date
        ON doctor.id = date.doctor_id WHERE date.startTime != 'NULL'  LIMIT  $startPage,$rowLimit ; 
    "
);
$sql->execute();
$dateInfo = $sql->fetchAll(PDO::FETCH_ASSOC);


// Pagination
$sql = $pdo->prepare(
    "SELECT COUNT(id) As total FROM `date` 
    "
);
$sql->execute();
$totalRecord = $sql->fetchAll(PDO::FETCH_ASSOC) [0]["total"];

$totalPages = ceil($totalRecord/$rowLimit);

if (isset($_POST["dateadd"])) {

    $doctor_id  = $_SESSION["doctorInfo"][0]["id"];
    $name       = $_SESSION["doctorInfo"][0]["doctor_name"];
    $speciality = $_SESSION["doctorInfo"][0]["speciality"];
    $date      = $_POST["date"];
    $startTime = $_POST["startTime"];
    $endTime   = $_POST["endTime"];

    $sql = $pdo->prepare(
        "INSERT INTO 
     date (
        doctor_id,
        date,
        startTime,
        endTime,
        create_date
    ) 
    VALUES 
    (
        :doctor_id,
        :date,
        :startTime,
        :endTime,
        :createdDate
    );"

    );
    $sql->bindValue(":doctor_id", $doctor_id);
    $sql->bindValue(":date", $date);
    $sql->bindValue(":startTime", $startTime);
    $sql->bindValue(":endTime", $endTime);
    $sql->bindValue(":createdDate", date("Y/m/d"));

    $sql->execute();

    

    // header("Location: ../View/date.php");



}
