<?php
include "../../Controller/blog/showcontroller.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Show</title>
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/0442ff9845.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./resources/css/root.css" <?= time() ?> />
</head>

<body>
    <div class="container-fluid">

        <h2 class="input_set_header my-4">Show data here</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Image</th>
                    <th>Header</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $count = 1; ?>

                <?php foreach ($blogList as $key => $blog)
                 { ?>
                    <tr>
                        <td><?= $count++; ?></td>
                        <td><?= $blog["header"] ?></td>
                        <td><?= $blog["paragraph"] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <!-- <div class='pagination_container'>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link pagi_color" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link pagi_color" href="#">1</a></li>
                        <li class="page-item"><a class="page-link pagi_color" href="#">2</a></li>
                        <li class="page-item"><a class="page-link pagi_color" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link pagi_color" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div> -->
        <!-- <hr /> -->




    </div>
</body>

</html>