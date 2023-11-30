<div class="boc">
    <div class="container4 mt-5 border rounded p-4 formtt">

        <?php
        if (isset($bill) && (is_array($bill))) {
            extract($bill);
        }
        ?>
        <div class="mb">
            <div class="boxtitle">
                <h4>Mã đơn hàng</h4>
            </div>
            <div class=" boxcontent" style="text-align:center ;">
                <li>Mã đơn hàng:DH-<?= $bill['id']; ?></li>
                <li>Ngày đặt hàng:<?= $bill['ngaydathang']; ?></li>
                <li>Tổng đơn hàng:<?= $bill['total']; ?></li>
                <li>phương thức thanh toán:<?= $bill['bill_pttt']; ?></li>
            </div>
        </div>
    </div>
    <div class="container5 mt-5 border rounded p-4 formtt">
        <div class=" mb">
            <div class="boxtitle">
                <h4>Thông tin đặt hàng</h4>
            </div>
            <div class="boxcontent billform">
                <table>
                    <tr>
                        <td><b>Người đặt hàng</b></td>
                        <td><?= $bill['bill_name']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Địa chỉ</b></td>
                        <td><?= $bill['bill_address']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Email</b></td>
                        <td><?= $bill['bill_email']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Điện thoại</b></td>
                        <td><?= $bill['bill_tel']; ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="container7 mt-5 border rounded p-4 formtt">
    <div class="mb">
        <div class="boxtitle">
            <h4>Chi tiết đơn hàng</h4>
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
<div class="bill">
        <a href="index.php"><input type="submit" class="btn btn-success"  value="Thoát"></a>
    </div>
<style>
    .bill {
        margin-left: 1130px;
        margin-top: 30px;
        margin-bottom: 10px;
    }
    .boc{
        display: flex;
        flex-direction: row;
    }
    .container4 {
        width: 100%;
        max-width: 350px;
        /* or adjust as needed */
        margin: 0 auto;
        margin-left: 230px;
    }
    .container5 {
        width: 100%;
        max-width: 600px;
        /* or adjust as needed */
        margin: 0 auto;
        margin-left: -200px;
    }
    .container7 {
        width: 100%;
        max-width: 970px;
        /* or adjust as needed */
        margin: 0 auto;
        
    }

    .mb {
        margin-bottom: 20px;
    }

    .border {
        border: 1px solid #ccc;
    }

    .rounded {
        border-radius: 5px;
    }


    .boxtitle {
        background-color: #f0f0f0;
        padding: 8px;
    }

    .boxcontent {
        padding: 8px;
    }

    .billform table {
        width: 100%;
    }

    .billform table td {
        padding: 6px;
        border-bottom: 1px solid #ddd;
    }

    .cart {
        /* Styles for the cart section */
    }

    /* You can further customize styles based on your design requirements */
</style>