<?php
session_start();

$userInfo = $_SESSION["userInfo"];
if (!isset($_SESSION["email"])) {
    header("Location: ./login.php");
}
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
                    <img src="./storages/image/<?= $userInfo[0]["profile_image"] ?>" alt="" id="photo">
                </div>
                <p class="text-white"><?= $_SESSION["email"] ?> </p>
            </div>
        </div>

        <div class="profile_edit">
            <div class="name text-white">
                <p>Name</p>
                <input type="text" id="name_input" name="changeName" class="text-white" value="<?= $userInfo[0]["register_name"] ?> ">
            </div>
            <div class="name text-white mt-3">
                <p>Profile Photo</p>
                <input type="file" class="form-control" id="file_input" onchange="setImage()" name="changePhoto">
            </div>
            <input type="hidden" name="id" value="<?= $userInfo[0]["id"] ?>">
            <button type="submit" id="save_btn" name="changeProfile" class="text-white mt-3 fw-bold">Save</button>
        </div>
    </form>

    <hr>

    <h2 class="text-center text-white">Change Your Password</h2>
    <form action="../Controller/changePasswordController.php" method="POST" class="text-center mb-5 mt-5 py-3" id="changePwd">

        <p class="text-white">Current Password</p>
        <input type="text" class="text-white changeInput" name="currentPwd" value="<?php
                                                                                    if (isset($_SESSION["currentPwdWrong"])) {
                                                                                        echo $_SESSION["currentPwdWrong"];
                                                                                    } ?>">

        <?php
        if (isset($_SESSION["currentPwdWrong"])) { ?>
            <p id="alreadyExist" class="icon"><i class="fa-solid fa-triangle-exclamation"></i>Password Wrong</p>
        <?php } ?>
        <p class="text-white mt-3">New Password</p>
        <input type="text" class="text-white changeInput" name="changePwd" value="">
        <br>
        <button type="submit" id="pwdChangeBtn" name="changePwdBtn" class="fw-bold mt-3">Change</button>

        <?php
        if (isset($_SESSION["Successfully Change"])) { ?>
            <p id="alreadyExist" class="icon"><?=$_SESSION["Successfully Change"]?></p>
        <?php } ?>

    </form>


</body>

</html>