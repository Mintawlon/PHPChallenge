<?php

include "../../Model/dbConnection.php";
if (isset($_POST['addDieses'])) {

    $header = $_POST['header'];
    //echo $header;
    $description = $_POST['description'];
    //echo $file;
    $file = $_FILES["uploadFile"]['name'];
    $location = $_FILES['uploadFile']['tmp_name'];
    $extension = pathinfo($file)['extension'];
    $path = $header . "." . $extension;
    if (move_uploaded_file($location, "../../View/storages/blog/" . $header . "." . $extension)) {
        $sql = $pdo->prepare("INSERT INTO blog(
            image,
            header,
            description
        )
        VALUES(
            :image,
            :header,
            :description
        )
        ");
        $sql->bindValue(":image", $path);
        $sql->bindValue(":header", $header);
        $sql->bindValue(":description", $description);
        $sql->execute();
        header("Location: ../../View/blog.php");
    } else {
        echo 'There was some error moving to upload directory';
    }
}
