<div class="sanpham">
  <div class="thanhg">
    <a href=" ">Iphone</a>/
    <a href="">Oppo</a>/
    <a href="">Apple Watch</a>
  </div><br>
  <div class="tieude">
    <p class="styled-text">Sản Phẩm </p>
    <hr>
  </div>
  <div class="row sp">
    <?php
    $i = 0;
    foreach ($ds_hh as $hh) {
      extract($hh);
      $hinhanh = $img_path . $hinhanh;
      $link_hh = "index.php?act=ctsanpham&mahh=" . $mahh;
      echo '<div class="boxsp" data-aos="fade-up" data-aos-duration="2000" style="margin-bottom: 20px;">
      <a href="' . $link_hh . '"><img src="' . $hinhanh . '" alt="Điện thoại 3"></a>
      <div class="name"><a href="#">' . $tenhh . '</a></div>
      <p>' . $dongia . '</p><br>
      <a href=""><input type="button" value="Add to cart"></a>
    </div>';
    }
    ?>
  </div>