<?php
session_start();
if (!isset($_SESSION["email"])) {
    header("Location: ./login.php");
}
include "../Controller/phpqrcode/qrlib.php";
include "../Controller/booking/BookingStatusController.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Booking Status</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--css-->
    <link rel="stylesheet" href="./resources/css/root.css?v=" <?php time() ?>>
    <link rel="stylesheet" href="./resources/css/booking.css?v=" <?php time() ?>>
</head>

<body>
    <?php
    include("./common/head.php");
    ?>
    <p class="warning">IF We Approved You can get A QR code If We Reject You card is Dissapered</p>
    <div class="container bcontent">

        <div class="page-deader">Your Booking Status</div>
        <hr />
        <?php foreach ($status as $booking) {
            $text = $booking["qrcode"];
            QRcode::png($text, "./Qrcodes/" . $booking["id"] . ".png");
        ?>

            <div class="card cart mb-3" style="width: 500px;">
                <div class="row no-gutters">
                    <div class="col-sm-7">
                        <div class="fs-3 text-white text-center">Your Appointment</div>
                        <br>
                        <p class="text-center text-white"><?php echo $booking["doctor_name"] ?></p>
                        <br>
                        <p class="text-center text-white"><?php echo $booking["speciality"] ?></p>
                        <br>
                        <p class="schedule"><?php echo "Date" . "\x20\x20\x20" . $booking["date"] ?></p>
                    </div>
                    <div class="col-sm-5">
                        <div class="card-body d-flex justify-content-center align-items-center">
                            <p class="text-center text-white fs-3">
                                <?php
                                if ($booking["status"] == 1) {
                                ?>
                                    <img src="./Qrcodes/<?= $booking["id"] ?>.png" alt="" width="150">
                                <?php  } else {
                                    echo "Your Booking is Pending";
                                } ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <!-- Footer -->
    <?php
    include("./common/footer.php")
    ?>
</body>

</html>

<style>
    @media screen and (max-width: 600px) {
        .list-group-item {
            display: block;
            text-align: center;
        }

        .title {
            font-size: 0.3rem !important;
        }

    }
</style>