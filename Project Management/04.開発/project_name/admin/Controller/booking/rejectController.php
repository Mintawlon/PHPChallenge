<?php
include "../../Model/dbConnection.php";
if (isset($_GET["id"])) {
    $rejectId = $_GET["id"];
    $sql = $pdo->prepare(
        "UPDATE booking SET
        status=:status,
        update_date=:update_date
         where id=:id
        "
    );
    $sql->bindValue(":status", 2);
    $sql->bindValue(":update_date", date("Y/m/d"));
    $sql->bindValue(":id", $rejectId);
    $sql->execute();
    header("Location: ../../View/booking.php");
}
