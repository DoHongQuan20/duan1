<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <title>Đổi mật khẩu</title>
    <style>

    </style>
</head>

<body>
    <?php
    if (isset($_SESSION['user']) && is_array($_SESSION['user'])) {
        extract($_SESSION['user']);
    }
    ?>
    <div class="container-form">
        <form action="index.php?act=doimk" method="post">
            <h2>Đổi mật khẩu</h2>
            <label for="username">Tên đăng nhập</label>
            <input type="text" class="form-control hoten" style="width:100%;" name="user" required>

            <label for="password">Mật khẩu</label>
            <input type="password" class="form-control" name="pass" required>

            <label for="name">Mật khẩu mới</label>
            <input type="text" class="form-control hoten" style="width:100%;" name="passnew" required>

            <label for="email">Nhập lại mật khẩu</label>
            <input type="text" class="form-control" style="width:100%;" name="repassnew" required><br>

            <input type="hidden" name="id" value="<?= $id ?>">
            <input type="submit" name="doimk" value="Xác nhận"><br>
            <a href="index.php"><input style="background-color: #ff3333; margin-top: 10px; width: 450px; margin-left: -5px;" type="button" value="Thoát" name="thoat"></a>
            <b><?php if (isset($thongbao) && ($thongbao != "")) {
                    echo $thongbao;
                }
                ?></b>
        </form>
    </div>
</body>

</html>