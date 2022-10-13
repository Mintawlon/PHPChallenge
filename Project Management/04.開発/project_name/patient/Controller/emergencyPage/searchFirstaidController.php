<?php
include("../../Model/dbConnection.php");
if(isset($_POST["searchText"])){
    $search = $_POST["searchText"];
    
    $sql = $pdo->prepare("SELECT * FROM first_aid WHERE article_header LIKE :search");
    $sql->bindValue(":search","%".$search."%");
    $sql->execute();
    $searchList = $sql->fetchAll(PDO::FETCH_ASSOC);
    
    
    echo json_encode($searchList);
}
?>