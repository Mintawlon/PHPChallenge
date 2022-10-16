<?php

include("../../Model/dbConnection.php");

// Add About Us Info
if(isset($_POST["contact"])){
    $name = $_POST["name"];
    $reason = $_POST["reason"];
    $contact = $_POST["comment"];

    $sql = $pdo->prepare(
        "INSERT INTO 
        get_in_touch (
        name,
        reason,
        contact_text
        ) 
        VALUES 
        (
        :name,
        :reason,
        :contact
        );"
    );
    $sql->bindValue(":name",$name);
    $sql->bindValue(":reason",$reason);
    $sql->bindValue(":contact",$contact);


    $sql->execute();
    header("Location: ../../View/about_us.php");
}

?>