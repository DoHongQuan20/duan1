<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        .container1 {
            width: 1000px;
            border: 1px #9e9e9e solid;
            margin: auto;
            padding: 0;
            height: 600px;
            margin-bottom: 30px;
            border-radius: 5px;
        }

        .container2 {
            max-width: 800px;
            margin: 40px auto;
            background-color: #fff;
            border-radius: 5px;
            overflow: hidden;
            font-family: Arial, sans-serif;
            line-height: 1.6;
            display: flex;
            flex-direction: row;
            height: 500px;
        }

        .product-image img {
            width: 500px;
            height: 500px;
            display: block;
        }

        .product-details {
            padding: 20px;
        }

        .product-details h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .product-details p {
            margin-bottom: 15px;
        }

        .product-details .price {
            font-size: 20px;
            font-weight: bold;
            color: #c9302c;
            margin-bottom: 15px;
        }

        .product-details .description {
            margin-bottom: 20px;
        }

        .product-details .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #c9302c;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .product-details .btn:hover {
            background-color: #9c2023;
        }

        .rom {
            width: 100%;
            /* Chiếm toàn bộ chiều rộng trên màn hình nhỏ */
            height: 250px;

            margin-left: 0;
            margin-bottom: 100px;
        }

        .boxtrai1 {


            width: 100%;
        }


        .mc {
            margin-right: 2%;
        }



        .boxtitler {
            color: #ffffff;
            padding: 3px;
            background-color: #DC3545;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
            border: 1px #ccc solid;
        }

        .boxcontentn {
            border-left: #ccc solid;
            border-right: #ccc solid;
            border-bottom: #ccc solid;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
            min-height: 180px;
            padding: 15px;
            border: 1px #ccc solid;
        }
    </style>

</head>
    <body>
        <div class="container1">
            <div class="container2">
                <?php
                extract($one_hh);
                $hinhanh = $img_path . $hinhanh;
                echo '<div class="product-image">
                        <img src="' . $hinhanh . '" alt="Product Image" />
                    </div>';
                echo '<div class="product-details" >
                <h1><b>'.$tenhh.'</b></h1>
                <p class="price">'.$dongia.' VNĐ</p>
                <div class="rating" style="margin-left: -3px">
                    <div class="stars">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span> <span class="fa fa-star"></span>
                    </div>
                    <span class="review-no">123 đánh giá</span>
                </div>
                <span class="review-no" style="margin-left: 5px">Lượt xem : '.$luotxem.'</span>
                <p class="description" style="margin-left: 5px">
                   Mô tả : '.$mota.'
                </p>
                <div class="row btnaddtocart">
                <form action="index.php?act=addtocart" method="post">
                <input type="hidden" name="id" value="' . $mahh . '">
                <input type="hidden" name="name" value="' . $tenhh . '">
                <input type="hidden" name="img" value="' . $hinhanh . '">
                <input type="hidden" name="price" value="' . $dongia . '"><br>

                <input type="submit" class="btn btn-danger" style="margin-top: -50px; margin-left: 15px;" name="addtocart" value="Mua Ngay">
                </form>
              </div>
            </div>
';
                ?>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $("#binhluan").load("view/binhluan/formbinhluan.php", {
                    idpro: <?= $mahh ?>
                });
            });
        </script>
        <div class="rom ml">
            <div class="boxtitler">
                <h4>Bình luận</h4>
            </div>
            <div class="boxcontentn" id="binhluan">
            </div>

        </div>
        <div class="phone-list-container" style="height: 480px;">
            <h1 class="phone-list-title" style=" height:58px ;">Sản phẩm tương tự</h1>
            <div class="phone-list-wrapper">
                <div class="phone-list" style=" height: 420px;">
                    <?php
                    foreach ($hh_cung_loai as $hh_cung_loai) {
                        extract($hh_cung_loai);
                        $linkhh = "index.php?act=ctsanpham&mahh=" . $mahh;
                        $hinhanh = $img_path . $hinhanh;
                        echo '<div class="phone-list-item" data-aos="fade-up" data-aos-duration="2000">
                <a href="'.$linkhh.'"><img src="' . $hinhanh . '" width=" 210px;" height="210px" alt="Điện thoại 3"></a>
                <div class="name" style="text-align: center;"><a href="#">' . $tenhh . '</a></div>
                <p>' . $dongia . ' VNĐ</p>
                <div class="row btnaddtocart">
                <form action="index.php?act=addtocart" method="post">
                <input type="hidden" name="id" value="' . $mahh . '">
                <input type="hidden" name="name" value="' . $tenhh . '">
                <input type="hidden" name="img" value="' . $hinhanh . '">
                <input type="hidden" name="price" value="' . $dongia . '"><br>

                <input type="submit" style="margin-top: -50px; margin-left: 72px;" name="addtocart" value="Add to cart">
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
    </body>

</html>