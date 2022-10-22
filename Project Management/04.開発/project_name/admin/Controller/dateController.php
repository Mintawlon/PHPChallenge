<?php

// echo "OK";
session_start();

include "../Model/dbConnection.php";

//get doctor info

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    // echo $id;

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

    // echo "$id,$name,$speciality,$age";
    // print_r($doctorInfo);
}

//display date info
$sql = $pdo->prepare(
       
        "SELECT doctor_name,age,speciality,date,startTime,endTime
        FROM doctor
        LEFT JOIN date
        ON doctor.id = date.doctor_id WHERE date.startTime != 'NULL' ; 
    "
);
$sql->execute();


$dateInfo = $sql->fetchAll(PDO::FETCH_ASSOC);
//  print_r($dateInfo);

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
        endTime
    ) 
    VALUES 
    (
        :doctor_id,
        :date,
        :startTime,
        :endTime
    );"

    );
    $sql->bindValue(":doctor_id", $doctor_id);
    $sql->bindValue(":date", $date);
    $sql->bindValue(":startTime", $startTime);
    $sql->bindValue(":endTime", $endTime);

    $sql->execute();

    // header("Location: ../View/date.php");
}
