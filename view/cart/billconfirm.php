<div class="container mt-5 border rounded p-4 formtt">
  
    <?php
    if (isset($bill) && (is_array($bill))) {
        extract($bill);
    }
    ?>
    <div class="row mb">
        <div class="boxtitle">
            Mã đơn hàng
        </div>
        <div class="row boxcontent" style="text-align:center ;">
            <li>Mã đơn hàng:DAM-<?= $bill['id']; ?></li>
            <li>-Ngày đặt hàng:<?= $bill['ngaydathang']; ?></li>
            <li>-Tổng đơn hàng:<?= $bill['total']; ?></li>
            <li>- phương thức thanh toán:<?= $bill['bill_pttt']; ?></li>
        </div>
    </div>
</div>
<div class="container mt-5 border rounded p-4 formtt">
    <div class="row mb">
        <div class="boxtitle">Thông tin đặt hàng</div>
        <div class="row boxcontent billform">
            <table>
                <tr>
                    <td>người đặt hàng</td>
                    <td><?= $bill['bill_name']; ?></td>
                </tr>
                <tr>
                    <td>Địa chỉ</td>
                    <td><?= $bill['bill_address']; ?></td>
                </tr>
                <tr>
                    <td>email</td>
                    <td><?= $bill['bill_email']; ?></td>
                </tr>
                <tr>
                    <td>Điện thoại</td>
                    <td><?= $bill['bill_tel']; ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
<div class="container mt-5 border rounded p-4 formtt">
    <div class="row mb">
        <div class="boxtitle">
            Chi tiết giỏ hàng
        </div>
        <div class="row boxcontent cart">
            <table id="cart" class="table table-hover table-condensed">
                <?php
                viewcart(0);
                ?>
            </table>
        </div>
    </div>

    </form>
</div>
<div class="row mb bill">
    <input type="submit" value="Đồng ý đặt hàng" name="dongydathang">
</div>