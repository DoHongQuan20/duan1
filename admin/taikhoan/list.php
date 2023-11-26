<div class="col-sm-8 nd">
    <h2>Danh sách khách hàng</h2>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Mã khách hàng</th>
                <th>Tên khách hàng</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($listtk as $taikhoan) {
                extract($taikhoan);
                $suatk = "index.php?act=suakh&id=" .$id;
                $xoatk = "index.php?act=xoakh&id=" .$id;
                echo
                '<tr>
                           
                            <td>' . $id . '</td>
                            <td>' . $name . '</td>
                            <td>' . $email . '</td>
                            <td>' . $tel . '</td>
                            <td>' . $address . '</td>
                            <td><a href = "' . $xoatk . '"><input class="btn btn-danger" type="button" value="Xoá"></td>
                </tr>';
            }
            ?>

        </tbody>
       
    </table>



</div>
