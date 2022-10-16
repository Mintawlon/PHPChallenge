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
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <!-- Side Bar Menu Copy Here -->
            <?php
            include("./common/nav.php")
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
                    <form action="../Controller/blog/addBlogController.php" method="post">
                        <div class="form-group row mb-3">
                            <label for="formFileMultiple" class="col-sm-2">Image</label>
                            <div class=" col-sm-10">
                                <input class="form-control" type="file" id="formFileMultiple" />
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="inputPassword" class="col-sm-2 col-form-label">header</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="header">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Warning</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary mb-2 w-30">Confirm</button>
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
                </section>

            </div>
        </div>
    </div>
</body>

</html>