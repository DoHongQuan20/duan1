<h2 class="text-center">Giỏ hàng của bạn</h2>
<div class="cart">
    <div class="container">
        <table id="cart" class="table table-hover table-condensed">
            <?php
        viewcart(1);
        ?>
        <tfoot>
        <tr>
            <td>
                <a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Mua thêm</a>
            </td>
            <td  class="hidden-xs"></td>
            <td class="hidden-xs text-center">
               
            </td>
            <td>
                <a href="index.php?act=bill" class="btn btn-success btn-block">Thanh toán <i class="fa fa-angle-right"></i></a>
            </td>
        </tr>
        </tfoot>
        </table>
    </div>
</div>