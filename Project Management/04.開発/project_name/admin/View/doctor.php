<?php
include "../Controller/doctor/getDoctorInfoController.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Doctor</title>
    <!-- Css root -->
    <link rel="stylesheet" href="./resources/css/root.css">
    <link rel="stylesheet" href="./resources/css/doctor.css">
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/0442ff9845.js" crossorigin="anonymous"></script>
    <!-- js -->
    <script src="./resources/js/jquery3.6.0.js"></script>
    <script src="./resources/js/doctor.js" defer></script>
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
                        <span class="navbar-brand ttl_admin" href="#">Doctor</span>
                    </div>
                </div>
                <div class="sec_input mb-2">
                    <div class="searchbox search">
                        <input type="text" class="search_input  ps-5" id="searchDoctor" />
                        <i class="fa-solid fa-magnifying-glass search_icon text_white"></i>
                        <button id="search" class="search_text">Search</button>
                    </div>
                </div>
                <button id="allDoctor">All Doctors</button>
                <section class="doctor_list">
                    <div class="input_set">
                        <h2 class="input_set_header  my-4"><u>Doctor List</u></h2>

                    </div>
                    <table class="table">
                        <thead class="table_bgcolor" id="table_header">
                            <tr>
                                <td>No.</td>
                                <td>Doctor Name</td>
                                <td>Age</td>
                                <td>Specility</td>
                                <td>Contact</td>
                                <td>Profile Photo</td>
                                <td>Add Dressing Time</td>
                                <td>Remove Doctor</td>
                            </tr>
                        </thead>
                        <tbody id="table_text">
                            <?php $number = ($page * $rowLimit) - ($rowLimit - 1) ?>
                            <?php foreach ($doctorInfo as $doctor) { ?>
                                <tr class="row_bdr">
                                    <td><?= $number++ ?></td>
                                    <td><?= $doctor["doctor_name"] ?></td>
                                    <td><?= $doctor["age"] ?></td>
                                    <td><?= $doctor["speciality"] ?></td>
                                    <td><?= $doctor["contact"] ?></td>
                                    <td id="image">
                                        <img src="./storages/image/<?= $doctor["profile_photo"] ?>" alt="" class="image">
                                    </td>
                                    <td>
                                        <a href="../Controller/dateController.php?id=<?= $doctor["id"] ?>" class="color_sixth"><button class="edit_btn me-4" value="<?= $doctor["id"] ?>">Add</button></a>
                                    </td>
                                    <td class="p-3">
                                        <a href="../Controller/doctorEditController.php?id=<?= $doctor["id"] ?>" class="edit_btn me-4">
                                            Edit</a>
                                        <a href="../Controller/doctorEditController.php?delId=<?= $doctor["id"] ?>" class="trash "><i class="fa-solid fa-trash"></i></a>
                                    </td>
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
                    <hr />
                </section>
                <form action="../Controller/doctor/doctorAddController.php" method="POST" class="add_doctor">
                    <div class="input_set">
                        <h2 class="input_set_header my-4"><u>Add Doctor</u></h2>
                        <div class="input_one mb-2">
                            <span class="input_set_text">Doctor Name</span>
                            <input type="text" class="common_input form-control " name="doctorName" required />
                        </div>
                        <div class="input_one mb-2">
                            <span class="input_set_text">Age</span>
                            <input type="text" class="common_input form-control " name="doctorAge" required />
                        </div>
                        <div class="input_one mb-2">
                            <span class="input_set_text">Gender</span>
                            <select name="doctorGender" id="" class="common_input form-control" required>
                                <option value="0">Male</option>
                                <option value="1">Female</option>
                            </select>
                            <!-- <input type="text" class="common_input " name="doctorGender" /> -->
                        </div>
                        <div class="input_one mb-2">
                            <span class="input_set_text">Speciality</span>
                            <input type="text" class="common_input form-control " name="doctorSpeciality" required />
                        </div>
                        <div class="input_one mb-2">
                            <span class="input_set_text">Contact</span>
                            <input type="text" class="common_input form-control " name="doctorPhone" required />
                        </div>
                        <div class="input_one mb-2">
                            <span class="input_set_text add_file">Profile Photo</span>
                            <input type="file" id="formFileLg" class="form-control common_input" accept="image/*" name="doctorPhoto" required />
                        </div>

                        <div class=" mb-2  ">
                            <!-- Add Btn -->
                            <button type="submit" href="" class="common_btn add_btn" name="doctorAdd">Add</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>