<?php
if (is_array($hh)) {
    extract($hh);
}
$hinhpath = "uploads/" . $hinhanh;
if (is_file($hinhpath)) {
    $hinhanh = "<img src='" . $hinhpath . "' height='50px'>";
} else {
    $hinhanh = "no Photo";
}
?>
<div class="col-sm-8 nd">
    <h2>Cập nhật hàng hoá</h2>
    <form action="index.php?act=updatehh" method="post" enctype="multipart/form-data">
        Danh mục <br>
        <select name="iddm">
            <?php
            foreach ($listdm as $danhmuc) {
                extract($danhmuc);
            ?>
                <option name="iddm" <?php if ($iddm == $madm) {
                                        echo 'selected';
                                    } ?> value="<?= $madm ?>"><?= $tendm ?></option>
            <?php
            }
            ?>
        </select>
        <br><br>
        <div class="form-group">
            <label for="tenhh">Tên hàng</label>
            <input type="text" class="form-control" name="tenhh" value="<?= $tenhh; ?>">
        </div>
        <div class="form-group">
            <label for="dongia">Đơn giá</label>
            <input type="number" class="form-control" name="dongia" value="<?= $dongia; ?>">
        </div>
        <div class="form-group">
            <label for="hinhanh">Hình ảnh</label><br>
            <input type="file" name="hinhanh">
            <?php echo $hinhanh; ?>
        </div>
        <div class="form-group">
            <label for="mota">Mô tả</label>
            <textarea name="mota" class="form-control" cols="70" rows="5"><?=$mota?></textarea>
        </div>
        <input type="hidden" name="mahh" value="<?php if (isset($mahh) && ($mahh!= '')) echo $mahh; ?>">
        <button type="submit" name="capnhat" class="btn btn-success">Cập nhật</button>
        <a href="index.php?act=listhh"><input class="btn btn-primary" type="button" value="Danh sách"></a><br><br>
        <label for=""><?php if (isset($thongbao) && ($thongbao != "")) {
                            echo $thongbao;
                        } ?></label>
    </form>

</div>
</div>
</div>