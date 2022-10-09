<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Patient history</title>
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/0442ff9845.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./resources/css/root.css?v=" <?= time() ?> />
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

            <div class="col-auto  col-md-8 col-xl-9 mx-xs-2 px-0 mx-auto container">
                <div class="container my-3">
                    <nav class="bg_header navbar navbar-expand-lg navbar-light bg-primary">
                        <div class="header_box">
                            <span class="navbar-brand ttl_admin" href="#">Doctor</span>
                        </div>
                    </nav>
                </div>
                <div class="sec_input mb-2">
                    <div class="searchbox search">
                        <span class="search_text fw-semibold">Search</span>
                        <input type="text" class="search_input ps-5" placeholder="" />
                        <i class="fa-solid fa-magnifying-glass search_icon"></i>
                    </div>
                </div>
                <section class="doctor_list">
                    <div class="input_set">
                        <h2 class="input_set_header my-4">Doctor List</h2>
                    </div>
                    <table class="table">
                        <thead class="table_bgcolor">
                            <tr>
                                <td>No.</td>
                                <td>Doctor Name</td>
                                <td>Age</td>
                                <td>Specility</td>
                                <td>Contact</td>
                                <td>Hospital Name</td>
                                <td>Add Dressing Time</td>
                                <td>Remove Doctor</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="row_bdr">
                                <td>1</td>
                                <td>Mary</td>
                                <td>20</td>
                                <td>Specility</td>
                                <td>Contact</td>
                                <td>Hospital Name</td>
                                <td><a href="" class="color_sixth">Edit</a></td>
                                <td><a href="" class="color_fifth">Remove</a></td>
                            </tr>
                            <tr class="row_bdr">
                                <td>1</td>
                                <td>Mary</td>
                                <td>20</td>
                                <td>Specility</td>
                                <td>Contact</td>
                                <td>Hospital Name</td>
                                <td><a href="" class="color_third">Add</a></td>
                                <td><a href="" class="color_fifth">Remove</a></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class='pagination_container'>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link pagi_color" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link pagi_color" href="#">1</a></li>
                                <li class="page-item"><a class="page-link pagi_color" href="#">2</a></li>
                                <li class="page-item"><a class="page-link pagi_color" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link pagi_color" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <hr />
                </section>
                <section class="add_doctor">
                    <div class="input_set">
                        <h2 class="input_set_header my-4">Add Doctor</h2>
                        <div class="input_one mb-2">
                            <span class="input_set_text">Doctor Name</span>
                            <input type="text" class="common_input " />
                        </div>
                        <div class="input_one mb-2">
                            <span class="input_set_text">Age</span>
                            <input type="text" class="common_input " />
                        </div>
                        <div class="input_one mb-2">
                            <span class="input_set_text">Speciality</span>
                            <input type="text" class="common_input " />
                        </div>
                        <div class="input_one mb-2">
                            <span class="input_set_text">Contact</span>
                            <input type="text" class="common_input " />
                        </div>
                        <div class="input_one mb-2">
                            <span class="input_set_text add_file">Profile Photo</span>
                            <input type="file" id="formFileLg" class="form-control form-control-lg common_input " accept="image/*" />
                        </div>
                        <div class="input_one mb-2">
                            <span class="input_set_text">Hospital Name</span>
                            <input type="text" class="common_input " />
                        </div>
                        <div class=" mb-2  ">
                            <!-- Add Btn -->
                            <a href="" class="common_btn add_btn  ">Add</a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    </div>
    </div>
    <script src="./resources/js/dropdown_menu.js"></script>
</body>

</html>