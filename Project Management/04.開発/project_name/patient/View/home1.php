<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <!-- Root Css -->
  <link rel="stylesheet" href="./resources/css/root.css">
  <!-- Css link -->
  <link rel="stylesheet" href="./resources/css/home1.css?v=" time()>
  <!-- cdn link -->
  <link rel="stylesheet" href="./resources/js/splide-4.1.3/dist/css//splide.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.3/dist/css/themes/splide-skyblue.min.css">


<body>
  <!-- Header -->
  <?php
  include("./common/head.php")
  ?>
  <section class="splide" aria-label="Splide Basic HTML Example">
    <div class="splide__track">
      <ul class="splide__list">
        <li class="splide__slide">Slide 01</li>
        <li class="splide__slide">Slide 02</li>
        <li class="splide__slide">Slide 03</li>
      </ul>
    </div>
  </section>
  <?php
  include("./common/footer.php")
  ?>
  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.3/dist/js/splide.min.js"></script>
  <script>
    var splide = new Splide('.splide', {
      type: 'loop',
      perPage: 3,
      autoplay: true,
    });

    splide.mount();
  </script>

</body>

</html>