<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to your account</title>
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow&family=Source+Sans+Pro&display=swap" rel="stylesheet">

    <!-- Css Root  -->
    <link rel="stylesheet" href="./resources/css/root.css">
    <!-- Css -->
    <link rel="stylesheet" href="./resources/css/login.css?v=" <?php time() ?>>
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>

<body>
    <div class="conainer">
        <!-- Logo  -->
        <img class="mt-5 ms-5" src="" alt="LOGO">
        <!-- body -->
        <div class="body mt-5 mx-2">
            <div class="inputbox_wrapper">
                <div class="header">
                    <p class="wclback">Welcome back</p>
                    <p class="login  text-white">Login to your account</p>
                </div>
                <!-- input box -->
                <div class="inpbox">
                    <br>
                    <input type="text" class="name form-control mb-3" placeholder="Login with email">
                    <input type="text" class="name form-control" placeholder="Password">


                    <a href="">
                        <p class="forgotpsw text-decoration-underline">Forgot Password?</p>
                    </a>
                    <button type="submit" class="btnsignup mt-1 form-control">
                        Login In
                    </button>
                    <a href="">
                        <p class="mt-2 reg text-white fs-6 text-decoration-underline ">Not Registered yet?</p>
                    </a>
                </div>
            </div>
            <div>
                <img class="login_img ms-5" src="../View/components/card/image/image_login.png.png" alt="">
            </div>
        </div>
</body>

</html>