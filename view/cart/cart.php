<h5 class="alert-info mb-3 pt-3 pb-3 pl-sm-4 shadow-sm text-center" style="margin-top: 5rem; margin-bottom: 0rem">Giỏ hàng</h5>
<div class="container">

    <div class="row m-1 pb-5">
        <table class="table table-responsive-md">
            <thead class="thead text-center">
                <tr>
                    <th>ID Sản Phẩm</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Ảnh</th>
                    <th>Giá</th>
                    <th style="width:6rem">Số lượng</th>
                    <th>Thành tiền</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody class="text-center" id="giohang">
                <?php 
                    $tong = 0;
                    $i =0;
                    foreach ($_SESSION['mycart'] as $cart) {
                        $anh_sanpham = "uploads/".$cart[2];
                        $ttien = $cart[3] * $cart[4];
                        $tong+=$ttien;
                        $delcart = "index.php?act=xoacart&idcart=".$i;
                    echo '<tr>
                        <td>'.$cart[0].'</td>
                        <td>'.$cart[1].'</td>
                        <td><img src="'.$anh_sanpham.'" height="80px"></td>
                        <td> <span>'.$cart[3].' đ</span></td>
                        <td> <span>'.$cart[4].'</span></td>
                        <td>'.$ttien.' đ</td>
                        <td><a href="'.$delcart.'"><input type="button" value="Xóa" class="btn btn-outline-secondary"></a></td>
                    </tr>';
                        $i+=1;
                    }
                echo '<tr class="text-center">
                        <th colspan="5">Tổng thành tiền: </th>
                        <td class=" text-danger font-weight-bold"><span id="tong_thanh_tien">'.$tong.' đ</span></td>
                        <td></td>
                      </tr>'
                ?>

            </tbody>
            <tfoot id="tongdonhang">
                <tr class="text-right">
                    <th colspan="7">
                        <a href="index.php?act=dathang" class="btn btn-success">Đặt Hàng</a>
                        <a onclick="return confirm('Bạn chắc chắn muốn xóa tất cả k??');"
                            href="<?= $SITE_URL . "/cart/delete-cart.php?act=deleteAll" ?>" class="btn btn-danger">Xóa
                            tất
                            cả</a>
                    </th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row  m-1 pb-5">
        <a class="btn btn-outline-dark col-12" href="index.php"> Về trang chủ</a>
    </div>
</div>