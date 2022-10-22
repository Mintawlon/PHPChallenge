<?php
include "../Model/dbConnection.php";
// get article info
$sql = $pdo->prepare(
    "SELECT * FROM `article` WHERE del_flg != 1
    "
);
$sql->execute();
$homeArticleInfo = $sql->fetchAll(PDO::FETCH_ASSOC);
?>