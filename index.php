<?php
session_start();
include "admin/model/taikhoan.php";
include "admin/model/hanghoa.php";
include "admin/model/danhmuc.php";
include "admin/model/pdo.php";
include "admin/model/cart.php";
include "admin/model/bill.php";
include "view/header.php";
include "global.php";

if (!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];

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
if (!isset($_GET['page'])) {
    $page = 1;
} else {
    $page = (int)$_GET['page'];
}
$slsp = 12;
$slsp_home = 10;

$hang_hoa = loadall_hanghoaadmin($key, $iddm, $page, $slsp);
$tongsosp = load_hanghoaall();
$hienthisotrang = hien_thi_trang_san_pham($tongsosp, $slsp);

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
            $tendm = load_ten_danhmuc($iddm);
            include "view/hanghoa.php";
            break;
        case 'hanghoa2':
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
            $tendm = load_ten_danhmuc($iddm);
            include "view/hanghoa2.php";
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
                $existingEmail = checkmail($email);
                $existingTel = checktel($tel);

                if ($existingEmail) {
                    $thongbao1 = "Email đã tồn tại";
                } elseif ($existingTel) {
                    $thongbao2 = "Số điện thoại đã tồn tại";
                } else {
                    insert_taikhoan($name, $user, $email, $pass, $tel, $address);
                    $thongbao = "Đã đăng kí thành công";
                }
            }

            include "view/taikhoan/dangky.php";
            break;
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = checkuser($user, $pass);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    header('location:index.php');
                } else {
                    $thongbao = "Tài khoản hoặc mật khẩu không đúng, vui lòng kiểm tra lại hoặc đăng ký!";
                }
            }
            include "view/taikhoan/dangnhap.php";
            break;
        case 'quenmk':
            if (isset($_POST['guiemail'])) {
                $user = $_POST['user'];
                $email = $_POST['email'];
                $checkemail = checkemail($user, $email);
                if (is_array($checkemail)) {
                    $thongbao = "Mật khẩu của bạn là: " . $checkemail['pass'];
                } else {
                    $thongbao = "Email hoặc tên đăng nhập không đúng";
                }
            }
            if (isset($_POST['thoat']) && ($_POST['thoat'])) {
                header('location: index.php');
                break;
            }
            include "view/taikhoan/quenmk.php";
            break;
        case 'edit_taikhoan':
            if (isset($_POST['capnhat'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $name = $_POST['name'];
                $email = $_POST['email'];
                $adress = $_POST['address'];
                $tel = $_POST['tel'];
                $id = $_POST['id'];
                update_taikhoan($id, $user, $pass, $name, $email, $adress, $tel);
                $_SESSION['user'] = checkuser($user, $pass);

                $thongbao = "Cập nhật tài khoản thành công";
            }
            include "view/taikhoan/edit_taikhoan.php";
            break;
        case 'doimk':
            if (isset($_POST['doimk'])) {
                $id = $_POST['id'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $passnew = $_POST['passnew'];
                $repassnew = $_POST['repassnew'];
                $checkuser = checkuser($user, $pass);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    if ($passnew == $repassnew) {
                        update_pass($id, $passnew);
                        $thongbao = "Đổi mật khẩu thành công";
                    } else {
                        $thongbao = "Mật khẩu không trùng khớp mời nhập lại";
                    }
                } else {
                    $thongbao = "Mật khẩu không đúng!!";
                }
            }
            include "view/taikhoan/doimk.php";
            break;
        case 'thoat':
            session_unset();
            header('location: index.php');
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
        case 'sanpham':
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
            if (!isset($_GET['page'])) {
                $page = 1;
            } else {
                $page = (int)$_GET['page'];
            }
            $slsp = 12;
            $ds_hh = loadall_hanghoa($key, $iddm);
            $tendm = load_ten_danhmuc($iddm);
            include "view/sanpham.php";
            break;
        case 'addtocart':
            if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {

                $id = $_POST['id'];
                $name = $_POST['name'];
                $img = $_POST['img'];
                $price = $_POST['price'];
                $soluong = $_POST['soluong'];
                $ttien = $soluong * $price;
                $spadd = [$id, $name, $img, $price, $soluong, $ttien];
                array_push($_SESSION['mycart'], $spadd);
            }

            include "view/cart/viewcart.php";
            break;
        case 'delcart':
            if (isset($_GET['idcart'])) {

                $hmm = array_splice($_SESSION['mycart'], $_GET['idcart'], 1);
            } else {
                $_SESSION['mycart'] = [];
            }
            header('location: index.php?act=viewcart');
            break;
        case 'viewcart':
            include "view/cart/viewcart.php";
            break;
        case 'bill':
            if (isset($_SESSION['user'])) {
            } else {
                header('location: index.php?act=dangnhap');
            }
            include "view/cart/bill.php";
            break;
        case 'billconfirm':
            if (isset($_POST['dongydathang']) && ($_POST['dongydathang'])) {
                if (isset($_SESSION['user'])) $iduser = $_SESSION['user']['id'];
                else $id = 0;
                $name = $_POST['name'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $pttt = $_POST['pttt'];
                $ngaydathang = date('h:i:sa d/m/Y');
                $tongdonhang = tongdonhang();
                $idbill = insert_bill($iduser, $name, $email, $address, $tel, $pttt, $ngaydathang, $tongdonhang);
                foreach ($_SESSION['mycart'] as $cart) {
                    insert_cart($_SESSION['user']['id'], $cart[0], $cart[2], $cart[1], $cart[3], $cart[4], $cart[5], $idbill);
                }

                $_SESSION['cart'] = [];
            }
            $bill = loadone_bill($idbill);
            $billct = loadall_cart($idbill);
            include "view/cart/billconfirm.php";
            break;
        case 'mybill':
            $listbill = loadall_bill($kyw = "", $_SESSION['user']['id']);
            include "view/cart/mybill.php";
            break;

        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}

include "view/footer.php";
