<?php
session_start();
include "../Controller/doctor/doctorInfoController.php";
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
</head>

<body>
    <!-- Header -->
    <?php
    include("./common/head.php");
    ?>

    <div class="container-fluid">
        <!--doctor specility-->
        <div class="row">
            <div class="col-12 mt-5 btn-row">
                <!-- Blue Square Btn -->
                <form action="../Controller/doctor/searchDoctorController.php" method="POST">
                    <input type="hidden" name="general health">
                <button class="square_special_btn mobile" name="health"><i class="fa-solid fa-stethoscope"></i> &nbsp; &nbsp; General Health</button>
                </form>
                <button class="square_special_btn"><i class="fa-solid fa-lungs"></i> &nbsp; &nbsp;Nephology</button>
                <button class="square_special_btn"><i class="fa-solid fa-lungs"></i> &nbsp; &nbsp;Orthopaedics</button>
                <button class="square_special_btn"><i class="fa-solid fa-eye"></i> &nbsp; &nbsp; Ophthalmology</button>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-5 btn-row">
                <!-- Blue Square Btn -->
                <button class="square_special_btn mobile"><i class="fa-solid fa-brain"></i> &nbsp; &nbsp;Neurology</button>
                <button class="square_special_btn"><i class="fa-solid fa-person-pregnant"></i> &nbsp; &nbsp; Pregancy</button>
                
                <form action="../Controller/doctor/searchDoctorController.php" method="POST">
                    <input type="hidden" name="dentist">
                    <button class="square_special_btn"><i class="fa-solid fa-tooth"></i>&nbsp; &nbsp; General Dentistry</button>
                </form>
            </div>
        </div>

        <div class="row mt-5">
            <!--card-->
            <?php foreach ($doctorInfo as $doctor) { ?>
                <div class="col-sm-12 col-md-6 col-lg-4 text-center">
                    <div class="card cart" style="width: 23rem;">
                        <dvi class="image">
                            <img src="./storages/image/<?= $doctor["profile_photo"] ?>" class="card-img-top" alt="...">
                            <h5 class="mt-2"><?= $doctor["doctor_name"] ?></h5>
                            <p><?= $doctor["speciality"] ?></p>
                        </dvi>
                        <div class="card-body">
                            <div class="contact">
                                <div class="btk mb-3">
                                    <span class="title">Day</span>
                                    <span>Time</span>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Mon &nbsp; &nbsp; 9:00Am ~ 11:00AM
                                    </label>
                                </div>
                                <hr>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Mon &nbsp; &nbsp; 9:00Am ~ 11:00AM
                                    </label>
                                </div>
                                <hr>
                                <button class=" btn btn-outline-primary submit">continued</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--card-->
            <?php }
            ?>
            <!--card-->
            <!-- <div class="col-sm-12 col-md-6 col-lg-4 text-center">
                <div class="card cart" style="width: 23rem;">
                    <dvi class="image">
                    <img src="./storages/image/blood.jpg" class="card-img-top" alt="...">
                        <h5>Name</h5>
                        <p>Speciality</p>
                    </dvi>
                    <div class="card-body">
                        <div class="contact">
                            <div class="btk mb-3">
                                <span class="title">Day</span>
                                <span>Time</span>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Mon &nbsp; &nbsp; 9:00Am ~ 11:00AM
                                </label>
                            </div>
                            <hr>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Mon &nbsp; &nbsp; 9:00Am ~ 11:00AM
                                </label>
                            </div>
                            <hr>
                            <button class=" btn btn-outline-primary submit">continued</button>
                        </div>
                    </div>
                </div>
            </div> -->
            <!--card-->
            <!--card-->
            <!-- <div class="col-sm-12 col-md-6 col-lg-4 text-center">
                <div class="card cart" style="width: 23rem;">
                    <dvi class="image">
                    <img src="./storages/image/blood.jpg" class="card-img-top" alt="...">
                        <h5>Name</h5>
                        <p>Speciality</p>
                    </dvi>
                    <div class="card-body">
                        <div class="contact">
                            <div class="btk mb-3">
                                <span class="title">Day</span>
                                <span>Time</span>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Mon &nbsp; &nbsp; 9:00Am ~ 11:00AM
                                </label>
                            </div>
                            <hr>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Mon &nbsp; &nbsp; 9:00Am ~ 11:00AM
                                </label>
                            </div>
                            <hr>
                            <button class=" btn btn-outline-primary submit">continued</button>
                        </div>
                    </div>
                </div>
            </div> -->
            <!--card-->
        </div>
    </div>
    <!-- Footer -->
    <?php
    include("./common/footer.php")
    ?>
</body>

</html>