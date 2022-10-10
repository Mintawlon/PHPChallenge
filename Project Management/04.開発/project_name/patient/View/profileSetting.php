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
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- Css -->
    <link rel="stylesheet" href="./resources/css/profileSetting.css?v=" time()>
    <!-- Root Css -->
    <link rel="stylesheet" href="./resources/css/root.css">
</head>

<body>
    <div class="container-fluid">
        <!-- Header -->
        <?php
        include("./common/head.php");
        ?>
        <!-- Edit Profile -->

        <div class="offcanvas-body">
            <div class="box">
                <div class="mainbox">
                    <div class="mb-2">
                        <span class="txt mt-5">Patient Profile</span>
                        <p></p>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                    <div>
                        <span class=" txt mt-5">User Name</span>
                        <p></p>
                        <input class="form-control" type="text">
                    </div>
                    <br>
                    <div>
                        <span class="txt mt-5">Age</span>
                        <p></p>
                        <input class="form-control" type="text">
                    </div>  
                    <br>
                    <div>
                        <span class=" txt mt-5">Email</span>
                        <p></p>
                        <input class="form-control" type="email">
                    </div>
                    <br>
                    <div>
                        <span class="txt mt-5">Contact</span>
                        <p></p>
                        <input class="form-control" type="text">
                    </div>
                    <br>
                    <div>
                        <span class=" txt mt-5">Address</span>
                        <p></p>
                        <textarea class="form-control" "></textarea>
                    </div>
                    <br>

                    <button type="submit" class="btn_save  mt-1  ">
                        Save
                    </button>

                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>