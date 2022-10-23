<?php
session_start();
if (!isset($_SESSION["email"])) {
  header("Location: ./login.php");
}

include "../Controller/patientHistoryController.php";

// echo "<pre>";
// var_export($history);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Patient History</title>
    <!--css-->
    <link rel="stylesheet" href="./resources/css/root.css?v="<?=time()?>>
    <link rel="stylesheet" href="./resources/css/patientHistory.css?v"<?=time()?>>
</head>
<body>
<?php
    include("./common/head.php");
    ?>
    <!-- hospital location Header -->
    <h3 class="hospital_location_header text-center text-white mt-3">Patient History</h3>
    <table class="table table-bordered border-warning mt-3">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Patient Name</th>
      <th scope="col">Doctor Name</th>
      <th scope="col">Booking Date</th>
      <th scope="col">Disease</th>
      <th scope="col">Medicine</th>
      <th scope="col">Next Appointment</th>
      <th scope="col">Symptoms</th>
      <th scope="col">To Avoid</th>
    </tr>
  </thead>
  <tbody>
    <?php $number = 1?>
  <?php foreach ($history as $userHistory) { ?>
    <tr>
      <th scope="row"><?=$number++?></th>
      <td><?=$userHistory["patient_name"]?></td>
      <td><?=$userHistory["doctor_name"]?></td>
      <td><?=$userHistory["booking_date"]?></td>
      <td><?=$userHistory["disease"]?></td>
      <td><?=$userHistory["medicine"]?></td>
      <td><?=$userHistory["next_appointment_date"]?></td>
      <td><?=$userHistory["symptoms"]?></td>
      <td><?=$userHistory["to_avoid"]?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<!-- Footer -->
<?php
    include("./common/footer.php")
    ?>
</body>
</html>