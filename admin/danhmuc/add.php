<div class="col-sm-8 nd">
  <h2>Thêm mới danh mục</h2>
  <form action="index.php?act=adddm" method="post">
    <div class="form-group">
      <label for="madm">Mã danh mục</label>
      <input type="text" class="form-control" name="madm" disabled>
    </div>
    <div class="form-group">
      <label for="tendm">Tên danh mục</label>
      <input type="text" class="form-control" name="tendm" placeholder="Điền tên danh mục">
    </div>

    <button type="submit" name="them" class="btn btn-success">Thêm</button>
    <a href="index.php?act=listdm"><input class="btn btn-primary" type="button" value="Danh sách"></a><br><br>
    <label for=""><?php if (isset($thongbao) && ($thongbao != "")) {
                    echo $thongbao;
                  } ?></label>
  </form>

</div>
</div>
</div>