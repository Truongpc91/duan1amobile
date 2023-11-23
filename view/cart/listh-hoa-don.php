<?php
    if(isset($listcart) && (is_array($listcart))) {
        extract($listcart);
    } 
?>

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
                </tr>
            </thead>
            <tbody class="text-center" id="giohang">
                <?php 
                    $tong = 0;
                    foreach ($_SESSION['mycart'] as $cart) {
                        $anh_sanpham = "uploads/".$cart[2];
                        $ttien = $cart[3] * $cart[4];
                        $tong+=$ttien;
                    echo '<tr>
                        <td>'.$id_sanpham.'</td>
                        <td>'.$id_sanpham.'</td>
                        <td><img src="'.$img.'" height="80px"></td>
                        <td> <span>'.$so_luong.' đ</span></td>
                        <td> <span>'.$tong_tien.'</span></td>
                        <td>'.$ttien.' đ</td>
                    </tr>';
                    }
                echo '<tr class="text-center">
                        <th colspan="5">Tổng thành tiền: </th>
                        <td class=" text-danger font-weight-bold"><span id="tong_thanh_tien">'.$tong.' đ</span></td>
                        <td></td>
                      </tr>'
                ?>

            </tbody>
        </table>
    </div>