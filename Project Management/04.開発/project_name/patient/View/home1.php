<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <!-- Splide.js cdn link -->
  <link rel="stylesheet" href="./resources/js/splide-4.1.3/dist/css//splide.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.3/dist/css/themes/splide-skyblue.min.css">
  <!-- JS file for Slider -->
  <script src="./resources/js/home1.js" defer></script>
  <!-- Css -->
  <link rel="stylesheet" href="./resources/css/root.css">
  <link rel="stylesheet" href="./resources/css/home1.css?v=" time()>
  
</head>

<body>
  <!-- Header -->
  <?php
  include("./common/head.php")
  ?>
   <!-- Medicine Slider -->
  <section class="splide medicine my-5" aria-label="Splide Basic HTML Example">
    <div class="splide__track medicine_wrapper">
      <ul class="splide__list">
        <li class="splide__slide">
          <div class="slide_img_div">
            <img src="./storages/image/emergency.jpg" alt="" class="slide_img" />
          </div>
        </li>
        <li class="splide__slide">
          <div class="slide_img_div">
            <img src="./storages/image/emergency.jpg" alt="" class="slide_img" />
          </div>
        </li>
        <li class="splide__slide">
          <div class="slide_img_div">
            <img src="./storages/image/emergency.jpg" alt="" class="slide_img" />
          </div>
        </li>
      </ul>
    </div>
  </section>
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
  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.3/dist/js/splide.min.js"></script>
</body>

</html>