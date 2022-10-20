<?php
include("../../Model/dbConnection.php");
if(isset($_POST["searchText"])){
    $search = $_POST["searchText"];
    
    $sql = $pdo->prepare("SELECT * FROM doctor WHERE speciality = :search");
    $sql->bindValue(":search",$search);
    $sql->execute();
    $searchList = $sql->fetchAll(PDO::FETCH_ASSOC);
    
    echo json_encode($searchList);

    // SELECT doctor_name,profile_photo,speciality,date,startTime,endTime
//     FROM doctor
//     LEFT JOIN date
//     ON doctor.id = date.doctor_id WHERE date.startTime != 'NULL' AND doctor.speciality = "Neurology" GROUP BY doctor_name;
}

?>