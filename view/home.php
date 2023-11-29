<div class="container-fluid">
  <div class="row controls">
    <div class="col-md-3 hnh">
      <div class="danhmuc">
        <ul class="list-group">
          <?php
          foreach ($ds_dm as $dm) {
            extract($dm);
            $link_dm = "index.php?act=hanghoa&iddm=" . $madm;
            echo '<li class="list-group-item"><a  href="' . $link_dm . '">' . $tendm . '</a></li>';
          }
          ?>

        </ul>
      </div>

    </div>

    <div class="col-md-8 hnh2">
      <div class="top-content">
        <!-- Carousel -->
        <div id="demo" class="carousel slide" data-ride="carousel">

          <!-- Indicators -->
          <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            <li data-target="#demo" data-slide-to="3"></li>
          </ul>

          <!-- The slideshow -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="./img/banner1.jpg" height="410px">
            </div>

            <div class="carousel-item">
              <img src="./img/banner4.jpg" height="410px">
            </div>

            <div class="carousel-item">
              <img src="./img/banner2.jpg" height="410px" width="725px">
            </div>
            <div class="carousel-item">
              <img src="./img/banner3.jpg" height="410px" width="725px">
            </div>
          </div>

          <!-- Left and right controls -->
          <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>
        <!-- End carousel -->
      </div>
      <div class="only">
        <img src="./img/bannerphai1.jpg" alt="">
        <img src="./img/bannerphai2.jpg" alt="">
      </div>

    </div>
  </div>
</div>

<div class="sanpham">
  <div class="thanhg">
    <a href=" ">Iphone</a>/
    <a href="">Oppo</a>/
    <a href="">Apple Watch</a>
  </div><br>
  <div class="tieude">
    <p class="styled-text">Sản Phẩm</p>
    <hr>
  </div>
  <div class="row sp">
    <?php
    $i = 0;
    foreach ($hanghoa_new as $hh) {
      extract($hh);
      $hinhanh = $img_path . $hinhanh;
      $link_hh = "index.php?act=ctsanpham&mahh=" . $mahh;
      echo '<div class="boxsp" data-aos="fade-up" data-aos-duration="2000" style="margin-bottom: 20px;">
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
  <div class="phone-list-container">
    <h1 class="phone-list-title">Top 10 yêu thích</h1>
    <div class="phone-list-wrapper">
      <div class="phone-list">
        <?php
        foreach ($ds_top10 as $hh) {
          extract($hh);
          $link_hh = "index.php?act=hanghoact&ma_hh=" . $mahh;
          $hinhanh = $img_path . $hinhanh;
          echo '<div class="phone-list-item"  data-aos="fade-up" data-aos-duration="2000">
                <a href=""><img src="' . $hinhanh . '" width=" 210px;" height="210px" alt="Điện thoại 3"></a>
                <div class="name" style="text-align: center;"><a href="#">' . $tenhh . '</a></div>
                <p>' . $dongia . ' VNĐ</p>
                <div class="row btnaddtocart">
                <form action="index.php?act=addtocart" method="post">
                <input type="hidden" name="id" value="' . $mahh . '">
                <input type="hidden" name="name" value="' . $tenhh . '">
                <input type="hidden" name="img" value="' . $hinhanh . '">
                <input type="hidden" name="price" value="' . $dongia . '"><br>

                <input type="submit" style="margin-top: -50px; margin-left: 70px;" name="addtocart" value="Add to cart">
                </form>
              </div>
              </div>';
        }
        ?>
      </div>
      <i class="fas fa-chevron-right arrow"></i>
    </div>
    <script src="js/app.js"></script>
  </div>
</div>
</div>
</div>
</div>