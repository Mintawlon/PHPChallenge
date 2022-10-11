<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Inpatient</title>
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/0442ff9845.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./resources/css/root.css?v=" <?= time() ?> />
    <link rel="stylesheet" href="./resources/css/addInpatient.css" <?= time() ?> />
    <!-- js -->
    <script src="./resources/js/jquery3.6.0.js"></script>
  
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
                <!-- Header -->
                <div class="header_wrapper bg_header ">
                    <div class="header_box">
                        <span class="navbar-brand ttl_admin" href="#">Inpatient</span>
                    </div>
                </div>



                <!-- <a href="#" class="stretched-link">Go somewhere</a> -->

                <div class="sec_input mb-2">

                    <a href="" class="common_btn add_btn back_btn">Back to Inpatient List
                        <i class="fa-solid fa-arrow-left arrow_left"></i>
                    </a>

                    <div class="tb_search">
                        <input type="text" class="common_input input_box form-control" id="search_input_all" onkeyup="FilterkeyWord_all_table()" placeholder="Search" />
                    </div>


                </div>
                <div class="input_set">
                    <h2 class="input_set_header my-4">Inpatient List</h2>
                </div>
                <div class="num_rows">
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
                </div>
                <table class="table" id="table-id">
                    <thead class="table_bgcolor">
                        <tr>
                            <td>No.</td>
                            <td>Date</td>
                            <td>Patient Name</td>
                            <td>Age</td>
                            <td>Disease</td>
                            <td>Status</td>
                            <td>Room.</td>
                            <td>Address</td>
                            <td> <span class="ps-4"> Action</span></td>



                        </tr>
                    </thead>
                    <tbody>
                        <tr class="row_bdr">
                            <td>No.</td>
                            <td>Date</td>
                            <td>Patient Name</td>
                            <td>Age</td>
                            <td>Disease</td>
                            <td>Status</td>
                            <td>Room.</td>
                            <td>Address</td>
                            <td><span class="pe-4"> <a href="#" class="stretched-link">Edit</a></span> <span class="ps-3"> <a href="#" class="stretched-link">Delete</a></span> </td>
                        </tr>
                        <tr class="row_bdr">
                            <td>No.</td>
                            <td>Date</td>
                            <td>Patient Name</td>
                            <td>Age</td>
                            <td>Disease</td>
                            <td>Status</td>
                            <td>Room.</td>
                            <td>Address</td>
                            <td><span class="pe-4"> <a href="#" class="stretched-link">Edit</a></span> <span class="ps-3"> <a href="#" class="stretched-link">Delete</a></span> </td>
                        </tr>
                        <tr class="row_bdr">
                            <td>No.</td>
                            <td>Date</td>
                            <td>Patient Name</td>
                            <td>Age</td>
                            <td>Disease</td>
                            <td>Status</td>
                            <td>Room.</td>
                            <td>Address</td>
                            <td><span class="pe-4"> <a href="#" class="stretched-link">Edit</a></span> <span class="ps-3"> <a href="#" class="stretched-link">Delete</a></span> </td>
                        </tr>
                        <tr class="row_bdr">
                            <td>No.</td>
                            <td>Date</td>
                            <td>Patient Name</td>
                            <td>Age</td>
                            <td>Disease</td>
                            <td>Status</td>
                            <td>Room.</td>
                            <td>Address</td>
                            <td><span class="pe-4"> <a href="#" class="stretched-link">Edit</a></span> <span class="ps-3"> <a href="#" class="stretched-link">Delete</a></span> </td>
                        </tr>
                        <tr class="row_bdr">
                            <td>No.</td>
                            <td>Date</td>
                            <td>Patient Name</td>
                            <td>Age</td>
                            <td>Disease</td>
                            <td>Status</td>
                            <td>Room.</td>
                            <td>Address</td>
                            <td><span class="pe-4"> <a href="#" class="stretched-link">Edit</a></span> <span class="ps-3"> <a href="#" class="stretched-link">Delete</a></span> </td>
                        </tr>

                        <!-- Table  -->

                    </tbody>
                </table>
                <div class='pagination_container'>
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

                </div>
                <hr class="about_line mt-5" />

                <div class="input_set">
                    <h2 class="input_set_header my-4">Add Inpatient</h2>
                    <div class="input_one mb-2 display_top">
                        <span class="input_set_text text_display">Date</span>
                        <input type="text" class="common_input input_box" />
                    </div>
                    <div class="input_one mb-2 display_top">
                        <span class="input_set_text text_display">Patient Name</span>
                        <input type="text" class="common_input input_box" />
                    </div>
                    <div class="input_one mb-2 display_top">
                        <span class="input_set_text text_display">Age</span>
                        <input type="text" class="common_input input_box" />
                    </div>
                    <div class="input_one mb-2 display_top">
                        <span class="input_set_text text_display">Disease</span>
                        <input type="text" class="common_input input_box" />
                    </div>
                    <div class="input_one mb-2 display_top">
                        <span class="input_set_text text_display">Status</span>
                        <input type="text" class="common_input input_box" />
                    </div>
                    <div class="input_one mb-2 display_top">
                        <span class="input_set_text text_display">Room</span>
                        <input type="text" class="common_input input_box" />
                    </div>
                    <div class="input_one mb-2 display_top">
                        <span class="input_set_text text_display">Address</span>
                        <input type="text" class="common_input input_box" />
                    </div>
                    <div class=" mb-2  display_top ">
                        <!-- Add Btn -->
                        <a href="" class="common_btn add_btn input_box display_bottom display_top">Add</a>
                    </div>
                </div>

            </div>
        </div>


    </div>
    </div>
    </div>
    <script src="./resources/js/dropdown_menu.js"></script>
</body>

</html>