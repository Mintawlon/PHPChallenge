<?php
include "../Controller/doctorEditController.php";
if (isset($_SESSION["doctorInfo"])) {
    $doctorInfo = $_SESSION["doctorInfo"];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Doctor</title>
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/0442ff9845.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./resources/css/root.css?v=" <?= time() ?> />
    <!-- js -->
    <script src="./resources/js/jquery3.6.0.js"></script>
</head>

<body>
    <!-- Side Bar -->
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <!-- Side Bar Menu Copy Here -->
            <?php
            include("./common/nav.php")
            ?>

            <div class="data_box col-sm-9 col-md-8 col-xl-10 mt-3">
                <!-- Header -->
                <div class="header_wrapper bg_header ">
                    <div class="header_box">
                        <span class="navbar-brand ttl_admin" href="#">Edit Doctor</span>
                    </div>
                </div>
                <div class="sec_input mb-2">
                    <a href="./doctor.php" class="common_btn add_btn back_btn">Back to Doctor List
                        <i class="fa-solid fa-arrow-left arrow_left"></i>
                    </a>
                </div>
                <form action="../Controller/doctorEditController.php" method="POST" class="edit_doctor">
                    <div class="input_set">
                        <h2 class="input_set_header my-4">Edit Selected Doctor Information</h2>
                        <div class="input_one mb-2">
                            <span class="input_set_text">Doctor Name</span>
                            <input type="text" class="common_input form-control" name="updateDoctorName"  value="<?= $doctorInfo[0]["doctor_name"] ?>" />
                        </div>
                        <div class="input_one mb-2">
                            <span class="input_set_text">Age</span>
                            <input type="text" class="common_input form-control" name="updateDoctorAge" value="<?= $doctorInfo[0]["age"] ?>" />
                        </div>
                        <div class="input_one mb-2">
                            <span class="input_set_text">Gender</span>
                            <select name="updateDoctorGender" id="" class="common_input form-control" required>
                                <?php
                                if ($doctorInfo[0]["gender"] == 0) { ?>
                                    <option value="0" selected>Male</option>
                                    <option value="1">Female</option>
                                <?php } else{?>
                                    <option value="0" >Male</option>
                                    <option value="1" selected>Female</option>
                                <?php } ?>

                            </select>
                        </div>
                        <div class="input_one mb-2">
                            <span class="input_set_text">Speciality</span>
                            <input type="text" class="common_input form-control" name="updateDoctorSpeciality" value="<?= $doctorInfo[0]["speciality"] ?>" />
                        </div>
                        <div class="input_one mb-2">
                            <span class="input_set_text">Contact</span>
                            <input type="text" class="common_input form-control" name="updateDoctorPhone" value="<?= $doctorInfo[0]["contact"] ?>" />
                        </div>
                        <div class="input_one mb-2">
                            <span class="input_set_text add_file">Profile Photo</span>
                            <input type="file" id="formFileLg" class="form-control  common_input " accept="image/*" name="updateDoctorPhoto" />
                        </div>

                        <input type="hidden" value="<?= $doctorInfo[0]["id"]?>" name="updateDoctorId">

                        <div class=" mb-2  ">
                            <!-- Add Btn -->
                            <button type="submit" name="updateDoctorInfo" class="common_btn add_btn">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>