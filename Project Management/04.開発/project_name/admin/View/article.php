<?php
include("../Controller/emergencyController.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Article</title>
    <!-- Css -->
    <link rel="stylesheet" href="./resources/css/root.css?v=" <?= time() ?> />
    <link rel="stylesheet" href="./resources/css/emergency.css">
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/0442ff9845.js" crossorigin="anonymous"></script>
</head>

<body>
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
                        <span class="navbar-brand ttl_admin" href="#">Articles</span>
                    </div>
                </div>

                <!-- Show Article Table -->
                <section class="first_aid_table mt-4">
                    <table class="table">
                        <thead class="table_bgcolor" id="table_header">
                            <tr>
                                <td>No.</td>
                                <td>Header</td>
                                <td>Header for paragraph</td>
                                <td>Paragraph</td>
                                <td id="img_header">Image</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody id="table_text">
                            

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


                <!-- Add First Aid Tab Form -->
                <section class="first_aid_tab">
                    <form action="../Controller/article/articleController.php" method="POST" class="input_set">
                        <h2 class="input_set_header my-4">Add New Article</h2>
                        <div class="input_one mb-2">
                            <span class="input_set_text">Header </span>
                            <input type="text" class="common_input form-control" name="homeArticleHeader" required />
                        </div>
                        <div class="input_one mb-2">
                            <span class="input_set_text">Header for paragraph</span>
                            <input type="text" class="common_input form-control" name="homeArticleParaHeader" required />
                        </div>
                        <div class="input_one mb-2">
                            <span class="input_set_text">Text for paragraph</span>
                            <textarea class="common_input form-control text_area" placeholder="Text" name="homeArticlePara" required></textarea>
                        </div>
                        <div class="input_one mb-2">
                            <span class="input_set_text add_file">Article Photo</span>
                            <input type="file" id="formFileLg" class="form-control common_input" accept="image/*" name="homeArticlePhoto"  required />
                        </div>
                        <!-- Add Btn -->
                        <button type="submit" name="homeArticleAdd" class="common_btn add_btn">Add</button>
                        <hr />
                    </form>
                </section>

            </div>
        </div>
    </div>
</body>

</html>