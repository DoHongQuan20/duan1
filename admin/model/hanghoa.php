<?php
function insert_hanghoa($tenhh, $dongia, $hinhanh, $mota, $iddm)
{
    $sql = "INSERT INTO hanghoa (tenhh,dongia,hinhanh,mota,iddm) values ('$tenhh','$dongia','$hinhanh','$mota','$iddm')";
    pdo_execute($sql);
}

function delete_hanghoa($mahh)
{
    $sql = "DELETE FROM hanghoa WHERE mahh=" . $mahh;
    $listhh = pdo_query($sql);
}

function loadall_hanghoa_top10()
{
    $sql = "SELECT * from hanghoa where 1 order by luot_xem desc limit 0,10";
    $listhh = pdo_query($sql);
    return $listhh;
}

function loadall_hanghoa_home()
{
    $sql = "SELECT * from hanghoa where 1 order by ma_hh desc limit 0,9";
    $listhh = pdo_query($sql);
    return $listhh;
}

function loadall_hanghoa($key="",$iddm = 0)
{
    $sql = "select * from hanghoa where 1";
    if ($key != '') {
        $sql .= " and tenhh like '%".$key."%'";
    }
    if ($iddm > 0) {
        $sql .= " and iddm ='".$iddm."'";
    }
    $sql .= " order by mahh desc";
    $listhh = pdo_query($sql);
    return $listhh;
}

function loadone_hanghoa_cungloai($ma_hh, $id_dm)
{
    $sql = "SELECT * FROM hanghoa where id_dm=" . $id_dm . " and ma_hh <>" . $ma_hh;
    $listhh = pdo_query($sql);
    return $listhh;
}

function load_ten_danhmuc($id_dm)
{
    if ($id_dm > 0) {
        $sql = "SELECT * FROM danhmuc where ma_loai=".$id_dm;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $ten_loai;
    } else {
        echo "";
    }
}

function loadone_hanghoa($ma_hh)
{
    $sql = "SELECT * FROM hanghoa where ma_hh=" . $ma_hh;
    $hh = pdo_query_one($sql);
    return $hh;
}

function update_hanghoa($ma_hh, $id_dm, $ten_hh, $don_gia, $hinh_anh, $mo_ta)
{
    if ($hinh_anh != '') {
        $sql = "UPDATE hanghoa SET id_dm ='$id_dm',ten_hh= '$ten_hh',don_gia = '$don_gia',hinh_anh= '$hinh_anh',mo_ta= '$mo_ta' where ma_hh ='$ma_hh'";
    } else {
        $sql = "UPDATE hanghoa SET id_dm ='$id_dm',ten_hh= '$ten_hh',don_gia = '$don_gia',mo_ta= '$mo_ta' where ma_hh ='$ma_hh'";
    }
    pdo_execute($sql);
}
