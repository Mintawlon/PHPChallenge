<?php

include "../Model/dbConnection.php";


$sql = $pdo->prepare("

        SELECT * FROM inpatient
    ");

$sql->execute();

$inpatient = $sql->fetchAll(PDO::FETCH_ASSOC);

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
        name,
        age,
        address,
        status,
        disease,
        hospitalized_date,
        room
        
        
     )
     VALUES
     (
        :name,
        :age,
        :address,
        :status,
        :disease,
        :hospitalized_date,
        :room
     )
    
     ");

    $sql->bindValue(":name", $name);
    $sql->bindValue(":age", $age);
    $sql->bindValue(":address", $address);
    $sql->bindValue(":status", $status);
    $sql->bindValue(":disease", $disease);
    $sql->bindValue(":hospitalized_date", $date);
    $sql->bindValue(":room", $room);

    $sql->execute();
    
    header("Location: ../View/inpatientList.php");


};

