<?php

// include "../../Model/dbConnection.php";

if(isset($_POST["addMedicine"])){
    
    $name= $_POST['name'];
    $description = $_POST["description"];
    $medicineImg= $_POST["medicineImg"];

    echo $name;
    echo $description;
    echo $medicineImg;
}else{


};



?>