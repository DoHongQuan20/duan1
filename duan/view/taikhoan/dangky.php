<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <title>Đăng ký</title>
    <style>

    </style>
</head>

<body>

    <form action="index.php?act=dangky" method="post">
        <h2>Đăng ký</h2>
        <label for="username">Tên đăng nhập</label>
        <input type="text" class="form-control hoten" style="width:460px;" name="user" required>

        <label for="password">Mật khẩu</label>
        <input type="password" class="form-control" name="pass" required>

        <label for="name">Họ và tên</label>
        <input type="text" class="form-control hoten" style="width:460px;" name="name" required>

        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" required>

        <label for="email">Số điện thoại</label>
        <input type="text" class="form-control" style="width:460px;" name="tel" required>

        <label for="email">Địa chỉ</label>
        <input type="text" class="form-control" style="width:460px;" name="address" required><br>

        <input type="submit" name="dangky" value="Đăng ký"><br>
        <a href="index.php"></a><input style="background-color: #ff3333; margin-left: -10px; margin-top: 10px;" type="submit" value="Thoát" name=""></a>

        <b><?php if (isset($thongbao) && ($thongbao != "")) {
                echo $thongbao;
            }
            ?></b>
    </form>

</body>

</html>