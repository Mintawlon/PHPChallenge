<?php
include("../../Model/dbConnection.php");
if(isset($_POST["health"])){
    $search = "health";
    
    $sql = $pdo->prepare("SELECT * FROM doctor WHERE speciality LIKE :search");
    $sql->bindValue(":search","%".$search."%");
    $sql->execute();
    $searchList = $sql->fetchAll(PDO::FETCH_ASSOC);
    echo "<pre>";
    var_export($searchList) ;
    
    // echo json_encode($searchList);
}
if(isset($_POST["dentist"])){
    $search = "dentistry";
    
    $sql = $pdo->prepare("SELECT * FROM doctor WHERE speciality LIKE :search");
    $sql->bindValue(":search","%".$search."%");
    $sql->execute();
    $searchList = $sql->fetchAll(PDO::FETCH_ASSOC);
    echo "<pre>";
    var_export($searchList) ;
}
?>