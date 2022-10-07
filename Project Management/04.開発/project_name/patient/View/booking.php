<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Horizontal Card Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!--css-->
     <link rel="stylesheet" href="./resources/css/root.css?v="time();>
    <link rel="stylesheet" href="./resources/css/booking.css?v="time();>
</head>

<body>
<?php
    include("./common/head.php");
    ?>
    <div class="container bcontent">
        <div class="page-deader">Your Booking Status</div>
        <hr />
        <div class="card cart" style="width: 500px;">
            <div class="row no-gutters">
                <div class="col-sm-7">
                    <div class="fs-3 text-white text-center">Your Appointment</div>
                    <br>
                    <p class="text-center text-white">doctorname</p>
                    <br>
                    <p class="text-center text-white">Specility</p>
                    <br>
                    <p class="schedule">MON &nbsp;12:00AM ~ 1:00PM &nbsp; Asia
                        Royal</p>
                </div>
                <div class="col-sm-5">
                    <div class="card-body">
                        <p class="text-center text-white">Your Booking status is pending
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card cart mt-2" style="width: 500px;">
            <div class="row no-gutters">
                <div class="col-sm-7">
                    <div class="fs-3 text-white text-center title">Your Appointment</div>
                    <br>
                    <p class="text-center text-white">doctorname</p>
                    <br>
                    <p class="text-center text-white">Specility</p>
                    <ul>
                    <li class="list-group-item">MON &nbsp;12:00AM ~ 1:00PM &nbsp; Asia
                        Royal</li>
                        </ul>
                </div>
                <div class="col-sm-5">
                    <div class="card-body">
                        <p class="text-center text-white">Your Booking status is pending
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<style>
@media screen and (max-width: 600px) {
    .list-group-item{
        display: block;
        text-align: center;
    }
    .title{
        font-size: 0.3rem !important;
    }
    
}
</style>