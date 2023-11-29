<style>

</style>
<div class="row controls">
  <div class="col-md-3 hnh" style="margin-left: 80px;">
    <div class="danhmuc">

      <ul class="list-group">
        <li class="list-group-item" style="background-color:#DC3545 ;">
          <h5 style="color: #ffffff;">Danh mục</h5>
        </li>
        <li class="list-group-item"><a href="#">Điện thoại Iphone</a></li>
        <li class="list-group-item"><a href="#">Điện thoại Samsung</a></li>
        <li class="list-group-item"><a href="#">Điện thoại Oppo</a></li>
        <li class="list-group-item"><a href="#">Điện thoại Nokia</a></li>
        <li class="list-group-item"><a href="#">Điện thoại Vivo</a></li>
        <li class="list-group-item"><a href="#">Điện thoại Sony</a></li>
        <li class="list-group-item"><a href="#">Điện thoại Tai nghe</a></li>
        <li class="list-group-item"><a href="#">Điện thoại Phụ kiện</a></li>
      </ul>
    </div>

    <div class="danhmuc" >
      <ul class="list-group">
        <li class="list-group-item" style="background-color:#DC3545 ;">
          <h5 style="color: #ffffff;">Top 10 yêu thích</h5>
        </li>
        <li class="list-group-item"><a href="#">Điện thoại Iphone</a></li>
        <li class="list-group-item"><a href="#">Điện thoại Samsung</a></li>
        <li class="list-group-item"><a href="#">Điện thoại Oppo</a></li>
        <li class="list-group-item"><a href="#">Điện thoại Nokia</a></li>
        <li class="list-group-item"><a href="#">Điện thoại Vivo</a></li>
        <li class="list-group-item"><a href="#">Điện thoại Sony</a></li>
        <li class="list-group-item"><a href="#">Điện thoại Tai nghe</a></li>
        <li class="list-group-item"><a href="#">Điện thoại Phụ kiện</a></li>
      </ul>
    </div>

  </div>

  <div class="col-md-9 hnh2" style="margin-left: -150px;margin-top: 10px;">
    <div class="top-content">
      <div class="row sp" style="display: flex;flex-direction: row;width: 1100px;  ">
      <?php
    $i = 0;
    foreach ($hanghoa_new as $hh) {
      extract($hh);
      $hinhanh = $img_path . $hinhanh;
      $link_hh = "index.php?act=ctsanpham&mahh=" . $mahh;
      echo '<div class="boxsp" data-aos="fade-up" data-aos-duration="2000" style="margin-bottom: 20px; width: 230px;">
      <a href="' . $link_hh . '"><img src="' . $hinhanh . '" alt="Điện thoại 3"></a>
      <div class="name"><a href="#">' . $tenhh . '</a></div>
      <p>' . $dongia . ' VNĐ</p><br>
      
      <div class="row btnaddtocart">
                <form action="index.php?act=addtocart" method="post">
                <input type="hidden" name="id" value="' . $mahh . '">
                <input type="hidden" name="name" value="' . $tenhh . '">
                <input type="hidden" name="img" value="' . $hinhanh . '">
                <input type="hidden" name="price" value="' . $dongia . '"><br>

                <input type="submit" style="margin-top: -70px; margin-left: 80px;" name="addtocart" value="Add to cart">
                </form>

      </div>
    </div>';
    }
    ?>

      </div>
    </div>
  </div>
</div>