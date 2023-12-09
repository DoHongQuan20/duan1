<div class="col-sm-8 nd">
    <h2>Danh sách đơn hàng</h2>
    <table class="table table-hover">
        <tr>
            
            <th>Mã đơn hàng</th>
            <th>Khách hàng</th>
            <th>Số lượng hàng</th>
            <th>Gía trị đơn hàng</th>
            <th>Trạng thái</th>
            
        </tr>
        <?php
        foreach ($listbill as $bill) {
            extract($bill);
            $kh = '.$bill["bill_name"].';
            $kh = '.$bill["bill_email"].';
            $kh = '.$bill["bill_address"].';
            $kh = '.$bill["bill_tel"].';
            $tthd = get_ttdh($bill["bill_status"]);
            $countsp = loadall_cart_count($bill["id"]);
            echo '<tr>

<td>DH-' . $bill["id"] . '</td>
<td>' . $bill["bill_name"] . '</td>
<td>' . $countsp . '</td>
<td><strong>' . number_format($bill["total"] , 0, ','). ' </strong>VND</td>
<td>' . $tthd . '</td>

</tr>';
        }
        ?>
    </table>
</div>