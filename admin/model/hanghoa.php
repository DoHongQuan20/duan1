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
    $sql = "SELECT * from hanghoa where 1 order by luotxem desc limit 0,10";
    $listhh = pdo_query($sql);
    return $listhh;
}

function loadall_hanghoa_home()
{
    $sql = "SELECT * from hanghoa where 1 order by mahh desc limit 10";
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

function loadone_hanghoa_cungloai($mahh, $iddm)
{
    $sql = "SELECT * FROM hanghoa where iddm=" . $iddm . " and mahh <>" . $mahh;
    $listhh = pdo_query($sql);
    return $listhh;
}

function load_ten_danhmuc($iddm)
{
    if ($iddm > 0) {
        $sql = "SELECT * FROM danhmuc where madm=".$iddm;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $tendm;
    } else {
        echo "";
    }
}

function loadone_hanghoa($mahh)
{
    $sql = "SELECT * FROM hanghoa where mahh=" . $mahh;
    $hh = pdo_query_one($sql);
    return $hh;
}

function update_hanghoa($mahh, $iddm, $tenhh, $dongia, $hinhanh, $mota)
{
    if ($hinhanh != '') {
        $sql = "UPDATE hanghoa SET iddm ='$iddm',tenhh= '$tenhh',dongia = '$dongia',hinhanh= '$hinhanh',mota= '$mota' where mahh ='$mahh'";
    } else {
        $sql = "UPDATE hanghoa SET iddm ='$iddm',tenhh= '$tenhh',dongia = '$dongia',mota= '$mota' where mahh ='$mahh'";
    }
    pdo_execute($sql);
}
