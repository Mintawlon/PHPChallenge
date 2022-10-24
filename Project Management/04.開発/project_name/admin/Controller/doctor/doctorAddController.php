<?php
include "../../Model/dbConnection.php";

// Add Doctor Info
if (isset($_POST["doctorAdd"])) {
    $name = $_POST["doctorName"];
    $age = $_POST["doctorAge"];
    $gender = $_POST["doctorGender"];
    $speciality = $_POST["doctorSpeciality"];
    $phone = $_POST["doctorPhone"];
    $photo = $_POST["doctorPhoto"];
    $_SESSION["doctorName"]= $name;
    
    $sql = $pdo->prepare(
        "INSERT INTO 
        doctor (
        doctor_name,
        speciality,
        age,
        gender,
        contact,
        profile_photo,
        create_date
        ) 
        VALUES 
        (
        :name,
        :speciality,
        :age,
        :gender,
        :phone,
        :photo,
        :createdDate
        );"
    );
    $sql->bindValue(":name", $name);
    $sql->bindValue(":age", $age);
    $sql->bindValue(":gender", $gender);
    $sql->bindValue(":speciality", $speciality);
    $sql->bindValue(":phone", $phone);
    $sql->bindValue(":photo", $photo);
    $sql->bindValue(":createdDate", date("Y/m/d"));

    $sql->execute();
    header("Location: ../../View/doctor.php");
}else{
    echo "<script>
    alert ('Error');
    </script>";
}
