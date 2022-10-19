<?php
include("../Model/dbConnection.php");
session_start();
// Get article info for Update
if(isset($_GET["id"])){
    $id = $_GET["id"];
    $sql = $pdo->prepare(
        "SELECT * FROM `article` WHERE id=:id
        "
    );
    $sql->bindValue(":id",$id);
    $sql->execute();
    $articleInfo = $sql->fetchAll(PDO::FETCH_ASSOC);

    $_SESSION["homeArticleInfo"] = $articleInfo;
    header("Location: ../View/articleEdit.php");
}
// Update Article
if(isset($_POST["homeArticleEdit"])){
    $id = $_POST["homeArticleId"];
    $photo = $_POST["homeArticlePhoto"];
    $link = $_POST["pageLink"];
    $articlePara = $_POST["homeArticlePara"];
    $articleParaHeader = $_POST["homeArticleParaHeader"];
    $articleHeader = $_POST["homeArticleHeader"];

    $sql = $pdo->prepare(
        "UPDATE
        article SET 
        header=:header,
        para_header=:para_header,
        para_text=:para_text,
        image=:image,
        page_link=:page_link,
        update_date=:updatedDate WHERE id=:id"
    );
    $sql->bindValue(":id",$id);
    $sql->bindValue(":header",$articleHeader);
    $sql->bindValue(":para_header",$articleParaHeader);
    $sql->bindValue(":para_text",$articlePara);
    $sql->bindValue(":page_link",$link);
    $sql->bindValue(":image",$photo);
    $sql->bindValue(":updatedDate", date("Y/m/d"));

    $sql->execute();

    header("Location: ../View/article.php");
}
?>