<?php

include "../../Model/dbConnection.php";

if (isset($_POST["homeArticleAdd"])) {
    $header = $_POST["homeArticleHeader"];
    $paraHeader = $_POST["homeArticleParaHeader"];
    $paragraph = $_POST["homeArticlePara"];
    $photo = $_POST["homeArticlePhoto"];
    $link = $_POST["pageLink"];


    $sql = $pdo->prepare(
        "INSERT INTO 
        article (
        header,
        para_header,
        para_text,
        image,
        page_link,
        create_date
        ) 
        VALUES 
        (
        :header,
        :para_header,
        :para_text,
        :image,
        :link,
        :createdDate
        );"
    );
    $sql->bindValue(":header", $header);
    $sql->bindValue(":para_header", $paraHeader);
    $sql->bindValue(":para_text", $paragraph);
    $sql->bindValue(":image", $photo);
    $sql->bindValue(":link", $link);
    $sql->bindValue(":createdDate", date("Y/m/d"));

    $sql->execute();
    header("Location: ../../View/article.php");
}
