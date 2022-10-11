<?php
session_start();
include("../../Model/dbConnection.php");
if (isset($_POST["logIn"])) {
    $loginEmail = $_POST["email"];
    $loginPwd = $_POST["pwd"];
    $sql = $pdo->prepare(
        "SELECT * FROM user_register WHERE email_address = :Email
        "
    );
    $sql->bindValue(":Email", $loginEmail);
    $sql->execute();
    $login_check = $sql->fetchAll(PDO::FETCH_ASSOC);


    $_SESSION["email"] = $loginEmail;
    if (
        password_verify($loginPwd, $login_check[0]["password"]) &&
        $loginEmail == $login_check[0]["email_address"]
    ) {

        header("Location: ../../View/home1.php");
    } else {
        echo "wrong";
        // header("Location: ../../View/login.php");
    }

    // $loginEmail ==$login_check[0]["email_address"]
    // if( password_verify($loginPwd,$login_check[0]['password']) ){
    //     header("Location: ../../View/home1.php");
    // }else{
    //     header("Location: ../../View/login.php");
    // }

};
