<style>

</style>
<div class="row controls">
  <div class="col-md-3 hnh" style="margin-left: 80px;">
    <div class="danhmuc">

      <ul class="list-group">
        <li class="list-group-item" style="background-color:#DC3545 ;">
          <h5 style="color: #ffffff;">Danh mục</h5>
        </li>

        <?php
        foreach ($ds_dm as $dm) {
          extract($dm);
          $link_dm = "index.php?act=hanghoa&iddm=" . $madm;
          echo '<li class="list-group-item"><a  href="' . $link_dm . '">' . $tendm . '</a></li>';
        }
        ?>


      </ul>
    </div>

    <div class="danhmuc">
      <ul class="list-group" style="text-align:left;">
        <li class="list-group-item" style="background-color:#DC3545 ;">
          <h5 style="color: #ffffff;">Top 10 yêu thích</h5>
        </li>
        <?php
        foreach ($ds_top10 as $hh) {
          extract($hh);
          $link_hh = "index.php?act=ctsanpham&mahh=" . $mahh;
          $hinhanh = $img_path . $hinhanh;
          echo '
                    
                <li class="list-group-item"style="display:flex; flex-direction:row" >
                <a href="' . $link_hh . '"><img src="' . $hinhanh . '" width=" 50px;" height="50px" alt="Điện thoại 3"></a>
                <a href="' . $link_hh . '">' . $tenhh . '</a>
                </li>';
        }
        ?>
      </ul>
    </div>

  </div>

  <div class="col-md-9 hnh2" style="margin-left: -150px;margin-top: 10px;">
    <div class="top-content">
      <div class="row sp" style="display: flex;flex-direction: row;width: 1100px;  ">
        <?php
        $i = 0;
        foreach ($hang_hoa as $hh) {
          extract($hh);
          $hinhanh = $img_path . $hinhanh;
          $link_hh = "index.php?act=ctsanpham&mahh=" . $mahh;
          echo '<div class="boxsp" data-aos="fade-up" data-aos-duration="2000" style="margin-bottom: 20px; width: 230px;">
      <a href="' . $link_hh . '"><img src="' . $hinhanh . '" alt="Điện thoại 3"></a>
      <div class="name"><a href="#">' . $tenhh . '</a></div>
      <p>' . number_format($dongia, 0, ',') . ' VNĐ</p><br>
      
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
    <ul class="pagination" style="justify-content: center; margin-top: 30px;">
      <?php
      echo $hienthisotrang;
      ?>
    </ul>
  </div>
</div>