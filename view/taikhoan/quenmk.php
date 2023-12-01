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

    <form action="index.php?act=quenmk" method="post">
        <h2>Quên mật khẩu</h2>
        <label for="username">Tên đăng nhập</label>
        <input type="text" class="form-control hoten" style="width:460px;" name="user" >

        <label for="password">Email</label>
        <input class="form-control" type="email" name="email"><br>
        
        <input type="submit" name="guiemail" value="Gửi">
        <input style=" margin-top: 10px;" type="reset" name="Nhập lại"><br>
        <b><?php
        echo $thongbao;
        ?></b>
        
    </form>
    
</body>

</html>