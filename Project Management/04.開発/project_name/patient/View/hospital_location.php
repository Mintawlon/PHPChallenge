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

  <div class="card_wrapper mb-5">

    <div class="location_box">

      <div class="map_image">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1909.8035127758399!2d96.12969946223504!3d16.796215793599213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1eb154664173d%3A0xfc96fa68362544d7!2z4YCG4YCs4YCA4YCw4YCb4YCs4YCG4YCx4YC44YCb4YCv4YC2!5e0!3m2!1smy!2smm!4v1665544606024!5m2!1smy!2smm"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
          <!-- <img src="./storages/image/emergency.jpg" alt="" class="map"> -->

      </div>
      <div class="hospitalInfo mt-3">
      <p class="yellow_color  location_data">Phone Number : <span class="white_color">01 2222222</span></p>
        <p class="yellow_color  location_data">Address : <span class="white_color">Nar Nat Taw Road,Yangon,Myanmar</span></p>
        <p class="yellow_color  location_data ">Address : <span class="white_color">Nar Nat Taw Road,Yangon,Myanmar</span></p>
        <p class="yellow_color  location_data">Address : <span class="white_color">Nar Nat Taw Road,Yangon,Myanmar</span></p>
      </div>

    </div>

    <hr class="line">

  </div>

  


  <!-- Footer -->
  <?php
  include("./common/footer.php")
  ?>
</body>


</body>

</html>