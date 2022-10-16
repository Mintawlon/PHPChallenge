<?php
include("../Controller/inpatientController.php");
?>
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
    <script src="./resources/js/script.js" ></script>
    <script src="./resources/js/inpatientSearch.js?v="<?= time() ?> defer></script>

</head>

<body>
    <!-- Side Bar -->
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <!-- Side Bar Menu Copy Here -->
            <?php
            include("./common/nav.php")
            ?>
            <form action="../Controller/inpatientController.php" method="post">
                <div class="data_box col-sm-9 col-md-8 col-xl-10 mt-3">
                    <!-- Header -->
                    <div class="header_wrapper bg_header ">
                        <div class="header_box">
                            <span class="navbar-brand ttl_admin" href="#">Add Inpatient</span>
                        </div>
                    </div>


                    <div class="sec_input mb-2">

                        <a href="./inpatientList.php" class="common_btn add_btn back_btn">Back to Inpatient List
                            <i class="fa-solid fa-arrow-left arrow_left"></i>
                        </a>

                        <div class="tb_search">
                        <input type="text" class="common_input input_box form-control" id="searchText" name="text" placeholder="Search"  />
                    </div>
                        <button type="submit" class="common_btn add_btn btn-success" id="search" name="searchbtn">Search </button>


                    </div>
                    <div class="input_set">
                        <h2 class="input_set_header my-4">Inpatient List</h2>
                    </div>

                    <table class="table">
                        <thead class="table_bgcolor" id="table_header">
                            <tr>

                                <td>Date</td>
                                <td>Name</td>
                                <td>Age</td>
                                <td>Disease</td>
                                <td>Status</td>
                                <td>Room</td>
                                <td>Address</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $number = 1 ?>
                            <?php foreach ($inpatient as $iPatient) { ?>
                                <tr class="row_bdr">
                                    <!-- <td id="number"><?= $number++ ?></td> -->
                                    <td><?= $iPatient["hospitalized_date"] ?> </td>
                                    <td><?= $iPatient["name"] ?></td>
                                    <td><?= $iPatient["age"] ?></td>
                                    <td><?= $iPatient["disease"] ?></td>
                                    <td><?= $iPatient["status"] ?></td>
                                    <td><?= $iPatient["room"] ?></td>
                                    <td><?= $iPatient["address"]  ?></td>
                                    <td>
                                        <span class="edit_delete_btn"><a href="../Controller/inpatientEditController.php?id=<?= $iPatient["id"] ?>" class="color_sixth me-2">Edit</a></span>
                                        <span class="edit_delete_btn"><a href="../Controller/inpatientEditController.php?delId=<?= $iPatient["id"] ?>" class="color_fifth">Delete</a></span>
                                    </td>
                                </tr>
                            <?php } ?>


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
                    <hr class="about_line mt-5" />

                    <div class="input_set">
                        <h2 class="input_set_header my-4">Add Inpatient</h2>
                        <div class="input_one mb-2 display_top">
                            <span class="input_set_text text_display">Date</span>
                            <input type="text" class="common_input form-control" name="date" />
                        </div>
                        <div class="input_one mb-2 display_top">
                            <span class="input_set_text text_display">Patient Name</span>
                            <input type="text" class="common_input form-control" name="name" />
                        </div>
                        <div class="input_one mb-2 display_top">
                            <span class="input_set_text text_display">Age</span>
                            <input type="text" class="common_input form-control" name="age" />
                        </div>
                        <div class="input_one mb-2 display_top">
                            <span class="input_set_text text_display">Disease</span>
                            <input type="text" class="common_input form-control" name="disease" />
                        </div>
                        <div class="input_one mb-2 display_top">
                            <span class="input_set_text text_display">Status</span>
                            <input type="text" class="common_input form-control" name="status" />
                        </div>
                        <div class="input_one mb-2 display_top">
                            <span class="input_set_text text_display">Room</span>
                            <input type="text" class="common_input form-control" name="room" />
                        </div>
                        <div class="input_one mb-2 display_top">
                            <span class="input_set_text text_display">Address</span>
                            <input type="text" class="common_input form-control" name="address" />
                        </div>
                        <div class=" mb-2  display_top ">


                            <button type="submit" class="common_btn add_btn input_box display_bottom display_top" name="addbtn">Add</button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>

    <script src="./resources/js/dropdown_menu.js"></script>
</body>

</html>