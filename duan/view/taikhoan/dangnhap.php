<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <title>Đăng nhập</title>
    <style>
        
    </style>
</head>

<body>

    <form action="index.php?act=dangnhap" method="post">
        <h2>Đăng Nhập</h2>
        <label for="username">Tên đăng nhập</label>
        <input type="text" class="form-control hoten" style="width:460px;"  name="user" required>
        
        <label for="password">Mật khẩu:</label>
        <input type="password" class="form-control"  name="pass" required><br>

        <input type="submit" name="dangnhap" value="Đăng nhập"><br>
        <a href="#"></a><input style="background-color: #ff3333; margin-left: -10px; margin-top: 10px;" type="submit" value="Thoát" name=""></a>
    </form>

</body>

</html>