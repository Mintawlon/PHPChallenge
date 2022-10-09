<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <!-- Css Root  -->
    <link rel="stylesheet" href="./resources/css/root.css">
    <!-- Css -->
    <link rel="stylesheet" href="./resources/css/signUp.css">
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>

<body>
    <div class="conainer-fluid">
        <!-- Logo  -->
        <img class="mt-5 ms-5" src="" alt="LOGO">
        <!-- body -->
        <div class="body ">
            <div class="inputbox_wrapper">
                <p class="sign_up mt-3">Sign Up</p>
                <!-- input box -->
                <div class="inpbox mt-3">
                    Name* <br>
                    <input type="text" class="name form-control" placeholder="username">
                    <br>
                    <br>
                    Email* <br>
                    <input type="text" class="name form-control" placeholder="email">
                    <br>
                    <br>
                    Password* <br>
                    <input type="text" class="name form-control" placeholder="password">
                    <br>
                    <br>
                    <button type="submit" class="btnsignup mt-1 form-control">
                        Sign up
                    </button>
                    <a href="">
                        <p class="mt-2 reg text-white fs-6 text-decoration-underline ">Already have an account?</p>
                    </a>
                </div>
            </div>
            <div>
                <img class="signup_img ms-5" src="../View/components/card/image/image_login.png.png" alt="">
            </div>
        </div>
</body>

</html>