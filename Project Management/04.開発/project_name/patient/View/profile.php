<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow&family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <!-- Css -->
    <link rel="stylesheet" href="./resources/css/profileSetting.css?v=" time()>
    <!-- Root Css -->
    <link rel="stylesheet" href="./resources/css/root.css">
    <link rel="stylesheet" href="./resources/css/profile.css">
</head>

<body>
    <!-- Header -->
    <?php
    include("./common/head.php");
    ?>
    <!-- Edit Profile -->

    <h2 class="text-center text-white my-3">Profile</h2>

    <div class="profile_wrapper">

        <div class="profile_photo_div">
            <div class="profile_photo">
                <div class="photo">
                </div>
                <p class="text-white">phoopwintmaung@gmail.com</p>
            </div>
        </div>

        <div class="profile_edit">
            <div class="name text-white">
                <p>Name</p>
                <input type="text" id="name_input" class="text-white">
            </div>
            <div class="name text-white mt-3">
                <p>Profile Photo</p>
                <input type="file" class="form-control"  id="file_input">
            </div>
            <button type="submit" id="save_btn" class="text-white mt-3">Save</button>
        </div>
    </div>

    <div class="col-sm-10">
        
    </div>


</body>

</html>