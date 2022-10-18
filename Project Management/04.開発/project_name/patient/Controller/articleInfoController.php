<?php
include "../Model/dbConnection.php";
// get article info
$sql = $pdo->prepare(
    "SELECT * FROM `article` 
    "
);
$sql->execute();
$homeArticleInfo = $sql->fetchAll(PDO::FETCH_ASSOC);
?>