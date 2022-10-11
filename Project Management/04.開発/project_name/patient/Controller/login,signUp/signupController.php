<?php
include("../../Model/dbConnection.php");
if (isset($_POST["signUp"])) {
    $regName = $_POST["reg_name"];
    $regEmail = $_POST["reg_email"];
    $regPwd = $_POST["reg_pwd"];

    $sql = $pdo->prepare(
        "SELECT email_address FROM user_register WHERE email_address = :regEmail
        "
    );
    $sql->bindValue(":regEmail", $regEmail);
    $sql->execute();
    $reg_email_check = $sql->fetchAll(PDO::FETCH_ASSOC);
    
    if (count($reg_email_check) == 0) {
        $sql = $pdo->prepare(
            "INSERT INTO 
            user_register (register_name,email_address,password) 
            VALUES 
            (:regName,:regEmail,:regPwd); 
            "
        );

        $sql->bindValue(":regName", $regName);
        $sql->bindValue(":regEmail", $regEmail);
        $sql->bindValue(":regPwd", password_hash($regPwd, PASSWORD_DEFAULT));

        $sql->execute();
         header("Location: ../../View/home1.php");

    } else {
        echo "<script>
        alert('Alerady Exist This Email');
        </script>";
        // header("Location: ../../View/signUp.php");
    }
}
