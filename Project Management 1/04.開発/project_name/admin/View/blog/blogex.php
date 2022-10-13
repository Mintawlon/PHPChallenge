<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add</title>
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/0442ff9845.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./resources/css/root.css" <?= time() ?> />
</head>

<body>
    <div class="container-fluid">
        <form action="../../Controller/blog/controller.php" method="post">
            <div class="row flex-nowrap">
                <!-- Side Bar Menu Copy Here -->

                <div class=" data_box   col-sm-9  col-md-8 col-xl-10 mt-3">
                    <!-- header -->




                    <section class="edit_diseases">
                        <div class="input_set">
                            <h2 class="input_set_header my-4">Change Here</h2>
                            <div class="input_one mb-2">
                                <span class="input_set_text add_file">Update image</span>
                                <input type="file" id="formFileLg" class="form-control form-control-lg common_input " accept="image/*" name="photo" />
                            </div>
                            <div class="input_one mb-2">
                                <span class="input_set_text">Header</span>
                                <input type="text" class="common_input" name="header" />
                            </div>
                            <div class="input_one mb-2">
                                <span class="input_set_text">Update paragraph</span>
                                <textarea class="common_input" placeholder="Text" name="paragraph"></textarea>
                            </div>
                            <button type="submit" class="common_btn add_btn mb-2" name="editCurrentDiseases">
                                Click Here
                            </button>

                            



                            ?>
                        </div>
                    </section>
                </div>
            </div>
        </form>
    </div>
</body>

</html>