<?php

include "../Model/dbConnection.php";
// Add Medicine
if (isset($_POST["addMedicine"])) {

    $name = $_POST['name'];
    $description = $_POST["description"];
    $medicineImage = $_POST["medicine_image"];

    echo $name;
    echo $description;
    echo $medicineImg;

    $sql = $pdo->prepare(
        "INSERT INTO medicine
    (   
        medicine_name,
        description,
        medicine_image,
        create_date
        
    )
    VALUES
    (
        :name,
        :description,
        :image,
        :createdDate
    )
    "
    );

    $sql->bindValue(":name", $name);
    $sql->bindValue(":description", $description);
    $sql->bindValue(":image", $medicineImage);
    $sql->bindValue(":createdDate", date("Y/m/d"));

    $sql->execute();
    header("Location: ../View/medicineAdd.php");
} else {
    echo "<script>
    alert ('ERROR');
    </script>";
    // header("Location: ../View/medicineAdd.php");
};


