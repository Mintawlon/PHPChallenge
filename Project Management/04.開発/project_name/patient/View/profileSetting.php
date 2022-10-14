<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow&family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <!-- Css -->
    <link rel="stylesheet" href="./resources/css/profileSetting.css?v=" time()>
    <!-- Root Css -->
    <link rel="stylesheet" href="./resources/css/root.css">
</head>

<body>
    <!-- Header -->
    <?php
    include("./common/head.php");
    ?>
    <!-- Edit Profile -->
    <h3 class="header my-4 text-center">Edit user Profile</h3>
    <div class="container-fluid d-flex justify-content-center">
        <div class="card p-3 cart" style="width: 45rem;">
            <!--input Form -->
            <form action="">
                <div class="mt-3 row">
                    <label for="inputfile" class="col-sm-2 col-form-label text-white">Image</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" id="inputfile">
                    </div>
                </div>
                <div class="row">
                    <label for="inputName" class="col-sm-2 col-form-label text-white">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputName">
                    </div>
                </div>
                <div class="row">
                    <label for="inputAge" class="col-sm-2 col-form-label text-white">Age</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputage">
                    </div>
                </div>
                <div class="row">
                    <label for="inputEmail" class="col-sm-2 col-form-label text-white">Email</label>
                    <div class="col-sm-10">
                        <input type="Email" class="form-control" id="inputEmail">
                    </div>
                </div>
                <div class="row">
                    <label for="inputContact" class="col-sm-2 col-form-label text-white">Age</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="inputContact">
                    </div>
                </div>
                <div class="row">
                    <label for="inputAddress" class="col-sm-2 col-form-label text-white">Address</label>
                    <div class="col-sm-10">

                        <textarea id="inputAddress" class="form-control" rows="4" cols="50">
                    </textarea>
                    </div>
                </div>
                <!-- Blue Square Btn -->
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-primary" type="submit">Update</button>
                </div>

            </form>
        </div>
    </div>
    <!-- Footer -->
    <?php
    include("./common/footer.php")
    ?>
</body>

</html>