<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment</title>
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- Css -->
    <link rel="stylesheet" href="./resources/css/blog.css?v=" time()>
    <link rel="stylesheet" href="./resources/css/appointment.css?v=" time()>
    <!-- Css Root  -->
    <link rel="stylesheet" href="./resources/css/root.css">
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
                <h3 class="appointment_header my-4 ">Appointment</h3>
                <!-- Appointment form -->
                <form class="form_box">

                    <div class="input_align mb-3">

                        <input type="text" id="TextInput" class="form-control" placeholder="Patient Name">
                    </div>
                    <div class="input_align mb-3">

                        <input type="text" id="TextInput" class="form-control" placeholder="Patient Age">
                    </div>
                    <div class="input_align mb-3">

                        <input type="time" id="TextInput" class="form-control" placeholder="Booking Time">
                    </div>
                    <div class="input_align mb-3">

                        <input type="text" id="TextInput" class="form-control" placeholder="Phone Number">
                    </div>
                    <div class="input_align mb-3">

                        <input type="text" id="TextInput" class="form-control" placeholder="Contact">
                    </div>
                    <div class="input_align mb-3">

                        <input type="text" id="TextInput" class="form-control" placeholder="Email Address">
                    </div>
                </form>
                <!-- Display -->

                <div class="badge display_top display_bottom display">
                    <div class="text">
                        Doctor Name Here
                    </div>
                </div>
                <div class="badge text-wrap display_bottom display">

                    <div class="text">
                        Time Here
                    </div>
                </div>
                <!-- Button -->
                <div class="book_btn my-4 display">
                    <button type="button" class="btn btn_color">Book an Appointment</button>
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