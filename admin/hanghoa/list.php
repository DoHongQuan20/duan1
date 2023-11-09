<div class="col-sm-8 nd">
  <h2>Danh sách hàng hoá</h2>
  <form action="index.php?act=listhh" method="post">
    <input type="hidden" name="key">
    <select class="option" name="iddm">
      <option value="0" selected >Tất cả</option>
      <?php
      foreach ($listdm as $danhmuc) {
        extract($danhmuc);
        echo '<option value="' . $madm . '">' . $tendm . '</option>';
      }
      ?>
    </select>
    <input type="submit" class="nutbtn" name="list" value="GO">
  </form>
  <table class="table table-hover">
    <tr>
      
      <th>Mã hàng hoá</th>
      <th>Tên hàng hoá</th>
      <th>Đơn giá</th>
      <th>Hình ảnh</th>
      <th>Lượt xem</th>
      <th></th>
    </tr>
    <?php
    foreach ($listhh as $hanghoa) {
      extract($hanghoa);
      $suahh = "index.php?act=suahh&mahh=" . $mahh;
      $xoahh = "index.php?act=xoahh&mahh=" . $mahh;
      $hinhpath = "uploads/" . $hinhanh;
      if (is_file($hinhpath)) {
        $hinhanh = "<img src='" . $hinhpath . "' height='50px'>";
      } else {
        $hinhanh = "no Photo";
      }
      echo
      '<tr>
                            
                            <td>' . $mahh . '</td>
                            <td>' . $tenhh . '</td>
                            <td>' . $dongia . '</td>
                            <td>' . $hinhanh . '</td>
                            <td>' . $luotxem . '</td>
                            <td><a href ="' . $suahh . '"><input type="button" class="btn btn-success" value="sửa"></a> <a href = "' . $xoahh . '"><input type="button" class="btn btn-danger" value="Xoá"></td>
        </tr>';
    }
    ?>

  </table>
  <div>
    <a href="index.php?act=addhh"><input type="button" class="btn btn-primary" value="Thêm hàng hoá"></a>
  </div>
</div>
</div>
</div>