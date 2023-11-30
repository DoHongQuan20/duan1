<div class="col-sm-8 nd">
    <h2>Danh sách khách hàng</h2>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Mã Bình luận</th>
                <th>Nội dung</th>
                <th>Người bình luận</th>
                <th>Mã hàng hoá</th>
                <th>Ngày bình luận</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
        <?php
                foreach ($listbl as $binhluan) {
                    extract($binhluan);
                    $xoabl ="index.php?act=xoabl&id=".$id;
                    echo
                        '<tr>
                            
                            <td>'.$id.'</td>
                            <td>'.$noidung.'</td>
                            <td>'.$nameuser.'</td>
                            <td>'.$idpro.'</td>
                            <td>'.$ngaybinhluan.'</td>
                            <td> <a href = "'.$xoabl.'"><input class="btn btn-danger" type="button" value="Xoá"></td>
                        </tr>';
                }
                ?>

        </tbody>
       
    </table>
</div>