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
    <div class="container-form" style="width: 900px; margin: auto;">
        <form action="index.php?act=dangky" method="post" onsubmit="return validateForm()">
            <h2>Đăng ký</h2>
            <div style="display: flex; width: 900px;">
                <div style=" width: 420px;">
                    <label for="username">Tên đăng nhập</label>
                    <input type="text" class="form-control hoten" style="width:100%;" name="user" required>

                    <label for="password">Mật khẩu</label>
                    <input type="password" class="form-control" name="pass" required>

                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" required>
                    <b id="email-error">
                        <?php
                        if (isset($thongbao1) && ($thongbao1 != "")) {
                            echo $thongbao1;
                        }
                        ?>
                    </b>
                </div>
                <div style=" width: 420px;">
                    <label for="name">Họ và tên</label>
                    <input type="text" class="form-control hoten" style="width:100%;" name="name" required>

                    <label for="address">Địa chỉ</label>
                    <input type="text" class="form-control" style="width:100%;" name="address" required>

                    <label for="tel">Số điện thoại</label>
                    <input type="text" class="form-control" style="width:100%;" name="tel" required>
                    <b id="tel-error">
                        <?php
                        if (isset($thongbao2) && ($thongbao2 != "")) {
                            echo $thongbao2;
                        }
                        ?>
                    </b>
                </div>
            </div>
            <div>
                <input type="submit" style=" width: 410px; margin-left: 5px;" name="dangky" value="Đăng ký">
                <a href="index.php"><input style="background-color: #ff3333; width: 410px;" type="button" value="Thoát"></a>
            </div>
            <b style="margin-left: 5px;">
                <?php
                if (isset($thongbao) && ($thongbao != "")) {
                    echo $thongbao;
                }
                ?>
            </b>
        </form>
    </div>
    <script>
        function validateForm() {
            var username = document.getElementsByName('user')[0].value;
            var password = document.getElementsByName('pass')[0].value;
            var name = document.getElementsByName('name')[0].value;
            var emailInput = document.getElementsByName('email')[0].value;
            var tel = document.getElementsByName('tel')[0].value;
            var address = document.getElementsByName('address')[0].value;

            document.getElementById('email-error').innerText = "";
            document.getElementById('tel-error').innerText = "";
            // Basic validation, you can add more checks based on your requirements
            if (username == "" || password == "" || name == "" || emailInput == "" || tel == "" || address == "") {
                alert("Vui lòng điền đầy đủ thông tin");
                return false;
            }
            if (name.length < 6) {
                alert("Họ và tên phải có ít nhất 6 ký tự.");
                return false;
            }
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(emailInput)) {
                alert("Email không hợp lệ.");
                return false;
            }

            var phonePattern = /^[0-9]{10}$/; // Chỉnh sửa regex cho số điện thoại, ví dụ đây là regex cho số điện thoại gồm 10 chữ số.
            if (!phonePattern.test(tel)) {
                alert("Số điện thoại không hợp lệ. Bắt buộc phải đủ 10 số");
                return false;

            }

            if (address.length < 10) {
                alert("ĐỊa chỉ phải có ít nhất 10 ký tự.");
                return false;
            }

            return true;
        }
    </script>
</body>

</html>