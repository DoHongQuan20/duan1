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
    $sql = "SELECT * FROM hanghoa ORDER BY mahh DESC LIMIT 0,10";
    $listhh = pdo_query($sql);
    return $listhh;
}

function loadall_hanghoa($key = "", $iddm = 0,)
{
    $sql = "select * from hanghoa ";
    // Thêm điều kiện vào câu truy vấn nếu có $key không rỗng
    if ($key != '') {
        $sql .= " and tenhh like '%" . $key . "%'";
    }
    // Thêm điều kiện vào câu truy vấn nếu có $iddm lớn hơn 0
    if ($iddm > 0) {
        $sql .= " and iddm ='" . $iddm . "'";
    }
    // Sắp xếp kết quả theo cột 'mahh' theo thứ tự giảm dần
    $sql .= " order by mahh desc";
    $listhh = pdo_query($sql);
    return $listhh;
}
function hien_thi_trang($listhh, $slsp)
{
    $tongsanpham = count($listhh);
    $sotrang = ceil($tongsanpham / $slsp);
    $html_sotrang = "";
    for ($i = 1; $i <= $sotrang; $i++) {
        $html_sotrang .= '<li class="page-item"><a class="page-link" href="index.php?act=listhh&page=' . $i . '"> ' . $i . ' </a></li>';
    }
    return $html_sotrang;
}

function hien_thi_trang_san_pham($listhh, $slsp)
{
    $tongsanpham = count($listhh);
    $sotrang = ceil($tongsanpham / $slsp);
    $html_sotrang = "";
    for ($i = 1; $i <= $sotrang; $i++) {
        $html_sotrang .= '<li class="page-item"><a class="page-link" href="index.php?act=sanpham&page=' . $i . '"> ' . $i . ' </a></li>';
    }
    return $html_sotrang;
}

function loadall_hanghoaadmin($key = "", $iddm = 0, $page, $slsp)
{

    $batdau = ($page - 1) * $slsp;
    $sql = "SELECT * from hanghoa where 1";
    // Thêm điều kiện vào câu truy vấn nếu có $key không rỗng
    if ($key != '') {
        $sql .= " and tenhh like '%" . $key . "%'";
        
    }
    // Thêm điều kiện vào câu truy vấn nếu có $iddm lớn hơn 0
    if ($iddm > 0) {
        $sql .= " and iddm ='" . $iddm . "'";
    }
    // Sắp xếp kết quả theo cột 'mahh' theo thứ tự giảm dần
    $sql .= " order by mahh desc";
    $sql .= " Limit " . $batdau . "," . $slsp;
    $listhh = pdo_query($sql);

    return $listhh;
}
function load_hanghoaall()
{
    $sql = "SELECT * from hanghoa order by mahh desc";
    return pdo_query($sql);
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
        $sql = "SELECT * FROM danhmuc where madm=" . $iddm;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $tendm;
    } else {
        echo "";
    }
}

function loadone_hanghoa($mahh)
{
    $sql = "SELECT * FROM hanghoa where mahh=".$mahh;
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

function loadall_thongke()
{
    $sql = "select danhmuc.madm as madm, danhmuc.tendm as tendm,count(hanghoa.mahh) as counthh, min(hanghoa.dongia) as mindongia, max(hanghoa.dongia)as maxdongia, avg(hanghoa.dongia) as avgdongia";
    $sql .= " from hanghoa left join danhmuc on danhmuc.madm=hanghoa.iddm";
    $sql .= " group by danhmuc.madm order by danhmuc.madm desc";
    $listtk = pdo_query($sql);
    return $listtk;
}
