<?php

function viewcart($del)
{
    global $img_patth;
    $i = 0;
    if ($del == 1) {
        $xoasp_th = '<th>Thao tác</th>';
        $xoasp_td2 = '<td></td>';
    } else {
        $xoasp_th = '';
        $xoasp_td2 = '';
    }
    echo ' <tr>
    <th style="width:50% ">
        <h5>Tên sản phẩm</h5>
    </th>
    <th style="width:10%">
        <h5>Giá</h5>
    </th>
    <th style="width:14%"><h5>Số lượng</h5></th>
    <th style="width:18%" class="text-center"><h5>Thành tiền</h5></th>
    <th style="width:14%">'.$xoasp_th.' </th>
</tr>';
    $tong = 0;
    // var_dump($_SESSION['mycart']);
    foreach ($_SESSION['mycart'] as $cart) {
        $hinh = $img_patth . $cart[2];
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;

        if ($del == 1) {
            $xoasp_td = '<td><a  href="index.php?act=delcart&idcart=' . $i . '"><input style="margin-top: 30px;" type="button" class="btn btn-danger"  value="xóa"></a></td>';
        } else {

            $xoasp_td = '';
        }
        echo '
    <tbody>
        <tr>
            <td data-th="Product">
                <div class="row" >
                    <div class="col-sm-3 hidden-xs" ">
                        <img src="' . $hinh . '" alt="Sản phẩm 1" class="img-responsive" width="90" />
                    </div>
                    <div class="col-sm-9" >
                        <h5 class="nomargin">' . $cart[1] . '</h5>
                        <p>Mô tả của sản phẩm </p>
                    </div>
                </div>
            </td>
            <td data-th="Price">
                <p style="margin-top: 30px;">' . $cart[3] . '</p>
            </td>
            <td data-th="Quantity">
            <p style="margin-top: 30px;">' . $cart[4] . '</p>
            </td>
            <td data-th="Subtotal" class="text-center">
                <p style="margin-top: 30px;">' . $ttien . '</p>
            </td>
            <td class="actions" data-th="">
                ' . $xoasp_td. '
            </td>
        </tr>
    </tbody>
    ';
        $i += 1;
    }
    echo '<tr>
    <td colspan="4"><b>Tổng đơn hàng</b></td>
  
    <td><b>' . $tong . '</b></td>
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
    <th style="width:50% ">
        <h5>Tên sản phẩm</h5>
    </th>
    <th style="width:10%">
        <h5>Giá</h5>
    </th>
    <th style="width:14%"><h5>Số lượng</h5></th>
    <th style="width:18%" class="text-center"><h5>Thành tiền</h5></th>
</tr>';

    // var_dump($_SESSION['mycart']);
    foreach ($listbill as $cart) {
        $hinh = $img_path . $cart['img'];
        $tong += $cart['thanhtien'];
        echo '
    <tr>
    <tbody>
    <tr>
        <td data-th="Product">
            <div class="row" >
                <div class="col-sm-3 hidden-xs" ">
                    <img src="' . $hinh . '" alt="Sản phẩm 1" class="img-responsive" width="90" />
                </div>
                <div class="col-sm-9" >
                    <h5 class="nomargin">' . $cart[1] . '</h5>
                    <p>Mô tả của sản phẩm </p>
                </div>
            </div>
        </td>
        <td data-th="Price">
            <p style="margin-top: 30px;">' . $cart[3] . '</p>
        </td>
        <td data-th="Quantity">
        <p style="margin-top: 30px;">' . $cart[4] . '</p>
        </td>
        <td data-th="Subtotal" class="text-center">
            <p style="margin-top: 30px;">' . $tong . '</p>
        </td>
        
    </tr>
</tbody>
';
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

function insert_cart($iduser, $idpro, $img, $name, $price, $soluong, $thanhtien, $idbill)
{
    $sql = "INSERT INTO cart(iduser,idpro,img,name,price,soluong,thanhtien,idbill)
         VALUES('$iduser','$idpro','$img','$name','$price','$soluong','$thanhtien','$idbill')";
    pdo_execute($sql);
} 

function insert_bill($iduser, $name, $email, $address, $tel, $pttt, $ngaydathang, $tongdonhang)
{
    $sql = "INSERT INTO bill(iduser,bill_name,bill_email,bill_address,bill_tel,bill_pttt,ngaydathang,total) VALUES('$iduser','$name','$email','$address','$tel','$pttt','$ngaydathang','$tongdonhang')";
    return pdo_execute_return_lastInsertId($sql);
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
    $sql = "select * from cart where idbill=" . $idbill;
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
    ?>