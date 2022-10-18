<?php

include "../Model/dbConnection.php";

if (isset($_POST["addMedicine"])) {

    $name = $_POST['name'];
    $description = $_POST["description"];
    $medicineImg = $_POST["medicineImg"];

    echo $name;
    echo $description;
    echo $medicineImg;

    $sql = $pdo->prepare(
        "INSERT INTO medicine
    (   
        medicine_name,
        description,
        medicine_image
        
    )
    VALUES
    (
        :name,
        :description,
        :img
    )
    "
    );

    $sql->bindValue(":name", $name);
    $sql->bindValue(":description", $description);
    $sql->bindValue(":img", $medicineImg);


    $sql->execute();


    // header("Location: ../../../View/medicineAdd.php");
} else {
    echo "<script>
    alert ('ERROR');
    </script>";
    header("Location: ../../../View/medicineAdd.php");
};
