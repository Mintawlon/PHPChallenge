<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hospital Location</title>
  <!-- Boostrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <!-- Fontawesome -->
  <script src="https://kit.fontawesome.com/0442ff9845.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./resources/css/root.css?v=" <?= time() ?> />
  <link rel="stylesheet" href="./resources/css/hospital_location.css" <?= time() ?> />
  <!-- js -->
  <script src="./resources/js/jquery3.6.0.js"></script>
  <script src="./resources/js/script.js"></script>
</head>

<body>
  <!-- Side Bar -->
  <div class="container-fluid">
    <div class="row flex-nowrap">
      <!-- Side Bar Menu Copy Here -->
      <?php
      include("./common/nav.php")
      ?>
      <div class="data_box col-sm-9 col-md-8 col-xl-10 mt-3">
        <div class="header_wrapper bg_header ">
          <div class="header_box">
            <span class="navbar-brand ttl_admin" href="#">Hospital Location</span>
          </div>
        </div>
        <div class="input_set">
          <h2 class="input_set_header my-4">Hospital Location List</h2>
        </div>
        <!-- <div class="num_rows">
          <div class="form-group">
            <select class="form-control" name="state" id="maxRows">
              <option value="10">10</option>
              <option value="15">15</option>
              <option value="20">20</option>
              <option value="50">50</option>
              <option value="70">70</option>
              <option value="100">100</option>
              <option value="5000">Show ALL Rows</option>
            </select>

          </div>
        </div> -->
        <table class="table" id="table-id">
          <thead class="table_bgcolor">
            <tr>
              <td>No.</td>
              <td>Hospital Name</td>
              <td>Contact</td>
              <td>Map</td>
              <td>Address</td>
              <td>Mail</td>
            </tr>
          </thead>
          <tbody>
            <tr class="row_bdr">
              <td>1</td>
              <td>SSC</td>
              <td>091234567</td>
              <td>Map Image</td>
              <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium amet cupiditate vel ab? Odio, harum!</td>
              <td>blabla@gmail.com</td>
            </tr>
            <tr class="row_bdr">
              <td>1</td>
              <td>SSC</td>
              <td>091234567</td>
              <td>Map Image</td>
              <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium amet cupiditate vel ab? Odio, harum!</td>
              <td>blabla@gmail.com</td>
            </tr>
            <tr class="row_bdr">
              <td>1</td>
              <td>SSC</td>
              <td>091234567</td>
              <td>Map Image</td>
              <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium amet cupiditate vel ab? Odio, harum!</td>
              <td>blabla@gmail.com</td>
            </tr>

            <!-- Table  -->

          </tbody>
        </table>
        <!-- <div class='pagination_container'>
          <nav aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            </ul>
          </nav>
          <div class="rows_count">Showing 11 to 20 of 91 entries</div>
        </div> -->
        <hr class="about_line mt-5" />

        <div class="input_set">
          <h2 class="input_set_header my-4">Add Hospital</h2>
          <form action="../Controller/hospital locations/hospitalLocation.php" method="POST" >
            <div class="input_one mb-2 display_top">
              <span class="input_set_text text_display">Hospital Name</span>
              <input type="text" class="common_input input_box" />
            </div>
            <div class="input_one mb-2 display_top">
              <span class="input_set_text text_display">Address</span>
              <input type="text" class="common_input input_box" />
            </div>
            <div class="input_one mb-2 display_top">
              <span class="input_set_text text_display">Phone Number</span>
              <input type="text" class="common_input input_box" />
            </div>
            <div class="input_one mb-2 display_top">
              <span class="input_set_text text_display">Email</span>
              <input type="text" class="common_input input_box" />
            </div>
            <div class="input_one mb-2 display_top">
              <span class="input_set_text text_display">Google Map</span>
              <input type="text" class="common_input input_box" />
            </div>
            <div class=" mb-2  display_top ">
              <!-- Add Btn -->
              <a href="" class="common_btn add_btn input_box display_bottom display_top">Add</a>
            </div>
          </form>
        </div>

      </div>
    </div>


  </div>
  </div>
  </div>
</body>

</html>