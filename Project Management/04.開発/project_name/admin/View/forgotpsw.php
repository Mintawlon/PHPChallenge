<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <!-- Css -->
    <link rel="stylesheet" href="./resources/css/forgotpsw.css">
    <!-- root Css -->
    <link rel="stylesheet" href="./resources/css/root.css">
    <!-- jquery -->
    <script src="./resources/js/jquery3.6.0.js"></script>
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>

<body>


    <!-- Main Content -->
    <div class="container">
        <form action="../Controller/forgotpswController.php" method="post">
            <p class="adm_login text-center align-items-center fw-bold">Forgot Your Password?</p>
            <!-- Input Box -->
            <div class="inp_box">
                <br>
                <p></p>
                <p class="fw-semibold text-white fs-5"></p>
                <input type="text" value="" class="form-control " name="email" placeholder="Email Address">

                <br>
                <br>
                <button type="submit" name="resetPwd"  class="fw-bold  btn_login form-control">
                    Send Email
                </button>

            </div>
        </form>
    </div>


</body>

</html>