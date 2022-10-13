<?php

include "../../Model/dbConnection.php";

    $sql = $pdo->prepare("

        SELECT * FROM current_diseases
    ");
    
    $sql->execute();
    
    $blogList = $sql->fetchAll(PDO::FETCH_ASSOC);

