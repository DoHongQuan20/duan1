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
    <?php
    if (isset($_SESSION['user']) && is_array($_SESSION['user'])) {
        extract($_SESSION['user']);
    }
    ?>
    <div class="container-form" style="width: 900px; margin: auto;">
        <form action="index.php?act=edit_taikhoan" method="post">
            <h2>Cập nhật tài khoản</h2>
            <div style="display: flex; width: 900px;">
                <div style=" width: 420px;">
                    <label for="username">Tên đăng nhập</label>
                    <input type="text" class="form-control hoten" style="width:100%;" name="user" value="<?=$user?>" required>

                    <label for="password">Mật khẩu</label>
                    <input type="text" class="form-control" style="width:100%;" name="pass" value="Không thể cập nhật mật khẩu ở đây" disabled>

                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email"  value="<?=$email?>" required>
                </div>
                <div style=" width: 420px;">
                    <label for="name">Họ và tên</label>
                    <input type="text" class="form-control hoten" style="width:100%;" name="name" value="<?=$name?>" required>

                    <label for="address">Địa chỉ</label>
                    <input type="text" class="form-control" style="width:100%;" name="address" value="<?=$address?>" required>

                    <label for="tel">Số điện thoại</label>
                    <input type="text" class="form-control" style="width:100%;" name="tel" value="<?=$tel?>" required>

                </div>
            </div>

            <input type="hidden" name="id" value="<?= $id ?>">
            <div>
                <input type="submit" style=" width: 410px; margin-left: 5px;" name="capnhat" value="Cập nhật">
                <a href="index.php"><input style="background-color: #ff3333; width: 410px;" type="button" value="Thoát"></a>
            </div>
            <b style="margin-left: 5px;"><?php if (isset($thongbao) && ($thongbao != "")) {
                    echo $thongbao;
                }
                ?></b>
        </form>
    </div>
</body>

</html>