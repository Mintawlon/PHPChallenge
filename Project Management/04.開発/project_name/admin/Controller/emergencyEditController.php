<?php
include("../Model/dbConnection.php");
session_start();

// Get Tab Info for Update
$sql = $pdo->prepare(
    "SELECT header,text FROM `emergency_page_header` 
    "
);
$sql->execute();
$emergencyTab = $sql->fetchAll(PDO::FETCH_ASSOC);
// Upadate Tab
if(isset($_POST["edit_tab"])){
    $newheader = $_POST["header"];
    $newpara = $_POST["paragraph"];

    $sql = $pdo->prepare(
        "UPDATE
        emergency_page_header SET 
        header=:header,
        text=:para,
        updated_date=:updatedDate"
    );
    $sql->bindValue(":header",$newheader);
    $sql->bindValue(":para",$newpara);
    $sql->bindValue(":updatedDate", date("Y/m/d"));

    $sql->execute();

    header("Location: ../View/editEmergency.php");
}

// Get article info for Update
if(isset($_GET["id"])){
    $id = $_GET["id"];
    $sql = $pdo->prepare(
        "SELECT * FROM `first_aid` WHERE id=:id
        "
    );
    $sql->bindValue(":id",$id);
    $sql->execute();
    $emergencyInfo = $sql->fetchAll(PDO::FETCH_ASSOC);
    echo "<pre>";
    var_export($emergencyInfo);

    $_SESSION["articleInfo"] = $emergencyInfo;
    header("Location: ../View/editEmergency.php");
}
// Update Article
if(isset($_POST["edit_article"])){
    $id = $_POST["article_id"];
    $image = $_POST["articleImage"];
    $newheader = $_POST["articleHeader"];
    $newpara = $_POST["articleText"];

    $sql = $pdo->prepare(
        "UPDATE
        first_aid SET 
        article_header=:header,
        article_text=:para,
        article_image=:image,
        updated_date=:updatedDate WHERE id=:id"
    );
    $sql->bindValue(":id",$id);
    $sql->bindValue(":header",$newheader);
    $sql->bindValue(":para",$newpara);
    $sql->bindValue(":image",$image);
    $sql->bindValue(":updatedDate", date("Y/m/d"));

    $sql->execute();

    header("Location: ../View/editEmergency.php");
}
// Delete Article
if(isset($_GET["delId"])){
    $delId = $_GET["delId"];
    $sql = $pdo->prepare(
        "DELETE FROM `first_aid` WHERE id=:id
        "
    );
    $sql->bindValue(":id",$delId);
    $sql->execute();
    header("Location: ../View/editEmergency.php");
}


