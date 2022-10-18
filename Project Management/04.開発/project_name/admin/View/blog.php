<?php
include "../Controller/blog/listBlogController.php";
//print_r($blogList);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog</title>
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/0442ff9845.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../View/resources/css/root.css" />
    <link rel="stylesheet" href="../View/resources/css/blog.css" />
    <script src="./resources/js/blog.js" defer></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <!-- Side Bar Menu Copy Here -->
            <?php
            include("./common/nav.php");

            ?>

            <div class=" data_box  col-sm-9  col-md-8 col-xl-10 mt-3">
                <!-- header -->
                <div class="header_wrapper bg_header ">
                    <div class="header_box">
                        <span class="navbar-brand ttl_admin" href="#">Blogs</span>
                    </div>
                </div>
                <!--Add Form -->
                <div class="m-3 d-flex justify-content-center">
                    <form action="../Controller/blog/addBlogController.php" method="post" enctype="multipart/form-data">
                        <div class="image-box d-flex justify-content-center mb-3">
                            <img src="./storages/blog/default.png" alt="" width="100" id="image" class="rounded-circle">
                        </div>
                        <div class="form-group row mb-3">
                            <label for="formFileMultiple" class="col-sm-2">Image</label>
                            <div class=" col-sm-10">
                                <input class="form-control common_input" type="file" id="uploadFile" name="uploadFile" onchange="setImage()" />
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="inputPassword" class="col-sm-2 col-form-label">header</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control common_input" name="header" placeholder="header">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Warning</label>
                            <div class="col-sm-10">
                                <textarea class="form-control common_input text_area" id="exampleFormControlTextarea1" name="description" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="form-group d-flex justify-content-center">
                            <button type="submit" name="addDieses" class="btn btn-primary mb-2 w-30">Confirm</button>
                        </div>
                    </form>
                </div>
                <hr />
                <section class="diseases_table">
                    <div class="input_set">
                        <h2 class="input_set_header my-4">Update Current Diseases</h2>
                    </div>
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
                            <?php $count = 0; ?>
                            <?php foreach ($blogList as $blog) {

                            ?>
                                <tr class="row_bdr">
                                    <td><?php echo ++$count ?></td>
                                    <td>
                                        <img src="./storages/blog/<?php echo $blog["image"] ?>" alt="" width="100">
                                    </td>
                                    <td><?php echo $blog["header"] ?></td>
                                    <td><?php echo $blog["description"] ?></td>
                                    <td>
                                        <span><a href="../Controller/blog/editBlogController.php?id=<?php echo $blog["id"] ?>" class="color_sixth">Edit</a></span>
                                        <span><a href="../Controller/blog/deleteblog.php?id=<?php echo $blog["id"] ?>" class="color_fifth">Delete</a></span>
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
                </section>

            </div>
        </div>
    </div>
</body>

</html>