<?php
session_start();
include "../Controller/medicineController.php";
// echo "<pre>";
// print_r($medicineInfo);
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
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/0442ff9845.js" crossorigin="anonymous"></script>

    <!-- Css -->
    <link rel="stylesheet" href="./resources//css/root.css">
    <link rel="stylesheet" href="./resources/css/home1.css?v=" <?php time() ?>>

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
        <h1 class="text-white text-center py-3 ">Articles</h1>

        <?php foreach ($homeArticleInfo as $info) { ?>
            <div class="articles px-2">
                <div class="article">
                    <div class="article_header_div">
                        <h1 class="text-white mt-4  article_header">
                            <?= $info["header"] ?>

                        </h1>
                        <a href="./<?= $info["page_link"] ?>" class="text-white 
            " id="seeMore">See More <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
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
            <?php $count = 1; ?>

            <?php foreach ($medicineInfo as $medicine) {

            ?>
                <li class="card">
                    <div>
                        <div class="vaccine_div">
                            <img src="./storages/medicineImage/<?php echo $medicine["medicine_image"] ?>" class="vaccine_img">
                        </div>
                        <h3 class="card-title"><?php echo $medicine["medicine_name"] ?></h3>
                        <div class="card-content">
                            <p ipsum><?php echo $medicine["description"] ?></p>
                        </div>
                    </div>
<<<<<<< HEAD

                    <div class="card-link-wrapper"><a href="" class="card-link">Learn More</a>
=======
                
                    <!-- <div class="card-link-wrapper"><a href="" class="card-link">Learn More</a> -->
>>>>>>> origin/main
                    <?php } ?>
                    </div>
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