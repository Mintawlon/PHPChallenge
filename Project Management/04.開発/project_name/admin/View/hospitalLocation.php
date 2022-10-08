</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hospital Location</title>
  <!-- splide link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.3/dist/css/themes/splide-sea-green.min.css">
  <!-- css link -->
  <link rel="stylesheet" href="./resources/css/hospital_location.css?v=" <?= time() ?> />
  <link rel="stylesheet" href="./resources/css/root.css?v=" <?= time() ?> />
  <!-- bootstrap link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>

<body>

  <div class="container-fluid">
    <div class="row flex-nowrap">
      <!-- Side Bar   -->
      <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
        <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
          <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <span class="fs-5 d-none d-sm-inline">Menu</span>
          </a>
          <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
            <li class="nav-item">
              <a href="#" class="nav-link align-middle px-0">
                <i class="fa-solid fa-house-user"></i>
                <span class="ms-1 d-none d-sm-inline">Home</span>
              </a>
            </li>
            <li>
              <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                <i class="fa-solid fa-house-user"></i>
                <span class="ms-1 d-none d-sm-inline">Dashboard</span>
              </a>
              <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                <li class="w-100">
                  <a href="#" class="nav-link px-0">
                    <span class="d-none d-sm-inline">Item</span> 1
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link px-0">
                    <span class="d-none d-sm-inline">Item</span> 2
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#" class="nav-link px-0 align-middle">
                <i class="fa-solid fa-house-user"></i>
                <span class="ms-1 d-none d-sm-inline">Orders</span></a>
            </li>
            <li>
              <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                <i class="fs-4 bi-bootstrap"></i>
                <span class="ms-1 d-none d-sm-inline">Bootstrap</span></a>
              <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                <li class="w-100">
                  <a href="#" class="nav-link px-0">
                    <span class="d-none d-sm-inline">Item</span> 1</a>
                </li>
                <li>
                  <a href="#" class="nav-link px-0">
                    <span class="d-none d-sm-inline">Item</span> 2</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                <i class="fs-4 bi-grid"></i>
                <span class="ms-1 d-none d-sm-inline">Products</span>
              </a>
              <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                <li class="w-100">
                  <a href="#" class="nav-link px-0">
                    <span class="d-none d-sm-inline">Product</span> 1</a>
                </li>
                <li>
                  <a href="#" class="nav-link px-0">
                    <span class="d-none d-sm-inline">Product</span> 2</a>
                </li>
                <li>
                  <a href="#" class="nav-link px-0">
                    <span class="d-none d-sm-inline">Product</span> 3</a>
                </li>
                <li>
                  <a href="#" class="nav-link px-0">
                    <span class="d-none d-sm-inline">Product</span> 4</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#" class="nav-link px-0 align-middle">
                <i class="fs-4 bi-people"></i>
                <span class="ms-1 d-none d-sm-inline">Customers</span>
              </a>
            </li>
          </ul>
          <hr />
          <div class="dropdown pb-4">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle" />
              <span class="d-none d-sm-inline mx-1">loser</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
              <li><a class="dropdown-item" href="#">New project...</a></li>
              <li><a class="dropdown-item" href="#">Settings</a></li>
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
          </div>
        </div>
      </div>




      <!-- slider -->
      <div class=" col-md-9 sliderAlign">
        <section class="splide" aria-label="Splide Basic HTML Example">
          <div class="splide__track">
            <ul class="splide__list">
              <li class="splide__slide">
                <!-- table 1 -->
                <table class="table">
                  <thead class="table_bgcolor">
                    <tr>
                      <td>No.</td>
                      <td>Patient Name</td>
                      <td>Age</td>
                      <td>Doctor Name</td>
                      <td>Contact</td>
                      <td>Address</td>
                      <td>Status</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="row_bdr">
                      <td>1</td>
                      <td>Patient Name</td>
                      <td>Age</td>
                      <td>Doctor Name</td>
                      <td>Contact</td>
                      <td>Address</td>
                      <td>Action</td>
                    </tr>
                  </tbody>
                </table>

              </li>


              <li class="splide__slide">
                <!-- table 2 -->
                <table class="table">
                  <thead class="table_bgcolor">
                    <tr>
                      <td>No.</td>
                      <td>Patient Name</td>
                      <td>Age</td>
                      <td>Doctor Name</td>
                      <td>Contact</td>
                      <td>Address</td>
                      <td>Status</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="row_bdr">
                      <td>1</td>
                      <td>Patient Name</td>
                      <td>Age</td>
                      <td>Doctor Name</td>
                      <td>Contact</td>
                      <td>Address</td>
                      <td>Action</td>
                    </tr>
                    <tr class="row_bdr">
                      <td>1</td>
                      <td>Patient Name</td>
                      <td>Age</td>
                      <td>Doctor Name</td>
                      <td>Contact</td>
                      <td>Address</td>
                      <td>Action</td>
                    </tr>
                    <tr class="row_bdr">
                      <td>1</td>
                      <td>Patient Name</td>
                      <td>Age</td>
                      <td>Doctor Name</td>
                      <td>Contact</td>
                      <td>Address</td>
                      <td>Action</td>
                    </tr>
                    <tr class="row_bdr">
                      <td>1</td>
                      <td>Patient Name</td>
                      <td>Age</td>
                      <td>Doctor Name</td>
                      <td>Contact</td>
                      <td>Address</td>
                      <td>Action</td>
                    </tr>
                  </tbody>
                </table>
              </li>


              <li class="splide__slide">
                <!-- table 3     -->

                <table class="table">
                  <thead class="table_bgcolor">
                    <tr>
                      <td>No.</td>
                      <td>Patient Name</td>
                      <td>Age</td>
                      <td>Doctor Name</td>
                      <td>Contact</td>
                      <td>Address</td>
                      <td>Status</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="row_bdr">
                      <td>1</td>
                      <td>Patient Name</td>
                      <td>Age</td>
                      <td>Doctor Name</td>
                      <td>Contact</td>
                      <td>Address</td>
                      <td>Action</td>
                    </tr>
                  </tbody>
                </table>
              </li>
            </ul>
          </div>
        </section>
      </div>


      <!-- javascript link -->
      <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.3/dist/js/splide.min.js"></script>
      <script>
        var splide = new Splide('.splide', {
          type: 'fade',
          rewind: true,
        });

        splide.mount();
      </script>
</body>

</html>