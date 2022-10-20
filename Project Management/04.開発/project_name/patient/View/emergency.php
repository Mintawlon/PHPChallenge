<?php
session_start();
include("../Controller/emergencyPage/emergencyController.php");
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
    <title>First Aid For Emergency Situations</title>
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow&family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <!-- Css -->
    <link rel="stylesheet" href="./resources/css/emergency.css?v=" time()>
    <!-- Css Root  -->
    <link rel="stylesheet" href="./resources/css/root.css">
    <script src="./resources/js/jquery3.6.0.js"></script>
    <script src="./resources/js/emergency.js" defer></script>

</head>

<body>
    <!-- Header -->
    <?php
    include("./common/head.php")
    ?>
    <!-- Search Box -->
    <div id="first_aid_search" class="me-4">
        <div class="searchbox mt-2">
            <input type="text" class="search_input  ps-5" id="searchFirstaid" placeholder="search by bodypart" />
            <i class="fa-solid fa-magnifying-glass search_icon text_white"></i>
            <button id="search" class="search_text">Search</button>
        </div>
    </div>
    <!-- First Tab -->
    <div class="important_tab text-center mt-5">
        <h3 class="text-uppercase important_tab_header ">
            <?php
            if (count($emergencyTab) == 0) {
                "";
            } else { ?>
                <p><?= $emergencyTab[0]["header"] ?></p>
            <?php }
            ?>
        </h3>
        <div class="important_tab_para">
            <?php
            if (count($emergencyTab) == 0) {
                "";
            } else { ?>
                <p><?= $emergencyTab[0]["text"] ?></p>
            <?php
            } ?>
        </div>
        <hr class="line" />
    </div>

    <!-- Cards -->
    <?php foreach ($emergencyInfo as $emergency) { ?>
        <div class="first_aid_card my-4" id="articleSearch">
            <!-- <div class="first_aid_card">
                <h1 class="first_aid_card_header mb-3">First Aid For <span>
                        <?= $emergency["article_header"] ?>
                    </span>
                </h1>
                <div class="wrapper">
                    <img src="./storages/image/<?= $emergency["article_image"] ?>" alt="" class="card_img" />
                    <div class="info">
                        <h2 class="first_aid_para_header">What to Do?</h2>
                        <?php
                        $html = "<ol class='first_aid_para'>
                        <li>Find a person nearby. Make eye contact, point to them, and say: “Call 911.”</li>
                        <li>Start doing chest compressions on the person who needs help. Using both your hands, push down hard and fast in the center of the person’s chest. Let their chest come back up naturally between compressions. Keep going until someone with more training arrives.
                        </li>
                        <li>If you’re trained in CPR, you can use chest compressions and rescue breathing.
                        </li>
                        <li>If it’s available, use an AED. However, do not put off doing chest compressions to go look for an AED. If possible, instruct someone else to go find the device and bring it to you.</li>
                        </ol>";
                        echo $html;
                        ?>
                    </div>
                </div>
                <hr class="line" />
            </div> -->
        </div> 
    <?php }
    ?>

    <!-- Footer -->
    <?php
    include("./common/footer.php")
    ?>
</body>

</html>