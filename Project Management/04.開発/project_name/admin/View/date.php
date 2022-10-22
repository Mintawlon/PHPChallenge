<?php
include "../Controller/dateController.php";
if (isset($_SESSION["doctorInfo"])) {
    $doctorInfo = $_SESSION["doctorInfo"];
}

// echo "<pre>";
// print_r($doctorInfo)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Date</title>
    <!-- Css -->
    <link rel="stylesheet" href="./resources/css/date.css">
    <link rel="stylesheet" href="./resources/css/root.css?v=" <?= time() ?> />
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/0442ff9845.js" crossorigin="anonymous"></script>

    <!-- js -->
    <script src="./resources/js/jquery3.6.0.js"></script>
    <script src="./resources/js/date.js" defer></script>

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
                <div class="header_wrapper bg_header ">
                    <div class="header_box">
                        <span class="navbar-brand ttl_admin" href="#">Date</span>
                    </div>
                </div>
                <div class="sec_input  mb-2">
                    <div class="input_one mb-2">
                        <input type="text" id="searchDay" class="common_input form-control " placeholder="Search By Day" />
                        <button class="searchDay px-5" id="search">search</button>
                    </div>
                </div>
                <!-- Go Back Button -->
                <div class="sec_input mb-2">
                    <a href="./doctor.php" class="common_btn add_btn back_btn">Back to Doctor
                        <i class="fa-solid fa-arrow-left arrow_left"></i>
                    </a>
                </div>

                <section class="timetable">
                    <div class="input_set">
                        <h2 class="input_set_header my-4">Doctor Timetable</h2>
                    </div>
                    <button id="allDoctor" class="mb-4"> Show All Doctors</button>
                    <table class="table">
                        <thead class="table_bgcolor">
                            <tr>
                                <!-- <td class="hidden">ID</td> -->
                                <td>No.</td>
                                <td>Doctor Name</td>
                                <td>Age</td>
                                <td>Specility</td>
                                <td>Date</td>
                                <td>Start Time</td>
                                <td>End Time</td>
                            </tr>
                        </thead>
                        <tbody>
                        <tbody id="dayTable">

                            <?php $number = 1 ?>
                            <?php foreach ($dateInfo as $date) { ?>
                                <tr class="row_bdr">
                                    <td><?= $number++ ?></td>
                                    <td><?php echo $date["doctor_name"] ?></td>
                                    <td><?php echo $date["age"] ?></td>
                                    <td><?php echo $date["speciality"] ?></td>
                                    <td><?php echo $date["date"] ?></td>
                                    <td><?php echo $date["startTime"] ?></td>
                                    <td><?php echo $date["endTime"] ?></td>
                                </tr>
                            <?php } ?>
                            </tr>
                            </tr>
                        </tbody>

                    </table>
                    <div class='pagination_container'>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link pagi_color" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link pagi_color" href="#">1</a></li>
                                <li class="page-item"><a class="page-link pagi_color" href="#">2</a></li>
                                <li class="page-item"><a class="page-link pagi_color" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link pagi_color" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <hr />
                </section>
                <section class="dressing_time">
                    <form action="../Controller/addDateController.php" method="post">
                        <div class="input_set">
                            <h2 class="input_set_header my-4">Add Dressing Time</h2>
                            <div class="input_one mb-2">
                                <span class="input_set_text">Doctor Name</span>
                                <input type="text" class="common_input form-control" value="<?php echo $doctorInfo[0]["doctor_name"] ?>" />
                            </div>
                            <div class="input_one mb-2">
                                <span class="input_set_text">Age</span>
                                <input type="text" class="common_input form-control " value="<?php echo $doctorInfo[0]["age"] ?>" />
                            </div>
                            <div class="input_one mb-2">
                                <span class="input_set_text">Speciality</span>
                                <input type="text" class="common_input form-control " value="<?php echo $doctorInfo[0]["speciality"] ?>" />
                            </div>
                            <div class="input_one mb-2">
                                <span class="input_set_text">Date</span>
                                <input type="text" class="common_input form-control" name="date" />
                            </div>
                            <div class="input_one mb-2">
                                <span class="input_set_text">Start Time</span>
                                <input type="time" class="common_input form-control " name="startTime" />
                            </div>
                            <div class="input_one mb-2">
                                <span class="input_set_text">End Time</span>
                                <input type="time" class="common_input form-control " name="endTime" />
                            </div>
                            <div class=" mb-2  ">
                                <!-- Add Btn -->
                                <button type="submit" class="common_btn add_btn" name="dateadd"> Add </button>
                            </div>
                        </div>
                </section>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
</body>

</html>