<style>
    .preview {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
    }

    @media screen and (max-width: 996px) {
        .preview {
            margin-bottom: 20px;
        }
    }

    .preview-pic {
        -webkit-box-flex: 1;
        -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
    }

    .preview-thumbnail.nav-tabs {
        border: none;
        margin-top: 15px;
    }

    .preview-thumbnail.nav-tabs li {
        width: 18%;
        margin-right: 2.5%;
    }

    .preview-thumbnail.nav-tabs li img {
        max-width: 100%;
        display: block;
    }

    .preview-thumbnail.nav-tabs li a {
        padding: 0;
        margin: 0;
        cursor: pointer;
    }

    .preview-thumbnail.nav-tabs li:last-of-type {
        margin-right: 0;
    }

    .tab-content {
        overflow: hidden;
    }

    .tab-content img {
        width: 100%;
        -webkit-animation-name: opacity;
        animation-name: opacity;
        -webkit-animation-duration: .3s;
        animation-duration: .3s;
    }

    .card {
        margin-top: 0px;
        background: #ffffff;
        padding: 3em;
        line-height: 1.5em;
    }

    @media screen and (min-width: 997px) {
        .wrapper {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
        }
    }

    .details {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
    }

    .colors {
        -webkit-box-flex: 1;
        -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
    }

    .product-title,
    .price,
    .sizes,
    .colors {
        text-transform: UPPERCASE;
        font-weight: bold;
    }

    .checked,
    .price span {
        color: #C9302C;
    }

    .product-title,
    .rating,
    .product-description,
    .price,
    .vote,
    .sizes {
        margin-bottom: 15px;
    }

    .product-title {
        margin-top: 0;
    }

    .size {
        margin-right: 10px;
    }

    .size:first-of-type {
        margin-left: 40px;
    }

    .color {
        display: inline-block;
        vertical-align: middle;
        margin-right: 10px;
        height: 2em;
        width: 2em;
        border-radius: 2px;
    }

    .color:first-of-type {
        margin-left: 20px;
    }

    .add-to-cart,
    .like {
        background: #DC3545;
        padding: 1.2em 1.5em;
        border: none;
        text-transform: UPPERCASE;
        font-weight: bold;
        color: #fff;
        text-decoration: none;
        -webkit-transition: background .3s ease;
        transition: background .3s ease;
    }

    .add-to-cart:hover,
    .like:hover {
        background: #C9302C;
        color: #fff;
        text-decoration: none;
    }

    .not-available {
        text-align: center;
        line-height: 2em;
    }

    .not-available:before {
        font-family: fontawesome;
        content: "\f00d";
        color: #fff;
    }

    .orange {
        background: #ff9f1a;
    }

    .green {
        background: #85ad00;
    }

    .blue {
        background: #0076ad;
    }

    .tooltip-inner {
        padding: 1.3em;
    }

    @-webkit-keyframes opacity {
        0% {
            opacity: 0;
            -webkit-transform: scale(3);
            transform: scale(3);
        }

        100% {
            opacity: 1;
            -webkit-transform: scale(1);
            transform: scale(1);
        }
    }

    @keyframes opacity {
        0% {
            opacity: 0;
            -webkit-transform: scale(3);
            transform: scale(3);
        }

        100% {
            opacity: 1;
            -webkit-transform: scale(1);
            transform: scale(1);
        }
    }

    .rom {
        width: 100%;
        /* Chiếm toàn bộ chiều rộng trên màn hình nhỏ */
        height: 250px;

        margin-left: 0;
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
        min-height: 200px;
        padding: 15px;
        border: 1px #ccc solid;
    }
</style>

</head>

