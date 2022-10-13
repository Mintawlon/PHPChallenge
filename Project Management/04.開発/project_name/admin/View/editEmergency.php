<?php
include("../Controller/emergencyEditController.php");
$info= $_SESSION["articleInfo"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit First Aid kit</title>
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
                        <span class="navbar-brand ttl_admin" href="#">Edit First Aid Kit</span>
                    </div>
                </div>
                <div class="sec_input mb-2">
                    <a href="./emergency.php" class="common_btn add_btn back_btn">Back to Emergency
                        <i class="fa-solid fa-arrow-left arrow_left"></i>
                    </a>
                </div>
                <form method="POST" action="../Controller/emergencyEditController.php" class="input_set">
                        <h2 class="input_set_header my-4">Edit First Aid Tab</h2>
                        <div class="input_one mb-2">
                            <span class="input_set_text">Header for paragraph</span>
                            <input type="text" class="common_input " name="header" value="<?=$emergencyTab[0]["header"]?>" />
                        </div>
                        <div class="input_one mb-2">
                            <span class="input_set_text">Add new paragraph</span>
                            <textarea class="common_input " placeholder="Text" name="paragraph"><?=$emergencyTab[0]["text"]?></textarea>
                        </div>
                            <!-- Add Btn -->
                            <button type="submit" name="edit_tab" class="common_btn add_btn">Edit</button>
                        <hr />
                    </form>
                <section class="edit_first_aid">
                    <form action="../Controller/emergencyEditController.php" method="POST" class="input_set">
                        <h2 class="input_set_header my-4">Edit First Aid Kit</h2>
                        <div class="input_one mb-2">
                            <span class="input_set_text add_file">Update image</span>
                            <input type="file" id="formFileLg" class="form-control form-control-lg common_input " accept="image/*" name="articleImage" />
                        </div>
                        <div class="input_one mb-2">
                            <span class="input_set_text">Header</span>
                            <input type="text" class="common_input" value="<?=$info[0]["article_header"]?>"  name="articleHeader"/>
                        </div>
                        <div class="input_one mb-2">
                            <span class="input_set_text">Update paragraph</span>
                            <textarea class="common_input" placeholder="Text" name="articleText"><?=$info[0]["article_text"]?></textarea>
                        </div>
                        <input type="hidden" name="article_id" value="<?=$info[0]["id"]?>">
                        <div class=" mb-2  ">
                            <!-- Add Btn -->
                            <button type="submit" class="common_btn add_btn" name="edit_article">Update</button>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
</body>

</html>