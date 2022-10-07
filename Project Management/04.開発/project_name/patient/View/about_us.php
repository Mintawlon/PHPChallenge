<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <!-- Css -->
    <link rel="stylesheet" href="./resources/css/about_us.css?v=" time()>
    <!-- Css Root  -->
    <link rel="stylesheet" href="./resources/css/root.css">
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
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
                <div class="info">
                    <h2 class="first_aid_para_header display_top">Section-2</h2>
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

        <div class>

            <h3 class="about_header_1 my-4">Section-3</h3>
            <p class="text-center first_aid_para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt qui magnam, ipsa tenetur impedit, unde nisi repudiandae quidem voluptates at sapiente quisquam id obcaecati distinctio! Laborum ducimus magni labore, fugit rem quod delectus, atque facere quam, dolores natus! Incidunt sint voluptate dolorem nostrum architecto doloremque rem, dolor eum! Sunt sint error quaerat quisquam alias cupiditate tempore eveniet facilis, dolorum labore expedita amet illum quis. Nihil, beatae dolorem adipisci ratione accusamus unde veritatis soluta illum vel quas. Ad veritatis fugiat repellendus odio, doloribus quibusdam beatae at, aliquam sed corporis totam distinctio rerum adipisci atque expedita voluptatem soluta iusto voluptatibus. Totam, tempore.</p>
        </div>

        <hr class="about_line mt-4" />
        <!-- dropdown section -->
        <h3 class="about_header_1 my-4">Section-4</h3>

        <div class="dropdown_case ">
            <div class="btn-group ">
                <button type="button" class="btn btn-warning dropdown-toggle dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    Privacy policy for the website of Medplatform
                </button>
                <ul class="dropdown-menu">
                    <p class="dropdown_para">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus, repellendus vitae iste distinctio perspiciatis iusto ex saepe illo corrupti assumenda facilis rem ratione. Iste blanditiis officiis, aliquid aperiam ex corrupti autem nemo ipsam itaque, laborum nam totam, harum iusto! Deleniti voluptatum corrupti commodi at fugit excepturi officiis voluptatem iusto consequuntur.</p>
                </ul>
            </div></br>
            <div class="btn-group mt-3">
                <button type="button" class="btn btn-warning dropdown-toggle dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    Privacy policy for the website of Medplatform
                </button>
                <ul class="dropdown-menu">
                    <p p class="dropdown_para">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus, repellendus vitae iste distinctio perspiciatis iusto ex saepe illo corrupti assumenda facilis rem ratione. Iste blanditiis officiis, aliquid aperiam ex corrupti autem nemo ipsam itaque, laborum nam totam, harum iusto! Deleniti voluptatum corrupti commodi at fugit excepturi officiis voluptatem iusto consequuntur.</p>
                </ul>
            </div>
        </div>
    </div> -->
    </div>
    <!-- Footer -->
    <?php
    include("./common/footer.php")
    ?>
</body>

</html>