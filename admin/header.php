<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <script src="../js/nav.js"></script>
    <title>Admin</title>
    <style>
        /* Add your custom styles here */
        .nav-item.dropdown:hover .dropdown-menu {
            display: block;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <header>
            <h1>Trang quản trị</h1>
        </header>

        <div class="row">

            <div class="col-sm-4">
                <div class="navtong">
                    <div class="tren">
                        <ul class="nav flex-column" class="sidebar" id="mySidebar">
                            <li class="nav-item">

                                <a class="nav-link" href="../index.php"><i class="fas fa-home" style="margin: 10px;"></i><b>Trang chủ</b></a>
                            </li>
                            <li class="nav-item ">
                                <a class="dropdown-btn nav-link" onclick="toggleDropdown('dropdown1')"><i class="fas fa-cubes" style="margin: 10px; margin-left: 40px;"></i><b>Danh mục</b><i class="fas fa-angle-down" style="margin: 10px;"></i></a>
                                <div class="dropdown-container" id="dropdown1">
                                    <a href="index.php?act=adddm">Thêm mới danh mục</a>
                                    <a href="index.php?act=listdm">Danh sách danh mục</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="dropdown-btn nav-link" onclick="toggleDropdown('dropdown2')"><b><i class="fas fa-box-open" style="margin: 10px; margin-left: 40px;"></i>Hàng hoá</b><i class="fas fa-angle-down" style="margin: 10px;"></i></a>
                                <div class="dropdown-container" id="dropdown2">
                                    <a href="index.php?act=addhh">Thêm mới hàng hoá</a>
                                    <a href="index.php?act=listhh">Danh sách hàng hoá</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?act=khachhang"><i class="fas fa-user" style="margin: 10px; margin-left: 30px;"></i><b>Khách hàng</b></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?act=dsbl"><i class="fas fa-comment-dots" style="margin: 10px;"></i><b>Bình luận</b></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?act=dsdh"><i class="fas fa-shopping-cart" style="margin: 10px;"></i><b>Đơn hàng</b></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?act=thongke"><i class="fas fa-chart-bar" style="margin: 10px;"></i><b>Thống kê</b></a>
                            </li>
                    </div>

                    </ul>
                    <div class="duoi">
                        <!-- <b class="nav-item">
                            <p>Copy by Do Hong Quan @2023</p>
                        </b> -->
                    </div>
                </div>

            </div>