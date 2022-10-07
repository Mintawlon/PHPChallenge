<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to your account</title>
    <!-- Css -->
    <link rel="stylesheet" href="./resources/css/login.css">
    <!-- Css Root  -->
    <link rel="stylesheet" href="./resources/css/root.css">
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>

<body>
    <div class="conainer">
        <!-- Logo  -->
        <img class="mt-5 ms-5" src="" alt="LOGO">
        <!-- body -->
        <div class="body">
            <p class="wclback">Welcome back</p>
            <p class="login mt-5 text-white">Login to your account</p>
            <!-- input box -->
            <div class="inpbox ms-5 mt-1">
                <br>
                <input type="text" class="name form-control" placeholder="Login with email">
                <br>
                <br>
                <br>
                <input type="text" class="name form-control" placeholder="Password">
                
                
                <a href=""><p class="forgotpsw  text-decoration-underline">Forgot Password?</p></a>
                <button type="submit" class="btnsignup mt-1 form-control">
                    Login In
                </button>
                <a href="">
                    <p class="mt-2 reg text-white fs-6 text-decoration-underline d-flex">Not Registered yet?</p>
                </a>
            </div>
            <div>
                <img class="login_img ms-5" src="../View/components/card/image/image_login.png.png" alt="">
            </div>
        </div>
</body>

</html>