<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Locations</title>
    <!-- Css Root  -->
    <link rel="stylesheet" href="./resources/css/root.css">
    <!-- Css -->
    <link rel="stylesheet" href="./resources/css/hospital_location.css?v="<?php echo time() ?>>
    
</head>
<body>
    <!-- Header -->
    <?php
    include("./common/head.php")
    ?>
    <!-- hospital location Header -->
    <h3 class="hospital_location_header my-5">Hospital Locations</h3>
    <div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 col-md-12 col-12">
    <div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-5 image-container">
      <img src="./storages/image/profile.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-7">
      <div class="card-body text-center">
      <div class="center_name_div">
                <h2 class="center_name">Center Name</h2>
            </div>
            <div class="center_address_div">
                <p class="yellow_color center_phone"><span  class="name fw-bold">Phone Number</span> : <span class="white_color">01 2222222</span></p>
                <p class="yellow_color center_address"><span  class="name fw-bold">Address</span>: <span class="white_color">Nar Nat Taw Road,Yangon,Myanmar</span></p>
                
            </div>
      </div>
    </div>
  </div>
</div>
        <!--hospital card-->
    </div>
  </div>
</div>
        <hr class="line" />
    </div>
    <!-- Footer -->
    <?php
    include("./common/footer.php")
    ?>
</body>

</html>


 