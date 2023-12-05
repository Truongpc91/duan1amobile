<h5 class="alert-info mb-3 pt-3 pb-3 pl-sm-4 shadow-sm text-center" style="margin-top: 5rem; margin-bottom: 0rem">Giỏ hàng của bạn</h5>
<div class="container">

    <div class="row m-1 pb-5">
        <form action="index.php?act=updatecart" class="flex justify-between items-center p-2" method="post">
        <table class="table table-responsive-md">
            <thead class="thead text-center">
                <tr>
                    <th>STT</th>
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
                     $tongtien = 0;
                     $stt = 1;
                     $i = 0;
                     foreach ($_SESSION['mycart'] as $row) {
                         $anh_sanpham = "uploads/".$row['anh_sanpham'];
                         $thanh_tien = $row['gia'] * $row['soluong'];
                         $tongtien += $thanh_tien;
                         $delcart = "index.php?act=xoacart&idcart=".$i;
                    echo '<tr>
                        <td>'.$stt++.'</td>
                        <td>'.$row['ten_sanpham'].'</td>
                        <td><img src="'.$anh_sanpham.'" height="80px"></td>
                        <td> <span>'.number_format($row['gia']).' đ</span></td>
                        <form action="index.php?act=updatecart" method="POST">
                            <input type="hidden" name="productId[]" value="'.$row['id_sanpham'].'">
                            <td><input type="number" min="1"  max="10" name="productSlUpdate[]"  value="'.$row['soluong'].'" ></td>
                        </form>
                        <td>'.number_format($thanh_tien).' đ</td>
                        <td>
                            <input type="submit" name="update" value="" class="btn btn-light">
                            <a href="'.$delcart.'"><input type="button" value="Xóa" class="btn btn-outline-secondary"></a>
                        </td>
                    </tr>';
                        $i+=1;
                    }
                echo '<tr class="text-center">
                        <th colspan="5">Tổng thành tiền: </th>
                        <td class=" text-danger font-weight-bold"><span id="tong_thanh_tien">'.number_format($tongtien).' đ</span></td>
                        <td></td>
                      </tr>'
                ?>

            </tbody>
            <tfoot id="tongdonhang">
                <tr class="text-right">
                    
                    <th colspan="7">
                    <a href="index.php?act=sanpham" class="btn btn btn-info">Tiếp Tục Mua Hàng</a>
                        <a href="index.php?act=dathang" class="btn btn-success">Đặt Hàng</a>
                    </th>
                </tr>
            </tfoot>
        </table>
    </div>
    </form>
    <div class="row  m-1 pb-5">
        <a class="btn btn-outline-dark col-12" href="index.php"> Về trang chủ</a>
    </div>
</div>

