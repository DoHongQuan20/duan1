<?php
include "header.php";
include "model/pdo.php";
include "model/danhmuc.php";
include "model/hanghoa.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            $thongbao = "";
            if (isset($_POST['them'])) {
                $tendm = $_POST['tendm'];
                if ($_POST['tendm'] == "") {
                    $thongbao = "Bạn phải nhập đủ thông tin";
                } else {
                    insert_danhmuc($tendm);
                    $thongbao = "thêm thành công";
                }
            }
            include "danhmuc/add.php";
            break;
        case 'listdm':
            $listdm = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'xoadm':
            if ($_GET['madm'] && $_GET['madm'] > 0) {
                delete_danhmuc($_GET['madm']);
            }
            $listdm = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'suadm':
            if ($_GET['madm'] && $_GET['madm'] > 0) {
                $dm = loadone_danhmuc($_GET['madm']);
            }
            include "danhmuc/update.php";
            break;
        case 'updatedm':
            if (isset($_POST['capnhat'])) {
                $madm = $_POST['madm'];
                $tendm = $_POST['tendm'];
                update_danhmuc($madm, $tendm);
                $thongbao = "Cập nhật thành công";
            }
            $listdm = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'addhh':
            if (isset($_POST['them'])) {
                $iddm = $_POST['iddm'];
                $tenhh = $_POST['tenhh'];
                $dongia = $_POST['dongia'];
                $hinhanh = $_FILES['hinhanh']['name'];
                $mota = $_POST['mota'];
                $target_dir = "uploads/";
                $target_file = $target_dir . basename($_FILES['hinhanh']['name']);
                if (move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $target_file)) {
                    //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    //echo "Sorry, there was an error uploading your file.";
                }
                if ($iddm == "" || $tenhh == "" || $dongia == "" || $dongia < 0) {
                    $thongbao = "Bạn phải nhập đúng và đầy đủ dữ liệu,";
                } else {
                    insert_hanghoa($tenhh, $dongia, $hinhanh, $mota, $iddm);
                    $thongbao = "Thêm thành công";
                }
            }
            $listdm = loadall_danhmuc();
            //var_dump($listdm);
            include "hanghoa/add.php";
            break;
            case 'listhh':
                if (isset($_POST['list'])) {
                    $key = $_POST['key'];
                    $iddm = $_POST['iddm'];
                } else {
                    $key = '';
                    $iddm = 0;
                }
                $listdm = loadall_danhmuc();
                $listhh = loadall_hanghoa($key, $iddm);
                include "hanghoa/list.php";
                break;
            case 'xoahh':
                if ($_GET['mahh'] && $_GET['mahh'] > 0) {
                    delete_hanghoa($_GET['mahh']);
                }
                if (isset($_POST['list'])) {
                    $key = $_POST['key'];
                    $iddm = $_POST['iddm'];
                } else {
                    $key = '';
                    $iddm = 0;
                }
                $listhh = loadall_hanghoa($key, $iddm);
                include "hanghoa/list.php";
                break;
    }
} else {
    include "home.php";
}
include "footer.php";