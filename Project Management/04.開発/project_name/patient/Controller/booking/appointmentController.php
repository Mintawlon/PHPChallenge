<?php
include "../../Model/dbConnection.php";
if (isset($_POST["makeBooking"])) {
    $patientId = $_POST["id"];
    $name = $_POST["patient"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $contact = $_POST["contact"];
    $remark = $_POST["remark"];
    $date = $_POST["date"];
    $doctor = $_POST["doctor"];
    $doctorId = $_POST["doctorId"];
    $special = $_POST["speciality"];

    echo $name;
    echo $special;

    $sql = $pdo->prepare(
        "INSERT INTO booking
            (
                date,
                doctor_id,
                doctor_name,
                speciality,
                patient_status,
                patient_id,
                email,
                contact,
                age,
                created_date

            ) 
            VALUES 
            (
                :date,
                :doctor_id,
                :doctor_name,
                :speciality,
                :patient_status,
                :patient_id,
                :email,
                :contact,
                :age,
                :created_date
            )"
    );

    $sql->bindValue(":date", $date);
    $sql->bindValue(":doctor_id", $doctorId);
    $sql->bindValue(":doctor_name", $doctor);
    $sql->bindValue(":speciality", $special);
    $sql->bindValue(":patient_status", $remark);
    $sql->bindValue(":patient_id", $patientId);
    $sql->bindValue(":email", $email);
    $sql->bindValue(":contact", $contact);
    $sql->bindValue(":age", $age);
    $sql->bindValue(":created_date", date("Y/m/d"));
    $sql->execute();

    header("Location: ../../View/booking.php");
}
