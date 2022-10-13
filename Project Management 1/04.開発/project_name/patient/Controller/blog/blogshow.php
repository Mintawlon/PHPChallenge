<?php

include "../../../admin/Model/dbConnection.php";

$sql = $pdo -> prepare("
    SELECT * FROM current_diseases

");

$sql -> execute();

$bloglist = $sql->fetchAll(PDO::FETCH_ASSOC);
