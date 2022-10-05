<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow&family=Source+Sans+Pro&display=swap" rel="stylesheet" />
    <!-- cnd-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

   <!-- CSS File -->
   <link rel="stylesheet" href="../resources/css/root.css">
    <link rel="stylesheet" href="./head.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg border-bottom border-dark" >
        <div class="container-fluid ">
            <a class="navbar-brand" href="#">Logo</a>
            <div class="collapse navbar-collapse d-flex flex-row-reverse " id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item me-5 text-white">
                        <a class="nav-link " aria-current="page" href="#">Hospital Locations</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link  " aria-current="page" href="#">Find Doctors</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link " aria-current="page" href="#">Booking</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link  " aria-current="page" href="#">Blogs</a>
                    </li>
                    <li class="nav-item me-3"> 
                            <button class="btn btn-outline-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><img src="../storages/image/profile.jpg" class= "profile"></button>
                    </li>
                </ul>
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