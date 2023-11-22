<?php
session_start();
include "admin/model/taikhoan.php";
include "admin/model/hanghoa.php";
include "admin/model/danhmuc.php";
include "admin/model/pdo.php";
include "view/header.php";
include "global.php";

$ds_dm = loadall_danhmuc();
$hanghoa_new = loadall_hanghoa_home();
$ds_top10 = loadall_hanghoa_top10();
if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'hanghoa':
            if (isset($_POST['key']) && ($_POST['key']) != "") {
                $key = $_POST['key'];
            } else {
                $key = "";
            }
            if (isset($_GET['iddm']) && ($_GET['iddm']) > 0) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $ds_hh = loadall_hanghoa($key, $iddm);
            $ten_dm = load_ten_danhmuc($iddm);
            include "view/hanghoa.php";
            break;
        case 'gioithieu':
            include "view/gioithieu.php";
            break;
        case 'lienhe':
            include "view/lienhe.php";
            break;
            case 'sanpham':
                include "view/sanpham.php";
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
        case 'ctsanpham':
                if (isset($_GET['mahh']) && ($_GET['mahh']) > 0) {
                    $one_hh = loadone_hanghoa($_GET['mahh']);
                    extract($one_hh);
                    $hh_cung_loai = loadone_hanghoa_cungloai($mahh, $iddm);
                    include "view/chitietsanpham.php";
                } else {
                    include "view/home.php";
                }
                break;
            include "view/chitietsanpham.php";
            break;

        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}

include "view/footer.php";
