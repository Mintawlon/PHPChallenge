<!DOCTYPE html>
<html lang="en">

<head>
<<<<<<< HEAD
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <!-- Splide.js cdn link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.3/dist/css/themes/splide-skyblue.min.css">
  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.3/dist/js/splide.min.js"></script>
  <!-- JS file for Slider -->
  
  <!-- Css -->
  <link rel="stylesheet" href="./resources/css/root.css">
  <!-- <link rel="stylesheet" href="./resources/css/home1.css?v="> -->
  <link rel="stylesheet" href="./resources/css/home1.css?v="<php? echo time() ?>>

  
=======
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Splide.js cdn link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.3/dist/css/themes/splide-skyblue.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.3/dist/js/splide.min.js"></script>
    <!-- JS file for Slider -->

    <!-- Css -->
    <link rel="stylesheet" href="./resources/css/root.css">
    <link rel="stylesheet" href="./resources/css/home1.css">
>>>>>>> 8e33cb396d88174cefaefbc8881da340292eec58
</head>

<body>
    <!-- Header -->
    <?php
    include("./common/head.php")
    ?>
    <!-- Medicine Slider -->
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
    </div>
    <!--scroll card-->
    <div class="container">
        <ul class="cards">
            <li class="card">
                <div>
                  <div class="card-image">
                  <img src="./storages/image/vaccine.png">
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
<<<<<<< HEAD
=======
                    <img src="./storages/image/vaccine.png">
>>>>>>> 8e33cb396d88174cefaefbc8881da340292eec58
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
    <!-- First Aid For Emergency Situations Tab-->
    <div class="blog_tab_wrapper">
        <div class="blog_tab mb-4">
            <div class="blog_tab_text_div">
                <h3 class="blog_tab_text">First Aid For Emergency Situations</h3>
            </div>
            <div class="blog_tab_img_div">
                <img src="./storages/image/emergency1.png" alt="" class="blog_tab_img" />
            </div>
        </div>
        <hr class="line" />
    </div>
    <!-- Footer -->
    <?php
    include("./common/footer.php")
    ?>
    <script src="./resources/js/home1.js"></script>
</body>

</html>