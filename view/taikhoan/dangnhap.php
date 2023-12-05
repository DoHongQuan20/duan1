<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <title>Đăng nhập</title>
    <style>
        .forgot-password {
            order: -1;
            /* Đặt thứ tự xuất hiện */
        }

        .register {
            order: 2;
            /* Đặt thứ tự xuất hiện */
        }
    </style>
</head>

<body>
    <div class="container-form">
        <form action="index.php?act=dangnhap" method="post">
            <h2>Đăng Nhập</h2>
            <label for="username">Tên đăng nhập</label>
            <input type="text" class="form-control hoten" style="width:100%;" name="user" required>

            <label for="password">Mật khẩu:</label>
            <input type="password" class="form-control" name="pass" required>
            <b><?php if (isset($thongbao) && ($thongbao != "")) {
                    echo $thongbao;
                }
                ?></b>
            <div class="ngang" style="display: flex; flex-direction: row; justify-content: space-between;">
                <a class="forgot-password " href="index.php?act=quenmk">Quên mật khẩu?</a><br>
                <a class="register" href="index.php?act=dangky">Đăng ký</a><br>
            </div>
            <input type="submit" name="dangnhap" value="Đăng nhập"><br>
            <a href="index.php"><input style="background-color: #ff3333; margin-top: 10px; width: 450px; margin-left: -5px;" type="button" value="Thoát" name="thoat"></a>
            
        </form>
    </div>
</body>

</html>