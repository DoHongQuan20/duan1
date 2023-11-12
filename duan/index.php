<?php
session_start();
include "admin/model/taikhoan.php";
include "admin/model/pdo.php";
include "view/header.php";
if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'gioithieu':
            include "view/gioithieu.php";
            break;
        case 'lienhe':
            include "view/lienhe.php";
            break;
        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $email = $_POST['email'];
                $name = $_POST['name'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $tel = $_POST['tel'];
                $address = $_POST['address'];
                insert_taikhoan($name, $user, $email, $pass, $tel, $address);
                $thongbao = "Đã đăng kí thành công";
            }
            include "view/taikhoan/dangky.php";
            break;
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = checkuser($user, $pass);
                if (is_array($checkuser))
                    $_SESSION['user'] = $checkuser;
                $thongbao = "Đăng Nhập thành công";
                header('location:index.php');
                $thongbao = "Đăng Nhập thành công";
            } else {
                $thongbao = "Tài khoản không tồn tại";
            }
            include "view/taikhoan/dangnhap.php";
            break;
        case 'thoat':
            session_unset();
            header('location: index.php');
            break;
           
        case 'giohang':
            include "view/cart/cart.php";
            break;

        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}

include "view/footer.php";
