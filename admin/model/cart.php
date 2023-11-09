<?php

function viewcart($del)
{
    global $img_path;
    $i = 0;
    if ($del == 1) {
        $xoasp_th = '<th>Thao tác</th>';
        $xoasp_td2 = '<td></td>';
    } else {
        $xoasp_th = '';
        $xoasp_td2 = '';
    }
    echo '<tr>
<th>hình</th>
<th>sản phẩm</th>
<th>đơn giá</th>
<th>số lượng</th>
<th>thành tiền </th>
' . $xoasp_th . '

</tr>';
    $tong = 0;
    // var_dump($_SESSION['mycart']);
    foreach ($_SESSION['mycart'] as $cart) {
        $hinh = $img_path . $cart[2];
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;

        if ($del == 1) {
            $xoasp_td = '<td><a href="index.php?act=delcart&idcart=' . $i . '"><input type="button" value="xóa"></a></td>';
        } else {

            $xoasp_td = '';
        }
        echo '
    <tr>
        <td><img src="' . $hinh . '" alt="" height="80px"></td>
        <td>' . $cart[1] . '</td>
        <td>' . $cart[3] . '</td>
        <td>' . $cart[4] . '</td>
        <td>' . $ttien . '</td>
       ' . $xoasp_td . '
    </tr>';
        $i += 1;
    }
    echo '<tr>
    <td colspan="4">tổng đơn hàng</td>
  
    <td>' . $tong . '</td>
    ' . $xoasp_td2 . '
  <td></td>
</tr>';
}
function bill_chi_tiet($listbill)
{
    global $img_path;
    $tong = 0;
    $i = 0;
    echo '<tr>
<th>hình</th>
<th>sản phẩm</th>
<th>đơn giá</th>
<th>số lượng</th>
<th>thành tiền </th>


</tr>';

    // var_dump($_SESSION['mycart']);
    foreach ($listbill as $cart) {
        $hinh = $img_path . $cart['img'];
        $tong += $cart['thanhtien'];
        echo '
    <tr>
        <td><img src="' . $hinh . '" alt="" height="80px"></td>
        <td>' . $cart['name'] . '</td>
        <td>' . $cart['price'] . '</td>
        <td>' . $cart['soluong'] . '</td>
        <td>' . $cart['thanhtien'] . '</td>
    </tr>';
        $i += 1;
    }
    echo '<tr>
    <td colspan="4">tổng đơn hàng</td>
  
    <td>' . $tong . '</td>
</tr>';
}
function tongdonhang()
{
    $tong = 0;
    // var_dump($_SESSION['mycart']);
    foreach ($_SESSION['mycart'] as $cart) {

        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;
    }
    return $tong;
}
function insert_bill($iduser, $name, $email, $address, $tel, $pttt, $ngaydathang, $tongdonhang)
{
    $sql = "INSERT INTO bill(iduser,bill_name,bill_email,bill_address,bill_tel,bill_pttt,ngaydathang,total) VALUES('$iduser','$name','$email','$address','$tel','$pttt','$ngaydathang','$tongdonhang')";
    return pdo_execute_return_lastInsertId($sql);
}
function insert_cart($iduser, $idpro, $img, $name, $price, $soluong, $thanhtien, $idbill)
{
    $sql = "INSERT INTO cart(iduser,idpro,img,name,price,soluong,thanhtien,idbill)
         VALUES('$iduser','$idpro','$img','$name','$price','$soluong','$thanhtien','$idbill')";
    pdo_execute($sql);
}
function loadone_bill($id)
{
    $sql = "select * from bill where id='$id'";
    $bill = pdo_query_one($sql);
    return $bill;
}
function loadall_cart($idbill)
{
    $sql = "select * from cart where idbill='$idbill'" ;
    $bill = pdo_query($sql);
    return $bill;
}
function loadall_cart_count($idbill)
{
    $sql = "select * from cart where idbill='$idbill'" ;
    $bill = pdo_query($sql);
    return sizeof($bill);
}
function loadall_bill($kyw = "", $iduser = 0)
{
    $sql = "select * from bill where 1";
    if ($iduser > 0) $sql .= " AND iduser=" . $iduser;
    if ($kyw != "") $sql .= " AND id like '%" . $iduser . "%'";
    $sql .= " order by id desc";
    $listbill = pdo_query($sql);
    return $listbill;
}
function get_ttdh($n)
{
    switch ($n) {
        case '0':
            $tt = "đơn hàng mới";
            break;
        case '1':
            $tt = "đang xử lý";
            break;
        case '2':
            $tt = "đang giao hàng";
            break;
        case '3':
            $tt = "đã giao hàng";
            break;
        default:
            $tt = "đơn hàng mới";
            break;
    }
    return $tt;
}
function loadall_thongke()
{
    $sql = "select danhmuc.ma_loai as madm, danhmuc.ten_loai as tendm,count(hanghoa.ma_hh) as counthh, min(hanghoa.don_gia) as mindon_gia, max(hanghoa.don_gia)as maxdon_gia, avg(hanghoa.don_gia) as avgdon_gia";
    $sql .= " from hanghoa left join danhmuc on danhmuc.ma_loai=hanghoa.id_dm";
    $sql .= " group by danhmuc.ma_loai order by danhmuc.ma_loai desc";
    $listtk = pdo_query($sql);
    return $listtk;
}
