<?php
include "../Controller/booking/bookingStatusController.php";

//print_r($rejected);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Booking</title>
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

            <div class=" data_box   col-sm-9  col-md-8 col-xl-10 mt-3">
                <div class="header_wrapper bg_header ">
                    <div class="header_box">
                        <span class="navbar-brand ttl_admin" href="#">Booking</span>
                    </div>
                </div>

                <section class="booking_pending">
                    <div class="input_set">
                        <h2 class="input_set_header my-4 color_fourth">Booking Pending List</h2>
                    </div>
                    <table class="table">
                        <thead class="table_bgcolor">
                            <tr>
                                <td>No.</td>
                                <td>Patient Name</td>
                                <td>Age</td>
                                <td>Contact</td>
                                <td>Address</td>
                                <td>Doctor Name</td>
                                <td>Specility</td>
                                <td>Booking Date</td>
                                <td>Status</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $count = 0; ?>
                            <?php foreach ($patientBookingList as $list) { ?>
                                <tr class="row_bdr">
                                    <td><?php echo ++$count ?></td>
                                    <td><?php echo $list["patient_name"] ?></td>
                                    <td><?php echo $list["age"] ?></td>
                                    <td><?php echo $list["contact"] ?></td>
                                    <td><?php echo $list["address"] ?></td>
                                    <td><?php echo $list["doctor_name"] ?></td>
                                    <td><?php echo $list["speciality"] ?></td>
                                    <td><?php echo $list["date"] ?></td>
                                    <td><?php echo $list["patient_status"] ?></td>
                                    <td>
                                        <span class="iconic"><a href="../Controller/booking/updateBookingController.php?id=<?php echo $list["id"] ?>"><i class="fa-solid fa-square-check check_icon"></i></a></span>
                                        <span class="iconic"><a href="../Controller/booking/rejectController.php?id=<?php echo $list["id"] ?>"><i class="fa-solid fa-square-xmark xmark_icon"></i></a></span>
                                    </td>
                                </tr>
                            <?php } ?>
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

                <section class="booking_approved">
                    <div class="input_set">
                        <h2 class="input_set_header my-4">Booking Approved List</h2>
                    </div>
                    <table class="table">
                        <thead class="table_bgcolor">
                            <tr>
                                <td>No.</td>
                                <td>Patient Name</td>
                                <td>Age</td>
                                <td>Contact</td>
                                <td>Address</td>
                                <td>Doctor Name</td>
                                <td>Specility</td>
                                <td>Booking Date</td>
                                <td>Status</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($approved as $patient) { ?>
                                <tr class="row_bdr">
                                    <td><?php echo ++$count ?></td>
                                    <td><?php echo $patient["patient_name"] ?></td>
                                    <td><?php echo $patient["age"] ?></td>
                                    <td><?php echo $patient["contact"] ?></td>
                                    <td><?php echo $patient["address"] ?></td>
                                    <td><?php echo $patient["doctor_name"] ?></td>
                                    <td><?php echo $patient["speciality"] ?></td>
                                    <td><?php echo $patient["date"] ?></td>
                                    <td><?php echo $patient["patient_status"] ?></td>
                                </tr>
                            <?php } ?>
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
            </div>
        </div>
    </div>
    </div>
    </div>
</body>

</html>