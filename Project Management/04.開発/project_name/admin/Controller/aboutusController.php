<?php

include("../Model/dbConnection.php");

// Add About Us Info
if(isset($_POST["update"])){
    $text1 = $_POST["text1"];
    $image1 = $_POST["image1"];
    $header = $_POST["header"];
    $text2 = $_POST["text2"];
    $image2 = $_POST["image2"];


    $sql = $pdo->prepare(
        "INSERT INTO 
        about_us (
        text1,
        image1,
        header,
        text2,
        image2,
        create_date
        ) 
        VALUES 
        (
        :text1,
        :image1,
        :header,
        :text2,
        :image2,
        :createdDate
        );"
    );
    $sql->bindValue(":text1",$text1);
    $sql->bindValue(":image1",$image1);
    $sql->bindValue(":header",$header);
    $sql->bindValue(":text2",$text2);
    $sql->bindValue(":image2",$image2);
    $sql->bindValue(":createdDate", date("Y/m/d"));


    $sql->execute();
    header("Location: ../View/about.php");
}
// Add Privacy Policy Info

if(isset($_POST["update2"])){
    $text3 = $_POST["policy_text"];

    $sql = $pdo->prepare(
        "INSERT INTO 
        policy (
        policy_text
        ) 
        VALUES 
        (
        :policy_text
        );"
    );
    $sql->bindValue(":policy_text",$text3);


    $sql->execute();
    header("Location: ../View/about.php");
}
?>