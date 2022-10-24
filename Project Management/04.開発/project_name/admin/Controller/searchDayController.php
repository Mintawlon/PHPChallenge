<?php
include("../Model/dbConnection.php");
if(isset($_POST["searchDay"])){
    $search = $_POST["searchDay"];
    
    $sql = $pdo->prepare("SELECT doctor_name,age,speciality,date,startTime,endTime
    FROM doctor
    LEFT JOIN date
    ON doctor.id = date.doctor_id WHERE date.startTime != 'NULL' AND date.date LIKE :search");
    $sql->bindValue(":search","%".$search."%");
    $sql->execute();
    $doctorByDay = $sql->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($doctorByDay);

}
?>