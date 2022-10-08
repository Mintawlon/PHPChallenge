<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Patient History </title>
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/0442ff9845.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./resources/css/root.css?v=" <?= time() ?> />
    <!-- js -->
    <script src="./resources/js/jquery3.6.0.js"></script>
    <script src="./resources/js/script.js"></script>
</head>

<body>
    <!-- Side Bar -->
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">Menu</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link align-middle px-0">
                                <i class="fa-solid fa-house-user"></i>
                                <span class="ms-1 d-none d-sm-inline">Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fa-solid fa-house-user"></i>
                                <span class="ms-1 d-none d-sm-inline">Dashboard</span>
                            </a>
                            <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0">
                                        <span class="d-none d-sm-inline">Item</span> 1
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0">
                                        <span class="d-none d-sm-inline">Item</span> 2
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0 align-middle">
                                <i class="fa-solid fa-house-user"></i>
                                <span class="ms-1 d-none d-sm-inline">Orders</span></a>
                        </li>
                        <li>
                            <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-bootstrap"></i>
                                <span class="ms-1 d-none d-sm-inline">Bootstrap</span></a>
                            <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0">
                                        <span class="d-none d-sm-inline">Item</span> 1</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0">
                                        <span class="d-none d-sm-inline">Item</span> 2</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-grid"></i>
                                <span class="ms-1 d-none d-sm-inline">Products</span>
                            </a>
                            <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0">
                                        <span class="d-none d-sm-inline">Product</span> 1</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0">
                                        <span class="d-none d-sm-inline">Product</span> 2</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0">
                                        <span class="d-none d-sm-inline">Product</span> 3</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0">
                                        <span class="d-none d-sm-inline">Product</span> 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-people"></i>
                                <span class="ms-1 d-none d-sm-inline">Customers</span>
                            </a>
                        </li>
                    </ul>
                    <hr />
                    <div class="dropdown pb-4">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle" />
                            <span class="d-none d-sm-inline mx-1">loser</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                            <li><a class="dropdown-item" href="#">New project...</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-10 col-md-8 col-xl-9 mx-xs-2 px-0 mx-auto container">
                <div class="container my-3">
                    <nav class="bg_header navbar navbar-expand-lg navbar-light bg-primary">
                        <div class="header_box">
                            <span class="navbar-brand ttl_admin" href="#">Patient History</span>
                        </div>
                    </nav>
                </div>
                <div class="sec_input mb-2">
                    <a href="" class="common_btn add_btn go_btn">Go to Add History
                        <i class="fa-solid fa-arrow-right arrow_right"></i>
                    </a>
                    <div class="tb_search">
                        <input type="text" class="common_input input_box form-control" id="search_input_all" onkeyup="FilterkeyWord_all_table()" placeholder="Search" />
                    </div>


                </div>
                <div class="input_set">
                    <h2 class="input_set_header my-4">Patient History List</h2>
                </div>
                <div class="num_rows">
                    <div class="form-group">
                        <select class="form-control" name="state" id="maxRows">
                            <option value="10">10</option>
                            <option value="15">15</option>
                            <option value="20">20</option>
                            <option value="50">50</option>
                            <option value="70">70</option>
                            <option value="100">100</option>
                            <option value="5000">Show ALL Rows</option>
                        </select>

                    </div>
                </div>
                <table class="table" id="table-id">
                    <thead class="table_bgcolor">
                        <tr>
                            <td>No.</td>
                            <td>Patient Name</td>
                            <td>Age</td>
                            <td>Doctor Name</td>
                            <td>Contact</td>
                            <td>Address</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="row_bdr">
                            <td>1</td>
                            <td>Mary</td>
                            <td>20</td>
                            <td>Dr. Knight Crawler</td>
                            <td>123456789</td>
                            <td>Yangon</td>
                        </tr>
                        <tr class="row_bdr">
                            <td>2</td>
                            <td>Leo</td>
                            <td>20</td>
                            <td>Dr.Lucifer </td>
                            <td>123456789</td>
                            <td>Yangon</td>
                        </tr>
                        <tr class="row_bdr">
                            <td>3</td>
                            <td>Mary</td>
                            <td>20</td>
                            <td>Dr.Knight Crawler</td>
                            <td>123456789</td>
                            <td>Yangon</td>
                        </tr>
                        <tr class="row_bdr">
                            <td>4</td>
                            <td>Mary</td>
                            <td>20</td>
                            <td>Dr.Knight Crawler</td>
                            <td>123456789</td>
                            <td>Yangon</td>
                        </tr>
                        <tr class="row_bdr">
                            <td>5</td>
                            <td>Mary</td>
                            <td>20</td>
                            <td>Dr.Knight Crawler</td>
                            <td>123456789</td>
                            <td>Yangon</td>
                        </tr>
                        <tr class="row_bdr">
                            <td>5</td>
                            <td>Mary</td>
                            <td>20</td>
                            <td>Dr.Knight Crawler</td>
                            <td>123456789</td>
                            <td>Yangon</td>
                        </tr>
                        <tr class="row_bdr">
                            <td>5</td>
                            <td>Mary</td>
                            <td>20</td>
                            <td>Dr.Knight Crawler</td>
                            <td>123456789</td>
                            <td>Yangon</td>
                        </tr>
                        <tr class="row_bdr">
                            <td>5</td>
                            <td>Mary</td>
                            <td>20</td>
                            <td>Dr.Knight Crawler</td>
                            <td>123456789</td>
                            <td>Yangon</td>
                        </tr>
                        <tr class="row_bdr">
                            <td>5</td>
                            <td>Mary</td>
                            <td>20</td>
                            <td>Dr.Knight Crawler</td>
                            <td>123456789</td>
                            <td>Yangon</td>
                        </tr>
                        <tr class="row_bdr">
                            <td>5</td>
                            <td>Mary</td>
                            <td>20</td>
                            <td>Dr.Knight Crawler</td>
                            <td>123456789</td>
                            <td>Yangon</td>
                        </tr>
                        <tr class="row_bdr">
                            <td>5</td>
                            <td>Mary</td>
                            <td>20</td>
                            <td>Dr.Knight Crawler</td>
                            <td>123456789</td>
                            <td>Yangon</td>
                        </tr>

                    </tbody>
                </table>
                <div class='pagination_container'>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="rows_count">Showing 11 to 20 of 91 entries</div>
                </div>

            </div>
        </div>


    </div>
    </div>
    </div>
</body>

</html>