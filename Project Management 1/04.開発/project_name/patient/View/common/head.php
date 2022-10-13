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
      <p class="logo" href="#">Logo</p>
      <button class="navbar-toggler text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"><i class="fa-solid fa-bars"></i></button>
      <div class="collapse navbar-collapse navbar_text_div" id="navbarNavAltMarkup">
        <div class="navbar-nav ">
          <a class="navbar_text  me-5" aria-current="page" href="#">Hospital List</a>
          <a class="navbar_text me-5" href="#">Find Doctors</a>
          <a class="navbar_text me-5" href="#">Booking</a>
          <a class="navbar_text me-5 ">Blog</a>
          <a class="navbar_text me-5 ">
            <span class="btn btn-outline-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><img src="../storages/image/profile.jpg" class="profile"></span>
          </a>
        </div>
      </div>
    </div>
  </nav>
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
      <h5 id="offcanvasRightLabel">User Profile</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="box">
        <div class="mainbox">
          <button class="usersetting"><i class="fa-solid fa-gear"></i></button>
          <br>
          <br>
          <p>
            <img src="../storages/image/profile.jpg" class="profile">
          </p>
          <label for="name" id="name">User Name</label>
          <br>
          <br>
          <label for="email" id="email">Email</label>
          <br>
          <br>
          <button type="button" class="btn btn-lg btn-outline-primary">Patient History</button>
          <br>
          <br>
          <button type="button" class="btn btn-lg btn-outline-warning">Logout</button>
        </div>
      </div>
    </div>
  </div>
</body>

</html>