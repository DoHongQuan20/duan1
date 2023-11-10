<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Admin</title>
    <style>

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
                        <a class="nav-link" href="#">Trang chủ</a>
                    </li>
                    <li class="nav-item dropdown dropright">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="">Danh mục</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="index.php?act=adddm">Thêm mới</a>
                            <a class="dropdown-item" href="index.php?act=listdm">Xem danh mục</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?act=addhh">Hàng hoá</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Khách hàng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Bình luận</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Đơn hàng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Thống kê</a>
                    </li>
                </ul>
            </div>