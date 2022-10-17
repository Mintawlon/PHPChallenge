<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Patient</title>
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/0442ff9845.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./resources/css/root.css?v=" <?= time() ?> />
    <script src="./resources/js/editblog.js" defer></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <!-- Side Bar Menu Copy Here -->
            <?php
            include("./common/nav.php")
            ?>

            <div class=" data_box   col-sm-9  col-md-8 col-xl-10 mt-3">
                <!-- Header -->
                <div class="header_wrapper bg_header ">
                    <div class="header_box">
                        <span class="navbar-brand ttl_admin" href="#">Edit Blog</span>
                    </div>
                </div>
                <div class="sec_input mb-2">
                    <a href="./blog.php" class="common_btn add_btn back_btn">Back to Blogs Page
                        <i class="fa-solid fa-arrow-left arrow_left"></i>
                    </a>
                </div>
                <section class="add_diseases">
                    <div class="input_set">
                        <h2 class="input_set_header my-4">Edit Current Diseases</h2>
                        <div class="image-box d-flex justify-content-center mb-3">
                            <img src="./storages/blog/default.png" alt="" width="100" id="image" class="rounded- border border-2">
                        </div>
                        <div class="input_one mb-2">
                            <span class="input_set_text add_file"> image</span>
                            <input type="file" id="formFileLg" class="form-control form-control-lg common_input " accept="image/*" id="uploadFile" onchange="setImage()" />
                        </div>
                        <div class="input_one mb-2">
                            <span class="input_set_text">Header</span>
                            <input type="text" class="common_input" />
                        </div>
                        <div class="input_one mb-2">
                            <span class="input_set_text"> paragraph</span>
                            <textarea class="common_input" placeholder="Text"></textarea>
                        </div>
                        <div class=" mb-2  ">
                            <!-- Add Btn -->
                            <a href="" class="common_btn add_btn">Edit</a>
                        </div>
                    </div>
                </section>
                <hr />
            </div>
        </div>
    </div>
</body>

</html>