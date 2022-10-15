<?php
session_start();
include "../Model/dbConnection.php";
// Get article info for Update
if(isset($_GET["id"])){
    $id = $_GET["id"];
    $sql = $pdo->prepare(
        "SELECT * FROM `doctor` WHERE id=:id
        "
    );
    $sql->bindValue(":id",$id);
    $sql->execute();
    $doctorInfo = $sql->fetchAll(PDO::FETCH_ASSOC);

    $_SESSION["doctorInfo"] = $doctorInfo;
    header("Location: ../View/doctorEdit.php");
}
?>