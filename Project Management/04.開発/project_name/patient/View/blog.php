<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <!-- Css -->
    <link rel="stylesheet" href="./resources/css/blog.css?v="time()>
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
    <!-- Page header -->
    <h3 class="blog_header my-4">Blog</h3>
    <!-- Page Tab -->
    <div class="blog_tab_wrapper">
        <div class="blog_tab mb-4">
            <div class="blog_tab_text_div">
                <h3 class="blog_tab_text">Emergency First Aid</h3>
            </div>
            <div class="blog_tab_img_div">
                <img src="./storages/image/blog_tab_img1.png" alt="" class="blog_tab_img">
            </div>
        </div>
        <hr class="line" />
    </div>
    <!-- Page Tab -->
    <div class="blog_tab_wrapper">
        <div class="blog_tab mb-4">
            <div class="blog_tab_text_div">
                <h3 class="blog_tab_text">Blood Donation</h3>
            </div>
            <div class="blog_tab_img_div">
                <img src="./storages/image/blog_tab_img2.png" alt="" class="blog_tab_img">
            </div>
        </div>
        <hr class="line" />
    </div>
    <!-- Current Diseases header -->
    <h1 class="current_disease_header mb-5">Current Disease</h1>
    <!-- Current Diseases card -->
    <div class="first_aid_card my-4">
        <div class="wrapper">
            <img src="./storages/image/emergency.jpg" alt="" class="card_img" />
            <div class="info">
                <h2 class="first_aid_para_header">Covid 19</h2>
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
        </div>
        <hr class="line" />
    </div>
    <!-- Current Diseases card --> /* header information */
    <div class="first_aid_card my-4">
        <div class="wrapper">
            <img src="./storages/image/emergency.jpg" alt="" class="card_img" />
            <div class="info">
                <h2 class="first_aid_para_header">Dengue Fever</h2>
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
        </div>
        <hr class="line" />
    </div>
    <!-- Footer -->
    <?php
    include("./common/footer.php")
    ?>
</body>

</html>