<?php

include("../Model/dbConnection.php");

// get article info
$sql = $pdo->prepare(
    "SELECT * FROM `first_aid` 
    "
);
$sql->execute();
$emergencyInfo = $sql->fetchAll(PDO::FETCH_ASSOC);

// Add Tab
if(isset($_POST["addEmergencyTab"])){
    $header = $_POST["header"];
    $para = $_POST["paragraph"];
    $sql = $pdo->prepare(
        "INSERT INTO 
        emergency_page_header (
        header,
        text
        ) 
        VALUES 
        (
        :header,
        :paragraph
        );"
    );
    $sql->bindValue(":header",$header);
    $sql->bindValue(":paragraph",$para);

    $sql->execute();
    header("Location: ../View/emergency.php");
}
// Add Article
if(isset($_POST["addEmergency"])){
    $image = $_POST["emergencyImage"];
    $header = $_POST["emergencyHeader"];
    $paragraph = $_POST["emergencyParagraph"];  

    $sql = $pdo->prepare(
        "INSERT INTO 
        first_aid (
        article_header,
        article_text,
        article_image
        ) 
        VALUES 
        (
        :header,
        :paragraph,
        :image
        );"
    );
    $sql->bindValue(":header",$header);
    $sql->bindValue(":paragraph",$paragraph);
    $sql->bindValue(":image",$image);

    $sql->execute();
    header("Location: ../View/emergency.php");
}
?>