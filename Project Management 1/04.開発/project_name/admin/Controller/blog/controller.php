<?php

include "../../Model/dbConnection.php";



 if (isset($_POST["editCurrentDiseases"])) {
    $header     = $_POST["header"];
    $paragraph  = $_POST["paragraph"];

    

    $sql = $pdo->prepare("
    
    INSERT INTO current_diseases
    (
        header,
        paragraph
    )
    VALUES
    (
        :header,
        :paragraph
    )
    
    ");


    
    $sql->bindValue(":header", $header);
    $sql->bindValue(":paragraph", $paragraph);

        $sql->execute();
        header("Location:../../View/blog/blog1.php ");

    }