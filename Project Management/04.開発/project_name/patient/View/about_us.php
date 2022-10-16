<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow&family=Source+Sans+Pro&display=swap" rel="stylesheet">

    <!-- Css -->
    <link rel="stylesheet" href="./resources/css/about_us.css?v=" time()>
    <!-- Css Root  -->
    <link rel="stylesheet" href="./resources/css/root.css">
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body>
    <!-- Header -->
    <?php
    include("./common/head.php")
    ?>
    <div class="container">
        <!-- Page header -->
        <h3 class="about_header my-4">About Us</h3>

        <!-- Page Tab -->
        <p class="text-center first_aid_para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt qui magnam, ipsa tenetur impedit, unde nisi repudiandae quidem voluptates at sapiente quisquam id obcaecati distinctio! Laborum ducimus magni labore, fugit rem quod delectus, atque facere quam, dolores natus! Incidunt sint voluptate dolorem nostrum architecto doloremque rem, dolor eum! Sunt sint error quaerat quisquam alias cupiditate tempore eveniet facilis, dolorum labore expedita amet illum quis. Nihil, beatae dolorem adipisci ratione accusamus unde veritatis soluta illum vel quas. Ad veritatis fugiat repellendus odio, doloribus quibusdam beatae at, aliquam sed corporis totam distinctio rerum adipisci atque expedita voluptatem soluta iusto voluptatibus. Totam, tempore.</p>
        <img src="./storages/image/emergency.jpg" alt="" class="about_us_center mt-5" />
        <hr class="about_line mt-5" />

        <!-- Section-2 -->

        <div class="first_aid_card my-4">
            <div class="wrapper">
                <div class="info" data-aos="flip-down">
                    <h2 class="display_top header-2">Section-2</h2>
                    <ol class="first_aid_para">
                        <li>
                            Find a person nearby. Make eye contact, point to them, and say:
                            “Call 911.”
                        </li>
                        <li>
                            Start doing chest compressions on the person who needs help. Using
                            both your hands, push down hard and fast in the center of the
                            person’s chest. Let their chest come back up naturally between
                            compressions. Keep going until someone with more training arrives.
                        </li>
                        <li>
                            If you’re trained in CPR, you can use chest compressions and
                            rescue breathing.
                        </li>
                        <li>
                            If it’s available, use an AED. However, do not put off doing chest
                            compressions to go look for an AED. If possible, instruct someone
                            else to go find the device and bring it to you.
                        </li>
                    </ol>
                </div>
                <img src="./storages/image/emergency.jpg" alt="" class="card_img" />

            </div>
            <hr class="about_line" />
        </div>

        <!-- Section-3 -->

        <div class="content-container">
            
            <div class="card p-3" style="width: 38rem;">
                <p class="text-center content-card-header">Get In Touch</p>
                <!--input Form -->
                <form action="../Controller/aboutUs/aboutUscontroller.php" method="post">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingPassword" placeholder="Your Name" name="name">
                        <label for="floatingPassword">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingPassword" placeholder="Reason" name="reason">
                        <label for="floatingPassword">Reason for Contact</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="comment"></textarea>
                        <label for="floatingTextarea2">Comments</label>
                    </div>
                    <!-- Blue Square Btn -->
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-primary" type="submit" name="contact">Submit</button>
                    </div>

                </form>
            </div>
        </div>

        <hr class="about_line mt-4" />
        <!-- dropdown section -->
        <div class="policy">
            <h2 class="display_top header-2">Privacy Policy</h2>
            <!-- Page Tab -->
            <p class="text-center first_aid_para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt qui magnam, ipsa tenetur impedit, unde nisi repudiandae quidem voluptates at sapiente quisquam id obcaecati distinctio! Laborum ducimus magni labore, fugit rem quod delectus, atque facere quam, dolores natus! Incidunt sint voluptate dolorem nostrum architecto doloremque rem, dolor eum! Sunt sint error quaerat quisquam alias cupiditate tempore eveniet facilis, dolorum labore expedita amet illum quis. Nihil, beatae dolorem adipisci ratione accusamus unde veritatis soluta illum vel quas. Ad veritatis fugiat repellendus odio, doloribus quibusdam beatae at, aliquam sed corporis totam distinctio rerum adipisci atque expedita voluptatem soluta iusto voluptatibus. Totam, tempore.</p>
            <!-- Page Tab -->
            <p class="text-center first_aid_para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt qui magnam, ipsa tenetur impedit, unde nisi repudiandae quidem voluptates at sapiente quisquam id obcaecati distinctio! Laborum ducimus magni labore, fugit rem quod delectus, atque facere quam, dolores natus! Incidunt sint voluptate dolorem nostrum architecto doloremque rem, dolor eum! Sunt sint error quaerat quisquam alias cupiditate tempore eveniet facilis, dolorum labore expedita amet illum quis. Nihil, beatae dolorem adipisci ratione accusamus unde veritatis soluta illum vel quas. Ad veritatis fugiat repellendus odio, doloribus quibusdam beatae at, aliquam sed corporis totam distinctio rerum adipisci atque expedita voluptatem soluta iusto voluptatibus. Totam, tempore.</p>
        </div>
    </div>
    </div>
    <!-- Footer -->
    <?php
    include("./common/footer.php")
    ?>

    <script>
        AOS.init();
    </script>
</body>

</html>