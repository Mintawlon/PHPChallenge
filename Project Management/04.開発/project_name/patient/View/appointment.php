<?php
session_start();
if (isset($_SESSION["appointmentDoctorInfo"])) {
    $docotrInfo = $_SESSION["appointmentDoctorInfo"];
    print_r($docotrInfo);
}
if (isset($_SESSION["userInfo"])) {
    $userInfo = $_SESSION["userInfo"];

    print_r($userInfo);
}
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
    <title>Appointment</title>
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow&family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <!--Css Root-->
    <link rel="stylesheet" href="./resources/css/root.css">
    <link rel="stylesheet" href="./resources/css/appointment.css?v=" <?= time() ?>>

</head>

<body>
    <!-- Header -->
    <?php
    include("./common/head.php")
    ?>
    <div class="container body">
        <div class="row">
            <div class="col-md-6 col-sm-12 inputbox_wrapper">
                <!-- Page title -->
                <h3 class="appointment_header my-4 ">Make an Appointment</h3>
                <!-- Appointment form -->
                <form class="form_box border border-2 border-warning rounded" action="../Controller/booking/appointmentController.php" method="POST">
                    <div class="input_align m-3">
                        <input type="text" id="TextInput" class="form-control" name="doctor" value=" <?= $docotrInfo[0]["doctor_name"] ?>" readonly>
                    </div>
                    <div class="input_align m-3">
                        <input type="text" id="TextInput" class="form-control" name="speciality" value=" <?= $docotrInfo[0]["speciality"] ?>" readonly>
                    </div>
                    <div class="input_align m-3">
                        <input type="date" id="TextInput" class="form-control" name="date" placeholder="Booking Date" required>
                    </div>
                    <div class="input_align m-3">
                        <input type="text" id="TextInput" class="form-control" placeholder="Patient Name" name="patient" value="<?= $userInfo[0]["register_name"] ?>" required>
                    </div>
                    <div class="input_align m-3">
                        <input type="number" id="TextInput" class="form-control" name="age" placeholder="Patient Age">
                    </div>
                    <div class="input_align m-3">

                        <input type="number" id="TextInput" class="form-control" name="contact" placeholder="Phone Number">
                    </div>
                    <div class="input_align m-3">

                        <input type="text" id="TextInput" class="form-control" name="remark" placeholder="Remark From Doctor If Have">
                    </div>
                    <div class="input_align m-3">

                        <input type="email" id="TextInput" class="form-control" placeholder="Email Address" name="email" value="<?= $userInfo[0]["email_address"] ?>" readonly>
                    </div>
                    <input type="hidden" name="id" value="<?= $userInfo[0]["id"] ?>">
                    <input type="hidden" name="doctorId" value="<?= $docotrInfo[0]["id"] ?>">
                    <!-- Button -->
                    <div class="d-flex justify-content-center m-3">
                        <button type="submit" name="makeBooking" class=" btn text-white square_yellow_btn ">Submit Appointment</button>
                    </div>
                </form>
                <!-- Display -->

                <div class="badge display_top display_bottom display">
                    <div class="text">
                        <?= $docotrInfo[0]["doctor_name"] ?>
                    </div>
                </div>
                <div class="badge text-wrap display_bottom display">

                    <div class="text">
                        Time Here
                    </div>
                </div>

            </div>
            <div class="col-md-6 col-sm-12">

                <!-- Image-->
                <div>
                    <img src="../View/components/card/image/image_login.png.png" class="img-fluid appointmentImg  " alt="...">
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <?php
    include("./common/footer.php")
    ?>
</body>

</html>