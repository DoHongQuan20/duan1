<div class="boxtitle">
    <h4>Đơn hàng của tôi</h4>
</div>
<div class="row boxcontent cart">
    <table>
        <tr>
            <th>Mã đơn hàng</th>
            <th>Ngày đặt</th>
            <th>Số lượng mặt hàng</th>
            <th>Tổng giá trị đơn hàng</th>
            <th>Tình trạng đơn hàng</th>
        </tr>
        <?php
        if (is_array($listbill)) {
            foreach ($listbill as $bill) {
                extract($bill);
                $ttdh = get_ttdh($bill['bill_status']);
                $countsp = loadall_cart_count($bill['id']);
                echo '<tr>
            <td>DH-' . $bill['id'] . '</td>
            <td>' . $bill['ngaydathang'] . '</td>
            <td>' . $countsp . '</td>
            <td>' . $bill['total'] . '</td>
            <td>' . $ttdh . '</td>
        </tr>';
            }
        }
        ?>

    </table>
</div>

<style>
    /* Định dạng phần tiêu đề "Đơn hàng của tôi" */
.boxtitle {
    max-width:  80%;
    background-color: #f0f0f0;
    padding: 10px;
    text-align: center;
    margin: 0 auto;
}

/* Định dạng phần nội dung bảng */
.boxcontent {
    margin-top: 20px;
}

/* Định dạng cho bảng */
table {
    width: 80%;
    border-collapse: collapse;
    margin: 0 auto;
}

/* Định dạng cho các ô header của bảng */
th {
    background-color: #f0f0f0;
    border: 1px solid #ccc;
    padding: 8px;
    text-align: left;
}

/* Định dạng cho các ô dữ liệu của bảng */
td {
    border: 1px solid #ccc;
    padding: 8px;
}

/* Định dạng cho mỗi hàng lẻ trong bảng */
tr:nth-child(even) {
    background-color: #f9f9f9;
}

/* Định dạng cho mỗi hàng chẵn trong bảng */
tr:nth-child(odd) {
    background-color: #ffffff;
}

</style>