<body>

    <div class="container" style="height: 670px;">
        <div class="card">
            <div class="container-fliud">
                <div class="wrapper row">
                    <div class="preview col-md-6">
                        <div class="preview-pic tab-content">
                            <div class="tab-pane active" id="pic-1"><img src="img/ip14promax.jpg" alt="">
                            </div>

                        </div>

                    </div>
                    <div class="details col-md-6">
                        <h3 class="product-title" style="margin-top: 30px;">Iphone 15 Pro Max</h3>
                        <div class="rating" style="margin-left: -3px;">
                            <div class="stars"> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span>
                            </div> <span class="review-no">123 đánh giá</span>
                        </div>
                        <p class="product-description" style="margin-left: 3px;">Mô tả ở đây</p>
                        <h4 class="price">Giá bán: 200.000 đ</h4>
                        <p class="vote"><strong>91%</strong> of người mua hài lòng với sản phẩm này <strong>(87 bình chọn)</strong>
                        </p>
                        <div class="action"> <a href=""><button style="margin-bottom: 180px;" class="add-to-cart btn btn-default" type="button">MUA NGAY</button>
                                <button style="margin-bottom: 180px;" class="add-to-cart btn btn-default" type="button">THÊM VÀO GIỎ HÀNG
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <div class="rom ml">
        <div class="boxtitler">
            <h4>Bình luận</h4>
        </div>
        <div class="boxcontentn" id="binhluan">
        </div>

    </div>
    <div class="phone-list-container" style="height: 480px;">
        <h1 class="phone-list-title" style="margin-top: -25px; height:58px ;">Sản phẩm tương tự</h1>
        <div class="phone-list-wrapper">
            <div class="phone-list" style="margin-top: -60px; height: 420px;">
                <div class="phone-list-item" data-aos="fade-up" data-aos-duration="2000">
                    <a href=""><img src="./img/ip14promax.jpg" width=" 210px;" height="210px" alt="Điện thoại 3"></a>
                    <div class="name"><a href="#">Apple Watch seri3</a></div>
                    <p>$5900</p>
                    <a href=""><input type="button" value="Add to cart"></a>
                </div>
                <div class="phone-list-item" data-aos="fade-up" data-aos-duration="2000">
                    <a href=""><img src="./img/ip14promax.jpg" width=" 210px;" height="210px" alt="Điện thoại 3"></a>
                    <div class="name"><a href="#">Apple Watch seri3</a></div>
                    <p>$5900</p>
                    <a href=""><input type="button" value="Add to cart"></a>
                </div>
                <div class="phone-list-item" data-aos="fade-up" data-aos-duration="2000">
                    <a href=""><img src="./img/ip14promax.jpg" width=" 210px;" height="210px" alt="Điện thoại 3"></a>
                    <div class="name"><a href="#">Apple Watch seri3</a></div>
                    <p>$5900</p>
                    <a href=""><input type="button" value="Add to cart"></a>
                </div>
                <div class="phone-list-item" data-aos="fade-up" data-aos-duration="2000">
                    <a href=""><img src="./img/ip14promax.jpg" width=" 210px;" height="210px" alt="Điện thoại 3"></a>
                    <div class="name"><a href="#">Apple Watch seri3</a></div>
                    <p>$5900</p>
                    <a href=""><input type="button" value="Add to cart"></a>
                </div>
                <div class="phone-list-item" data-aos="fade-up" data-aos-duration="2000">
                    <a href=""><img src="./img/ip14promax.jpg" width=" 210px;" height="210px" alt="Điện thoại 3"></a>
                    <div class="name"><a href="#">Apple Watch seri3</a></div>
                    <p>$5900</p>
                    <a href=""><input type="button" value="Add to cart"></a>
                </div>
                <div class="phone-list-item" data-aos="fade-up" data-aos-duration="2000">
                    <a href=""><img src="./img/ip14promax.jpg" width=" 210px;" height="210px" alt="Điện thoại 3"></a>
                    <div class="name"><a href="#">Apple Watch seri3</a></div>
                    <p>$5900</p>
                    <a href=""><input type="button" value="Add to cart"></a>
                </div>
                <div class="phone-list-item" data-aos="fade-up" data-aos-duration="2000">
                    <a href=""><img src="./img/ip14promax.jpg" width=" 210px;" height="210px" alt="Điện thoại 3"></a>
                    <div class="name"><a href="#">Apple Watch seri3</a></div>
                    <p>$5900</p>
                    <a href=""><input type="button" value="Add to cart"></a>
                </div>
                <div class="phone-list-item" data-aos="fade-up" data-aos-duration="2000">
                    <a href=""><img src="./img/ip14promax.jpg" width=" 210px;" height="210px" alt="Điện thoại 3"></a>
                    <div class="name"><a href="#">Apple Watch seri3</a></div>
                    <p>$5900</p>
                    <a href=""><input type="button" value="Add to cart"></a>
                </div>
                <div class="phone-list-item" data-aos="fade-up" data-aos-duration="2000">
                    <a href=""><img src="./img/ip14promax.jpg" width=" 210px;" height="210px" alt="Điện thoại 3"></a>
                    <div class="name"><a href="#">Apple Watch seri3</a></div>
                    <p>$5900</p>
                    <a href=""><input type="button" value="Add to cart"></a>
                </div>
                <div class="phone-list-item" data-aos="fade-up" data-aos-duration="2000">
                    <a href=""><img src="./img/ip14promax.jpg" width=" 210px;" height="210px" alt="Điện thoại 3"></a>
                    <div class="name"><a href="#">Apple Watch seri3</a></div>
                    <p>$5900</p>
                    <a href=""><input type="button" value="Add to cart"></a>
                </div>
            </div>
            <i class="fas fa-chevron-right arrow"></i>
        </div>
        <script src="js/app.js"></script>
    </div>