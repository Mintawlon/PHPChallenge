<?php
include("../Controller/emergencyPage/emergencyController.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Aid For Emergency Situations</title>
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow&family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <!-- Css -->
    <link rel="stylesheet" href="./resources/css/emergency.css?v=" time()>
    <!-- Css Root  -->
    <link rel="stylesheet" href="./resources/css/root.css">
    <script src="./resources/js/emergency.js"></script>

</head>

<body>
    <!-- Header -->
    <?php
    include("./common/head.php")
    ?>
    <!-- Search Box -->
    <div id="first_aid_search" class="me-4">
        <div class="searchbox mt-2">
            <span class="search_text fw-semibold px-2">Search</span>
            <input type="text" class="search_input ps-5" placeholder="" />
            <i class="fa-solid fa-magnifying-glass search_icon"></i>
        </div>
    </div>
    <!-- First Tab -->
    <div class="important_tab text-center mt-5">
        <h3 class="text-uppercase important_tab_header ">why is it important to know first aid?</h3>
        <div class="important_tab_para">
            <p>Lorem ipsum dolor sit amet consectetur, ading elit. Quas maxime facere laboriosam id, quae sequi error veritatis culpa doloremque eveniet ipsum unde quibusdam sapiente, perspiciatis quisquam ipsa consectetur repudiandae quia?</p>
        </div>
        <hr class="line" />
    </div>

    <!-- Cards -->
    <?php foreach ($emergencyInfo as $emergency) { ?>
        <div class="first_aid_card my-4">
            <h1 class="first_aid_card_header mb-3">First Aid For <span>
                <?= $emergency["article_header"] ?>
            </span>
            </h1>
            <div class="wrapper">
                <img src="./storages/image/<?= $emergency["article_image"] ?>" alt="" class="card_img" />
                <div class="info">
                    <h2 class="first_aid_para_header">What to Do?</h2>
                    <ol class="first_aid_para">
                        <li id="listOne">
                        <?= $emergency["article_text"] ?>
                        </li>
                        <!-- <li>
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
                        </li> -->
                    </ol>
                </div>
            </div>
            <hr class="line" />
        </div>
    <?php }
    ?>

    <!-- Footer -->
    <?php
    include("./common/footer.php")
    ?>
</body>

</html>