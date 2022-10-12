<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Emergency</title>
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/0442ff9845.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./resources/css/root.css?v=" <?= time() ?> />
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <!-- Side Bar Menu Copy Here -->
            <?php
            include("./common/nav.php")
            ?>

            <div class="data_box col-sm-9 col-md-8 col-xl-10 mt-3">
                <div class="header_wrapper bg_header ">
                    <div class="header_box">
                        <span class="navbar-brand ttl_admin" href="#">Emergency</span>
                    </div>
                </div>
                <div class="sec_input mb-2">
                    <a href="./editEmergency.php" class="common_btn add_btn go_btn">Go to First Aid Kit
                        <i class="fa-solid fa-arrow-right arrow_right"></i>
                    </a>
                </div>
                <section class="first_aid_tab">
                    <div class="input_set">
                        <h2 class="input_set_header my-4">Update First Aid Tab</h2>
                        <div class="input_one mb-2">
                            <span class="input_set_text">Header for paragraph</span>
                            <input type="text" class="common_input" />
                        </div>
                        <div class="input_one mb-2">
                            <span class="input_set_text">Add new paragraph</span>
                            <textarea class="common_input" placeholder="Text"></textarea>
                        </div>
                        <div class=" mb-2  ">
                            <!-- Add Btn -->
                            <a href="" class="common_btn add_btn">Update</a>
                        </div>
                        <hr />
                    </div>
                </section>
                <section class="first_aid_table">
                    <table class="table">
                        <thead class="table_bgcolor">
                            <tr>
                                <td>No.</td>
                                <td>Image</td>
                                <td>Header</td>
                                <td>Description</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="row_bdr">
                                <td>1</td>
                                <td>Image 1</td>
                                <td>Header</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, eum.</td>
                                <td>
                                    <span><a href="" class="color_sixth">Edit</a></span>
                                    <span><a href="" class="color_fifth">Delete</a></span>
                                </td>
                            </tr>
                            <tr class="row_bdr">
                                <td>1</td>
                                <td>Image 2</td>
                                <td>Header</td>
                                <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius, earum!</td>
                                <td>
                                    <span><a href="" class="color_sixth">Edit</a></span>
                                    <span><a href="" class="color_fifth">Delete</a></span>
                                </td>
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
                <section class="add_first_aid">
                    <form class="input_set" action="../Controller/emergencyController.php" method="POST">
                        <h2 class="input_set_header my-4">Add First Aid Kit</h2>
                        <div class="input_one mb-2">
                            <span class="input_set_text add_file">Add image</span>
                            <input type="file" name="emergencyImage" id="formFileLg" class="form-control form-control-lg common_input " accept="image/*" />
                        </div>
                        <div class="input_one mb-2">
                            <span class="input_set_text">Header</span>
                            <input name="emergencyHeader" type="text" class="common_input" />
                        </div>
                        <div class="input_one mb-2">
                            <span class="input_set_text">Add paragraph</span>
                            <textarea name="emergencyParagraph" class="common_input" placeholder="Text"></textarea>
                        </div>
                        <div class=" mb-2  ">
                            <!-- Add Btn -->
                            <button type="submit" name="addEmergency" href="" class="common_btn add_btn">Add</button>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
</body>

</html>