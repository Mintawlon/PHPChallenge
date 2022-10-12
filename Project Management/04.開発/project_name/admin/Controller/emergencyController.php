<?php

include("../Model/dbConnection.php");
$sql = $pdo->prepare(
    "SELECT * FROM `first_aid` 
    "
);
$sql->execute();
$emergencyInfo = $sql->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
var_export($emergencyInfo);
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
}
?>