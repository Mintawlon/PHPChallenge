<?php
session_start();

$userInfo = $_SESSION["userInfo"];
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
    <!-- JS -->
    <script src="./resources/js/uploadProfile.js" defer></script>
</head>

<body>
    <!-- Header -->
    <?php
    include("./common/head.php");
    ?>
    <!-- Edit Profile -->

    <h2 class="text-center text-white my-3">Profile</h2>

    <form action="../Controller/login,signUp,profile/profileController.php" method="POST" class="profile_wrapper" enctype="multipart/form-data">

        <div class="profile_photo_div">
            <div class="profile_photo">
                <div class="photo">
                    <img src="./storages/image/<?=$userInfo[0]["profile_image"]?>" alt="" id="photo">
                </div>
                <p class="text-white"><?= $_SESSION["email"]?> </p>
            </div>
        </div>

        <div class="profile_edit">
            <div class="name text-white">
                <p>Name</p>
                <input type="text" id="name_input" name="changeName" class="text-white" value="<?=$userInfo[0]["register_name"]?> ">
            </div>
            <div class="name text-white mt-3">
                <p>Profile Photo</p>
                <input type="file" class="form-control"  id="file_input" onchange="setImage()" name="changePhoto">
            </div>
            <input type="hidden" name="id" value="<?=$userInfo[0]["id"]?>">
            <button type="submit" id="save_btn" name="changeProfile" class="text-white mt-3">Save</button>
        </div>
    </form>

    <div class="col-sm-10">
        
    </div>


</body>

</html>