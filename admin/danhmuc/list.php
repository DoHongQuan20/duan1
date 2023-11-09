<div class="col-sm-8 nd">
    <h2>Danh sách danh mục</h2>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Mã danh mục</th>
                <th>Tên danh mục</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($listdm as $danhmuc) {
                extract($danhmuc);
                $suadm = "index.php?act=suadm&madm=" . $madm;
                $xoadm = "index.php?act=xoadm&madm=" . $madm;
                echo
                '<tr>
                           
                            <td>' . $madm . '</td>
                            <td>' . $tendm . '</td>
                            <td><a href ="' . $suadm . '"><input class="btn btn-success" type="button" value="sửa"></a> <a href = "' . $xoadm . '"><input class="btn btn-danger" type="button" value="Xoá"></td>
                </tr>';
            }
            ?>

        </tbody>
        <div class="bottom-buttons">
            <a href="index.php?act=adddm"><button type="submit" name="them" class="btn btn-primary">Thêm</button></a>
        </div>
    </table>



</div>



</div>