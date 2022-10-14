<?php
session_start();
include("../Controller/hospitalLocations/hospitalLocationController.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hospital Locations</title>
  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow&family=Source+Sans+Pro&display=swap" rel="stylesheet">

  <!-- Css Root  -->
  <link rel="stylesheet" href="./resources/css/root.css">
  <!-- Css -->
  <link rel="stylesheet" href="./resources/css/hospital_location.css?v=" <?php echo time() ?>>

</head>

<body>
  <!-- Header -->
  <?php
  include("./common/head.php");
  ?>

  <h3 class="hospital_location_header my-3">Hospital Locations</h3>

  <?php foreach ($hospitalInfo as $hospital) { ?>
    <div class="card_wrapper mb-5">

      <div class="location_box">

        <div class="map_image ">
        <div class="map">
        <?= $hospital["google_map_image"]?>
        </div>
        </div>
        <div class="hospitalInfo mt-3">
          <p class="yellow_color  location_data"> Hospital Name : <span class="white_color">
              <?= $hospital["hospital_name"] ?>
            </span></p>
          <p class="yellow_color  location_data">Address :
            <span class="white_color">
              <?= $hospital["address"] ?>
            </span>
          </p>
          <p class="yellow_color  location_data ">Phone Number : <span class="white_color"><?= $hospital["contact"]?></span></p>
          <p class="yellow_color  location_data">Email : <span class="white_color">hospital@gmail.com</span></p>
        </div>

      </div>

      <hr class="line">

    </div>

  <?php }
  ?>




  <!-- Footer -->
  <?php
  include("./common/footer.php")
  ?>
</body>


</body>

</html>