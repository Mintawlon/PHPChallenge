<?php
session_start();
include "../Model/dbConnection.php";

// Get doctor info for Update Form
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = $pdo->prepare(
        "SELECT * FROM `doctor` WHERE id=:id
        "
    );
    $sql->bindValue(":id", $id);
    $sql->execute();
    $doctorInfo = $sql->fetchAll(PDO::FETCH_ASSOC);

    $_SESSION["doctorInfo"] = $doctorInfo;
    header("Location: ../View/doctorEdit.php");
}
// Update Doctor Information
if (isset($_POST["updateDoctorInfo"])) {
    $id = $_POST["updateDoctorId"];
    $name = $_POST["updateDoctorName"];
    $age = $_POST["updateDoctorAge"];
    $gender = $_POST["updateDoctorGender"];
    $speciality = $_POST["updateDoctorSpeciality"];
    $phone = $_POST["updateDoctorPhone"];
    $photo = $_POST["updateDoctorPhoto"];

    if ($photo == "") {
        $sql = $pdo->prepare(
            "UPDATE
            doctor SET 
            doctor_name=:name,
            speciality = :speciality,
            age=:age,
            contact=:contact,
            gender=:gender,
            update_date=:updatedDate WHERE id=:id"
        );
    } else {
        $sql = $pdo->prepare(
            "UPDATE
            doctor SET 
            doctor_name=:name,
            speciality = :speciality,
            age=:age,
            contact=:contact,
            gender=:gender,
            profile_photo=:photo,
            update_date=:updatedDate WHERE id=:id"
        );
        $sql->bindValue(":photo", $photo);
    }
    $sql->bindValue(":id", $id);
    $sql->bindValue(":name", $name);
    $sql->bindValue(":speciality", $speciality);
    $sql->bindValue(":age", $age);
    $sql->bindValue(":contact", $phone);
    $sql->bindValue(":gender", $gender);
    $sql->bindValue(":updatedDate", date("Y/m/d"));
    $sql->execute();
    header("Location: ../View/doctor.php");
}
// Remove Doctor
if(isset($_GET["delId"])){
    $delId = $_GET["delId"];
    $sql = $pdo->prepare(
        "DELETE FROM `doctor` WHERE id=:id
        "
    );
    $sql->bindValue(":id",$delId);
    $sql->execute();
    header("Location: ../View/doctor.php");
}
