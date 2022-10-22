<?php
include("../Controller/inpatientController.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inpatient</title>
    <!-- Css root -->
    <link rel="stylesheet" href="./resources/css/root.css?v=" <?= time() ?> />
    <link rel="stylesheet" href="./resources/css/inpatientList.css?v=" <?= time() ?> />
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/0442ff9845.js" crossorigin="anonymous"></script>
    <!-- js -->
    <script src="./resources/js/jquery3.6.0.js"></script>
    <script src="./resources/js/inpatientSearch.js"defer></script>
</head>

<body>
    <script src="./resources/js/script.js"></script>
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
                        <span class="navbar-brand ttl_admin" href="#">Inpatient List</span>
                    </div>
                </div>

                <div class="sec_input mb-2">

                    <a href="./addInpatient.php" class="common_btn add_btn go_btn">Go to Add Inpatient
                        <i class="fa-solid fa-arrow-right arrow_right"></i>

                    </a>

                    <div class="tb_search">
                        <input type="text" class="common_input input_box form-control" id="searchText" name="text" placeholder="Search" />
                    </div>
                    <button type="submit" class="common_btn add_btn btn-success" id="search" name="searchbtn">Search </button>


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
                <table class="table">
                    <thead class="table_bgcolor" id="table_header">
                        <tr>
                            <td>No.</td>
                            <td>Date</td>
                            <td>Name</td>
                            <td>Age</td>
                            <td>Disease</td>
                            <td>Room</td>
                            <td>Status</td>
                            <td>address</td>
                            <td>Edit</td>
                            <td>Delete</td>
                        </tr>
                    </thead>
                    <tbody id="table_text">
                        <?php $number = 1 ?>
                        <?php foreach ($inpatient as $ipatient) { ?>
                            <tr class="row_bdr">
                                <td><?= $number++ ?></td>
                                <td><?= $ipatient["hospitalized_date"] ?></td>
                                <td><?= $ipatient["name"] ?></td>
                                <td><?= $ipatient["age"] ?></td>
                                <td><?= $ipatient["disease"] ?></td>
                                <td><?= $ipatient["room"] ?></td>
                                <td><?= $ipatient["status"] ?></td>
                                <td><?= $ipatient["address"] ?></td>
                                <td class="p-3">
                                    <a href="../Controller/inpatientEditController.php?id=<?= $ipatient["id"] ?>" class="edit_btn me-4">
                                        Edit</a>
                                    <a href="../Controller/inpatientEditController.php?delId=<?= $ipatient["id"] ?>" class="trash "><i class="fa-solid fa-trash"></i></a>
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

            </div>

        </div>
    </div>


</body>