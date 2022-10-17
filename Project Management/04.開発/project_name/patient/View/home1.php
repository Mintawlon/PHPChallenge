<?php
session_start();
include "../Controller/articleInfoController.php";
if (!isset($_SESSION["email"])) {
    header("Location: ./login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow&family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <!-- Splide.js cdn link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.3/dist/css/themes/splide-skyblue.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.3/dist/js/splide.min.js"></script>
    <!-- JS file for Slider -->

    <!-- Css -->
    <link rel="stylesheet" href="./resources//css/root.css">
    <link rel="stylesheet" href="./resources/css/home1.css">

</head>

<body>
    <!-- Header -->
    <?php
    include("./common/head.php")
    ?>
    <!-- Carousel Slider -->
    <div class="carousel_slider">
        <section class="splide first_slide my-5" id="carousel" aria-label="Splide Basic HTML Example">
            <div class="splide__track first_slide_wrapper">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <div class="first_slide_div">
                            <img src="./storages/image/blood_donate.png" alt="" class="first_slide_img" />
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="first_slide_div">
                            <img src="./storages/image/Covid (2).png" alt="" class="first_slide_img" />
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="first_slide_div">
                            <img src="./storages/image/Dengue Fever.png" alt="" class="first_slide_img" />
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="first_slide_div">
                            <img src="./storages/image/hospital ads.png" alt="" class="first_slide_img" />
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </div>
    <!-- Articles -->
   <div class="article_wrapper">
   <h2 class="text-white text-center py-3 "> <u> Know More</u></h2>

   <?php foreach ($homeArticleInfo as $info) { ?>
    <div class="articles px-2">
        <div class="article">
            <div class="article_header_div">
            <h1 class="text-white mt-4  article_header"> <?= $info["header"] ?></h1>
            </div>
            <div class="article_text">
                <h3 class="text-white"> <?= $info["para_header"] ?></h3>
                <p class="text-white"> <?= $info["para_text"] ?></p>
            </div>
            <div class="article_image">
                <img src="./storages/image/<?= $info["image"] ?>" alt="" id="article_image">
            </div>
        </div>
    </div>
    <hr id="line" />
    <?php }
    ?>


  

  

   </div>
    
    <!--scroll card-->
    <div class="container">
        <ul class="cards">
            <li class="card">
                <div>
                    <div class="vaccine_div">
                        <img src="./storages/image/vaccine.png" class="vaccine_img">
                    </div>
                    <h3 class="card-title">Service 1</h3>
                    <div class="card-content">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card-link-wrapper">
                    <a href="" class="card-link">Learn More</a>
                </div>
            </li>
            <li class="card">
                <div>
                    <h3 class="card-title">Service 2</h3>
                    <div class="card-content">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab repudiandae magnam harum natus
                            fuga et repellat in maiores.</p>
                    </div>
                </div>
                <div class="card-link-wrapper">
                    <a href="" class="card-link">Learn More</a>
                </div>
            </li>
            <li class="card">
                <div>
                    <h3 class="card-title">Service 3</h3>
                    <div class="card-content">
                        <p>Phasellus ultrices lorem vel bibendum ultricies. In hendrerit nulla a ante dapibus pulvinar
                            eu eget quam.</p>
                    </div>
                </div>
                <div class="card-link-wrapper">
                    <a href="" class="card-link">Learn More</a>
                </div>
            </li>
            <li class="card">
                <div>
                    <h3 class="card-title">Service 4</h3>
                    <div class="card-content">
                        <p>Aenean posuere mauris quam, pellentesque auctor mi bibendum nec. Sed scelerisque lacus nisi,
                            quis auctor lorem ornare vel.</p>
                    </div>
                </div>
                <div class="card-link-wrapper">
                    <a href="" class="card-link">Learn More</a>
                </div>
            </li>
            <li class="card">
                <div>
                    <h3 class="card-title">Service 5</h3>
                    <div class="card-content">
                        <p>Vestibulum pharetra fringilla felis sit amet tempor. Interdum et malesuada fames ac ante
                            ipsum primis in faucibus. Cras et arcu sit amet est consequat feugiat. Nam ut sapien
                            pulvinar.</p>
                    </div>
                </div>
                <div class="card-link-wrapper">
                    <a href="" class="card-link">Learn More</a>
                </div>
            </li>
            <li class="card">
                <div>
                    <h3 class="card-title">Service 6</h3>
                    <div class="card-content">
                        <p>Donec ut tincidunt nisl. Vivamus eget eros id elit feugiat mollis. Nam sed sem quis libero
                            finibus tempor.</p>
                    </div>
                </div>
                <div class="card-link-wrapper">
                    <a href="" class="card-link">Learn More</a>
                </div>
            </li>
            <li class="card">
                <div>
                    <h3 class="card-title">Service 7</h3>
                    <div class="card-content">
                        <p>Aliquam eget nisl auctor, sollicitudin ipsum at, dignissim ligula. Donec tincidunt in elit et
                            pellentesque. Integer posuere metus ac massa mollis euismod.</p>
                    </div>
                </div>
                <div class="card-link-wrapper">
                    <a href="" class="card-link">Learn More</a>
                </div>
            </li>
            <li class="card">
                <div>
                    <h3 class="card-title">Service 8</h3>
                    <div class="card-content">
                        <p> Vivamus eget eros id elit feugiat mollis. Nam sed sem quis libero finibus tempor.</p>
                    </div>
                </div>
                <div class="card-link-wrapper">
                    <a href="" class="card-link">Learn More</a>
                </div>
            </li>
            <li class="card">
                <div>
                    <h3 class="card-title">Service 9</h3>
                    <div class="card-content">
                        <p>Duis id congue turpis. Donec sodales porta felis, nec ultricies ante. Nam placerat vitae
                            metus sit amet tempor. Aliquam ac dictum est.</p>
                    </div>
                </div>
                <div class="card-link-wrapper">
                    <a href="" class="card-link">Learn More</a>
                </div>
            </li>
            <li class="card">
                <div>
                    <h3 class="card-title">Service 10</h3>
                    <div class="card-content">
                        <p>Pellentesque eget eros eget justo efficitur fermentum.</p>
                    </div>
                </div>
                <div class="card-link-wrapper">
                    <a href="" class="card-link">Learn More</a>
                </div>
            </li>
            <li class="card">
                <div>
                    <h3 class="card-title">Service 11</h3>
                    <div class="card-content">
                        <p>Phasellus posuere nec nibh ut tincidunt. Aenean mollis turpis non eros posuere, at luctus leo
                            hendrerit. Integer non libero sapien.</p>
                    </div>
                </div>
                <div class="card-link-wrapper">
                    <a href="" class="card-link">Learn More</a>
                </div>
            </li>
            <li class="card">
                <div>
                    <img src="./storages/image/vaccine.png">
                    <h3 class="card-title">Service 12</h3>
                    <div class="card-content">
                        <p>Vestibulum ante ipsum primis in</p>
                    </div>
                </div>
                <div class="card-link-wrapper">
                    <a href="" class="card-link">Learn More</a>
                </div>
            </li>
        </ul>
    </div>
    <!--scorll card-->
    <!-- Footer -->
    <?php
    include("./common/footer.php")
    ?>
    <script src="./resources/js/home1.js"></script>
</body>

</html>