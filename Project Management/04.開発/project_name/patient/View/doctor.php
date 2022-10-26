<?php
session_start();
include "../Controller/doctor/doctorInfoController.php";
include "../Controller/doctor/doctorDressingTimeController.php";
if (!isset($_SESSION["email"])) {
    header("Location: ./login.php");
}

unset($_SESSION["selectedDoctorDuty"]);
unset($_SESSION["alreadyBookedDoctor"]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor</title>
    <!-- Css -->
    <link rel="stylesheet" href="./resources/css/doctor.css?v=" time()>
    <!-- Css Root  -->
    <link rel="stylesheet" href="./resources/css/root.css?v=" time()>
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow&family=Source+Sans+Pro&display=swap" rel="stylesheet">

    <script src="./resources/js/jquery3.6.0.js"></script>
    <script src="./resources/js/doctor.js" defer></script>
</head>

<body>
    <!-- Header -->
    <?php
    include("./common/head.php");
    ?>
      <button id="allDoctor" class="mt-3 ms-4">Show All Doctors</button>

    <div class="container-fluid">
        <!--doctor specility-->
        <div class="row">
            <div class="col-12 mt-5 btn-row">
                <!-- Blue Square Btn -->
                <button class="square_special_btn mobile" id="General Health" onclick="speciality(this.id)"><i class="fa-solid fa-stethoscope me-3"></i>General Health</button>
                <button class="square_special_btn" id="Pulmonology" onclick="speciality(this.id)"><i class="fa-solid fa-lungs me-3"></i>Pulmonology</button>
                <button class="square_special_btn" id="Paediatric" onclick="speciality(this.id)"><i class="fa-solid fa-baby me-3"></i>Paediatric </button>
                <button class="square_special_btn" id="Ophthalmology" onclick="speciality(this.id)"><i class="fa-solid fa-eye me-3"></i>Ophthalmology</button>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-5 btn-row">
                <!-- Blue Square Btn -->
                <button class="square_special_btn mobile" id="Neurology" onclick="speciality(this.id)"><i class="fa-solid fa-brain me-3"></i>Neurology</button>
                <button class="square_special_btn" id="OB-GYN" onclick="speciality(this.id)"><i class="fa-solid fa-person-pregnant me-3"></i>OB-GYN</button>
                <button class="square_special_btn" id="Dentist" onclick="speciality(this.id)"> <i class="fa-solid fa-tooth me-3"></i>Dentist</button>
                </form>
            </div>
        </div>

        <div class="row mt-5" id="doctorSearch">
            <!--card-->
            <?php foreach ($doctorInfo as $doctor) { ?>
                <div class="col-sm-12 col-md-6 col-lg-4 text-center card-container searchSpeciality" id="<?= $doctor["speciality"] ?>">
                    <div class="card cart" style="width: 23rem;">
                        <dvi class="image">
                            <img src="./storages/doctor/<?= $doctor["profile_photo"] ?>" class="card-img-top" alt="...">
                            <h5 class="mt-2"><?= $doctor["doctor_name"] ?></h5>
                            <p><?= $doctor["speciality"] ?></p>
                        </dvi>
                        <div class="card-body">
                            <div class="contact">
                                <div class="btk mb-3">
                                    <span class="title">Day</span>
                                    <span>Time</span>
                                </div>
                                <?php foreach ($doctorDressingTime as $time) {
                                    if ($time["doctor_id"] == $doctor["id"]) {    ?>
                                        <div class="form-check">
                                           
                                            <label class="form-check-label" for="flexRadioDefault1">
                                               <span id="day"><?= $time["date"]?> </span> 
                                               <span id="time"><?= $time["startTime"]?>  ~ <?= $time["endTime"]?> </span>
                                            </label>
                                        </div>
                                        <hr> 
                                <?php }
                                }
                                ?>
                                <button class=" btn btn-outline-primary submit"><a href="../Controller/booking/bookingFormInfoController.php?doctorId=<?= $doctor["id"] ?>" id="submit_atag">Continued</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--card-->
            <?php }
            ?>
        </div>
    </div>
    <!-- Footer -->
    <?php
    include("./common/footer.php")
    ?>
</body>

</html>