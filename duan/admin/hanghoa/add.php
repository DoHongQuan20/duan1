<div class="col-sm-8 nd">
  <h2>Thêm mới hàng hoá</h2>
  <form action="index.php?act=addhh" method="post" enctype="multipart/form-data">
    Danh mục <br>
    <select name="iddm" id="">
      <?php
      foreach ($listdm as $danhmuc) {
        extract($danhmuc);
        echo '<option value="' . $madm . '">' . $tendm . '</option>';
      }
      ?>
    </select>
    <div class="form-group">
      <label for="mahh">Mã hàng hoá</label>
      <input type="text" class="form-control" name="mahh" placeholder="Auto" disabled>
    </div>
    <div class="form-group">
      <label for="tenhh">Tên hàng</label>
      <input type="text" class="form-control" name="tenhh" placeholder="Điền tên hàng hoá">
    </div>
    <div class="form-group">
      <label for="dongia">Đơn giá</label>
      <input type="number" class="form-control" name="dongia" placeholder="Điền đơn giá">
    </div>
    <div class="form-group">
      <label for="hinhanh">Hình ảnh</label><br>
      <input type="file" name="hinhanh">
    </div>
    <div class="form-group">
      <label for="mota">Mô tả</label>
      <textarea name="mota" class="form-control" cols="70" rows="5" placeholder="Điền mô tả"></textarea>
    </div>

    <button type="submit" name="them" class="btn btn-success">Thêm</button>
    <a href="index.php?act=listhh"><input class="btn btn-primary" type="button" value="Danh sách"></a><br><br>
    <label for=""><?php if (isset($thongbao) && ($thongbao != "")) {
                    echo $thongbao;
                  } ?></label>
  </form>

</div>
</div>
</div>