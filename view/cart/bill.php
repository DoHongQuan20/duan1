<div class="container mt-5 border rounded p-4 formtt">
    <h3>Thông tin đặt hàng</h3>
    <?php
    if (isset($_SESSION['user'])) {
        $name = $_SESSION['user']['name'];
        $address = $_SESSION['user']['address'];
        $email = $_SESSION['user']['email'];
        $tel = $_SESSION['user']['tel'];
    } else {
        $name = "";
        $address = "";
        $email = "";
        $tel = "";
    }
    ?>
    <div class="input1">
        <td>Người đặt hàng</td>
        <td><input class="form-control" type="text" name="name" value="<?= $name; ?>"></td><br>
    </div>
    <div class="input1">
        <td>Địa chỉ</td>
        <td><input class="form-control" type="text" name="address" value="<?= $address; ?>"></td><br>
    </div>
    <div class="input1">
        <td>Email</td>
        <td><input class="form-control" type="text" name="email" value="<?= $email; ?>"></td><br>
    </div>
    <div class="input1">
        <td>Điện thoại</td>
        <td><input class="form-control" type="text" name="tel" value="<?= $tel; ?>"></td><br>
    </div>


</div>


<div class="rom ml">

</div>

<div class="container mt-5 border rounded p-4 ptthanhtoan">
    <div class="boxtitler">
        <h3>Phương thức thanh toán</h3>
    </div>
    <div class="boxconten chon">
        <table>
            <tr>
                <td>
                    <input type="radio" name="pttt" checked>
                    Thanh toán online
                </td>
                <td>
                    <input type="radio" name="pttt" checked>
                    Chuyển khoản ngân hàng
                </td>
                <td>
                    <input type="radio" name="pttt" checked>
                    Trả tiền khi nhận hàng
                </td>


            </tr>
        </table>
    </div>
</div>
<div class="container mt-5 border rounded p-4 ">
    <table id="cart" class="table table-hover table-condensed">
        <?php
        viewcart(1);
        ?>
    </table>

</div>
<div class="bill">
    <a href="index.php?act=billconfirm"><input type="submit" class="btn btn-success" name="dongydathang" value="Đồng ý đặt hàng"></a>
</div>
<style>
    .bill {
        margin-left: 1150px;
        margin-top: 30px;
        margin-bottom: 10px;
    }

    .formtt {
        display: flex;
        flex-direction: column;
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

    .ptthanhtoan {
        display: flex;
        flex-direction: column;
    }

    .input1 input[type="password"] {
        margin-bottom: 20px;
    }

    .boxcontentn input[type="submit"],
    .boxcontentn input[type="reset"] {
        border-radius: 5px;
        padding: 5px 10px;
        background-color: white;
        border: 1px #ccc solid;
        margin-left: 1px;
    }

    .input1 input[type="text"] {
        width: 1070px;
    }

    .boxcontentn input[type="submit"]:hover {
        background-color: #ccc;
        border: 1px #8e8d8d solid;
    }

    .boxcontentn input[type="reset"]:hover {
        background-color: #ccc;
        border: 1px #8e8d8d solid;
    }
</style>