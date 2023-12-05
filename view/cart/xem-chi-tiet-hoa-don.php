<h5 class="alert-info mb-3 pt-3 pb-3 pl-sm-4 shadow-sm text-center" style="margin-top: 5rem; margin-bottom: 0rem">Chi tiết đơn hàng: <?php echo $name_bill; ?></h5>
<div class="col-9 m-auto">
        <table class="table table-responsive-md">
            <thead class="thead text-center">
                <tr>
                    <th>Ảnh Sản phẩm</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Tổng</th>
                </tr>
            </thead>
            <tbody class="text-center" id="giohang">
                <?php 
                    foreach($listcart as $cart) {
                        extract($cart);
                        $tong = $gia * $so_luong;
                    echo '<tr>
                        <td> <img src="uploads/'.$img.'" width="80px"></td>
                        <td> <span>'.number_format($gia).'</span></td>
                        <td> <span>'.$so_luong.'</span></td>
                        <td> <span>'.number_format($tong).'</span></td>';
                        
                    }
                    echo '<tr class="text-center">
                    <th colspan="3">Tổng thành tiền: </th>
                    <td class=" text-danger font-weight-bold"><span id="tong_thanh_tien">'.number_format($tong_tien).' đ</span></td>
                  </tr>'
                ?>

            </tbody>
        </table>
        <div class="row  m-1 pb-5">
            <a class="btn btn-outline-dark col-12" href="index.php"> Về trang chủ</a>
        </div>
    </div>