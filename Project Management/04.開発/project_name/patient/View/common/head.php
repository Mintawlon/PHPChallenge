<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Header</title>
  <!-- Boostrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- cnd-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
  <!-- Fontawesome -->
  <script src="https://kit.fontawesome.com/fa91b09b37.js" crossorigin="anonymous"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg ">
    <div class="container-fluid">
      <p class="logo mt-3" href="#">Logo</p>
      <button class="navbar-toggler text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"><i class="fa-solid fa-bars"></i></button>
      <div class="collapse navbar-collapse navbar_text_div" id="navbarNavAltMarkup">
        <div class="navbar-nav ">
          <a class="navbar_text mt-3  me-5" aria-current="page" href="./hospital_location.php">Hospital Locations</a>
          <a class="navbar_text mt-3 me-5" href="./doctor.php">Find Doctors</a>
          <a class="navbar_text mt-3 me-5" href="./booking.php">Booking Status</a>
          <a class="navbar_text mt-3 me-5 " href="./blog.php">Blogs</a>
          <a class="navbar_text mt-3 me-5 ">
            <span class="btn btn-outline-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><img src="../storages/image/profile.jpg" class="profile"></span>
          </a>
        </div>
      </div>
    </div>
  </nav>
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
      <h5 id="offcanvasRightLabel">Your Profile</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="box">
        <div class="mainbox">
          <a href="./profileSetting.php" class="usersetting"><i class="fa-solid fa-gear"></i></a>
          <br>
          <br>
          <p>
            <img src="../storages/image/profile.jpg" class="profile">
          </p>
          <label for="name" id="name">
            <?= $_SESSION["userName"] ?>
          </label>
          <br>
          <br>
          <label for="email" id="email">
            <?= $_SESSION["email"] ?>
          </label>
          <br>
          <br>
          <!-- Blue Square Btn -->
          <button class="square_blue_btn">Patient History</button>
          <br>
          <br>
          <!-- Blue Square Btn -->
          <button class="square_yellow_btn">
            <a href="./login.php" class="text-decoration-none text-white logoutbtn">Logout</a></button>
        </div>
      </div>
    </div>
  </div>
</body>

</html>