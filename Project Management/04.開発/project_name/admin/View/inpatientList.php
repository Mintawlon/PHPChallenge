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
<<<<<<< HEAD
    <script src="./resources/js/inpatientSearch.js"  defer></script>
=======

    <script src="./resources/js/inpatientSearch.js" defer></script>

    <script src="./resources/js/inpatientSearch.js?v=" <?= time() ?> defer></script>

>>>>>>> origin/main
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
                        <span class="navbar-brand ttl_admin" href="#">Inpatient List</span>
                    </div>
                </div>
                <div class="sec_input mb-2">
                    <a href="./addInpatient.php" class="common_btn add_btn go_btn">Go to Add Inpatient
                        <i class="fa-solid fa-arrow-right arrow_right"></i>
                    </a>
                    <div class="searchbox search">
                        <input type="text" class="search_input  ps-5" id="searchText" name="text" />
                        <i class="fa-solid fa-magnifying-glass search_icon text_white"></i>
                        <button id="search" class="search_text" name="searchbtn">Search</button>
                    </div>
                </div>
                <button id="allInpatient" class="sec_input mb-2 common_btn add_btn">All Inpatients List</button>
                <div class="input_set">
                    <h2 class="input_set_header my-4">Inpatient List</h2>
                </div>
                <table class="table">
                    <thead class="table_bgcolor" id="table_header">
                        <tr>
                            <td>No.</td>
                            <td>Date</td>
                            <td>Name</td>
                            <td>Age</td>
                            <td>Disease</td>
                            <td>Status</td>
                            <td>Room</td>
                            <td>address</td>
<<<<<<< HEAD
                            <td>Edit</td>
                            <td>Delete</td>
=======
                            <td>Action</td>

>>>>>>> origin/main
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
<<<<<<< HEAD
                                <td><?= $ipatient["status"] ?></td>
                                <td><?= $ipatient["room"] ?></td>
=======
                                <td><?= $ipatient["room"] ?></td>
                                <?php if ($ipatient["status"] == "HCU") { ?>
                                    <td style="color:#F00000; font-weight:bold"><?= $ipatient["status"] ?></td>
                                <?php } else if ($ipatient["status"] == "Isolation") { ?>
                                    <td style="color:#fceabb; font-weight:bold"><?= $ipatient["status"] ?></td>
                                <?php } else { ?>
                                    <td style="color:#45B649; font-weight:bold"> <?= $ipatient["status"] ?></td>
                                <?php } ?>
>>>>>>> origin/main
                                <td><?= $ipatient["address"] ?></td>
                                <td class="p-3">
                                    <a href="../Controller/inpatientEditController.php?id=<?= $ipatient["id"] ?>" class="me-4">
                                        Edit</a>
<<<<<<< HEAD
                                 </td>
                                 <td>
                                 <a href="../Controller/inpatientEditController.php?delId=<?= $ipatient["id"] ?>" class="trash "><i class="fa-solid fa-trash"></i></a>
                                 </td>
                               
=======
                                    <a href="../Controller/inpatientEditController.php?delId=<?= $ipatient["id"] ?>" class="trash "><i class="fa-solid fa-trash"></i></a>
                                </td>
>>>>>>> origin/main
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <!-- Pagination -->
                <?php
                if ($totalPages < 3) { ?>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item pagination_li
                            <?php if ($page <= 1) {
                                echo "disabled";
                            } ?>
                            ">

                                <a class="page-link pagination_item" href="?page=<?= $page - 1 ?>" aria-label="Previous">
                                    <span aria-hidden="true"><i class="fa-solid fa-angles-left"></i></span>
                                </a>
                            </li>

                            <li class="page-item pagination_li ">
                                <a class="page-link pagination_item
                                " href="?page=
                                <?php for ($i = 1; $i <= $totalPages; $i++) {
                                    echo $i;
                                } ?> "><?= $page ?>/<?= $totalPages ?></a>
                            </li>


                            <li class="page-item pagination_li  
                            <?php if ($page >= $totalPages) {
                                echo "disabled";
                            } ?>
                            ">
                                <a class="page-link pagination_item" href="?page=<?= $page + 1 ?>" aria-label="Next">
                                    <span aria-hidden="true"><i class="fa-solid fa-angles-right"></i></span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                <?php
                } else { ?>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item 
                            <?php if ($page <= 1) {
                                echo "disabled";
                            } ?>
                            ">

                                <a class="page-link" href="?page=<?= $page - 1 ?>" aria-label="Previous">
                                    <span aria-hidden="true"><i class="fa-solid fa-angles-left"></i></span>
                                </a>
                            </li>

                            <?php for ($i = 1; $i <= $totalPages; $i++) { ?>
                                <li class="page-item 
                                <?php
                                if ($page == $i) {
                                    echo "active";
                                }
                                ?>
                                "><a class="page-link 
                                " href="?page=<?= $i ?>"><?= $i ?></a></li>
                            <?php } ?>


                            <li class="page-item   
                            <?php if ($page >= $totalPages) {
                                echo "disabled";
                            } ?>
                            ">
                                <a class="page-link " href="?page=<?= $page + 1 ?>" aria-label="Next">
                                    <span aria-hidden="true"><i class="fa-solid fa-angles-right"></i></span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                <?php
                }
                ?>
                <!-- Pagination -->
                <hr class="about_line mt-5" />
            </div>
        </div>
    </div>
</body>

<<<<<<< HEAD
=======
</body>

>>>>>>> origin/main
</html>