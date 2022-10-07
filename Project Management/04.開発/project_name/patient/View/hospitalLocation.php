<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor</title>
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- Css -->
</head>
<body>
    <!-- Header -->
    <?php
    include("./common/head.php");
    ?>
    <!-- hospital location Header -->
    <h3 class="hospital_location_header my-5">Hospital Locations</h3>
    <!-- Blood Donation Center Cards -->
    <div class="center_card_wrapper">
        <div class="center_card">
            <div class="center_name_div">
                <h2 class="center_name">Center Name</h2>
            </div>
            <div class="center_address_div">
                <p class="yellow_color center_phone">Phone Number : <span class="white_color">01 2222222</span></p>
                <p class="yellow_color center_address">Address : <span class="white_color">Nar Nat Taw Road,Yangon,Myanmar</span></p>
            </div>
        </div>
        <hr class="line" />
    </div>
    <!-- Footer -->
    <?php
    include("./common/footer.php")
    ?>
</body>