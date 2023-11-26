<div class="col-sm-8 nd">
    <h2>Thống kê hàng hoá</h2>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Mã danh mục</th>
                <th>Tên danh mục</th>
                <th>số lượng</th>
                <th>Giá thấp nhất</th>
                <th>Giá cao nhất</th>
                <th>Giá trung bình</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($listtk as $tk) {
                extract($tk);


                echo
                '<tr>
                        <td>' . $madm . '</td>
                        <td>' . $tendm . '</td>
                        <td>' . $counthh . '</td>
                        <td>' . $mindongia . '</td>
                        <td>' . $maxdongia . '</td>
                        <td>' . $avgdongia . '</td>
                    </tr>';
            }
            ?>

        </tbody>

    </table>
    <div class="row mb10">
        <a href="index.php?act=bieudo"><input type="button" class="btn btn-success" value="Xem biểu đồ"></a>
    </div>
</div>