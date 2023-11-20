<?PHP
if (is_array($dm)) {
  extract($dm);
}
?>
<div class="col-sm-8 nd">
<h2>Cập nhật danh mục</h2>
  <form action="index.php?act=updatedm" method="post">
    <div class="form-group">
      <label for="madm">Mã danh mục</label>
      <input type="text" class="form-control" name="madm" disabled>
    </div>
    <div class="form-group">
      <label for="tendm">Tên danh mục</label>
      <input type="text" class="form-control" name="tendm" value="<?php echo $tendm; ?>">

    </div>
    <input type="hidden" name="madm" value="<?php echo $madm; ?>">
    <input type="submit" name="capnhat" class="btn btn-success" value="Cập nhật">
    <a href="index.php?act=listdm"><input class="btn btn-primary" type="button" value="Danh sách"></a><br><br>
    <label for=""><?php if (isset($thongbao) && ($thongbao != "")) {
                    echo $thongbao;
                  } ?></label>
  </form>

</div>
</div>
</div>