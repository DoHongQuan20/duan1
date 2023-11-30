<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="./img/logo.jpg" type="image/x-icon">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <title>Smile phone</title>
  <link rel="stylesheet" href="css/style.css" />
  <script src="js/slider.js"></script>

</head>

<body>
  <div class="container-ner">
    <div class="header">
      <div class="logo"><img src="./img/logo.jpg" alt="" /></div>
      <div class="search-container">
        <form action="index.php?act=hanghoa" method="post">
          <input type="text" name="key" placeholder="Search..." />
          <button type="submit"  name="timkiem" class="btn btn-danger">Search</button>
        </form>
      </div>
      <?php
      if (isset($_SESSION['user'])) {
        extract($_SESSION['user']);
      }
      ?>
      <div class="dropdown widget-header icontext">
        <div class="dropdown">
          <!-- Dropdown button/select -->
          <div class="dropdown-select"> <a href="#" class="icon icon-sm rounded-circle border" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-user primary-color" style="width: 25px; height: 25px;"></i>
            </a></div>
          <!-- Dropdown list -->
          <ul class="dropdown-list">
            <?php
            if (!isset($_SESSION['user'])) { ?>
              <li> <a class="dropdown-item pl-3 py-2" href="index.php?act=dangnhap">Đăng nhập</a></li>
              <li><a class="dropdown-item pl-3 py-2" href="index.php?act=dangky">Đăng ký</a></li>

            <?php } else { ?>
              <?php if (isset($_SESSION['user']['role']) == 1) { ?>
                <li><a class="dropdown-item pl-3 py-2" href="../admin/index.php"> Trang quản trị </a></li>
              <?php } ?>
              <li><a class="dropdown-item pl-3 py-2" href="index.php?act=mybill">Đơn hàng của tôi</a></li>
              <li><a class="dropdown-item pl-3 py-2" href="#">Cập nhật tài khoản</a></li>
              <li><a class="dropdown-item pl-3 py-2" href="#">Đổi mật khẩu</a></li>
              <li><a class="dropdown-item pl-3 py-2" href="../index.php?act=thoat">Đăng xuất</a></li>
            <?php } ?>


          </ul>
        </div>
        <div class="text">
          <span class="text-dark">Xin chào!</span>
          <?php
          if (isset($_SESSION['user'])) { ?>
            <div class="text-dark text-info"><?= $_SESSION['user']['name'] ?></div>
          <?php } else { ?>
            <a href="index.php?act=dangnhap" class="d-block text-info">Đăng nhập</a>
          <?php } ?>

        </div>
      </div>

      <div class="taikhoan">
        <ul class="list-inline">

          <li><a href="index.php?act=addtocart"><i class="fas fa-shopping-cart"></i> Giỏ hàng</a></li>
        </ul>
      </div>
    </div>

    <!-- MENU -->
    <nav>
      <div class="container">
        <div class="left-boxes">
          <ul>
            <li><a href="#"><i class="fas fa-archive"></i> Danh sách sản phẩm</a></li>
          </ul>
        </div>

        <div class="right-boxes">
          <ul>
            <li><a href="index.php"><i class="fas fa-home"></i>Trang Chủ</a></li>
            <li><a href="index.php?act=sanpham">Sản Phẩm</a></li>
            <li><a href="index.php?act=gioithieu">Giới Thiệu</a></li>
            <li><a href="index.php?act=lienhe">Liên Hệ</a></li>
          </ul>
        </div>
      </div>
      <hr class="horizontal-line" />
    </nav>