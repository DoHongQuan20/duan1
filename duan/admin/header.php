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
    <title>Admin</title>
    <style>
        /* Add your custom

        /* Add your

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
                <ul class="nav flex-column">
                    <li class="nav-item">

                        <a class="nav-link" href="../index.php"><i class="fas fa-home" style="margin: 10px;"></i><b>Trang chủ</b></a>
                    </li>
                    <li class="nav-item dropdown dropright">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="index.php?act=adddm"><i class="fas fa-cubes" style="margin: 10px;"></i><b>Danh mục</b></a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="index.php?act=adddm">Thêm mới</a>
                            <a class="dropdown-item" href="index.php?act=listdm">Xem danh mục</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?act=addhh"><b><i class="fas fa-box-open" style="margin: 10px;"></i>Hàng hoá</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-user" style="margin: 10px;"></i><b>Khách hàng</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-comment-dots" style="margin: 10px;"></i><b>Bình luận</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-shopping-cart" style="margin: 10px;"></i><b>Đơn hàng</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-chart-bar" style="margin: 10px;"></i><b>Thống kê</b></a>
                    </li>
                    <div class="duoi">
                        <li class="nav-item">
                            <p>Copy by Do Hong Quan @2023</p>
                        </li>
                    </div>
                </ul>
            </div>