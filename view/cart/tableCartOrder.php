<!-- <?php
    session_start();
    
    include '../../dao/pdo.php';
    include '../../dao/danh-muc.php';
    include '../../dao/san-pham.php';
    include '../../dao/user.php';
    include '../../dao/thong-ke.php';
    include '../../dao/binh-luan.php';
    include '../../dao/hoa-don.php'; 

    if(!empty($_SESSON['mycart'])){
        $cart = $_SESSON['mycart'];

        $productId = array_column($cart, 'id');

        $idList = improde(',', $productId);

        $dataDb = san_pham_select_cart($idList);

        $tongtien = 0;
        //  $soluong = 0;
         $i= 0;
         foreach ($_SESSION['mycart'] as $key => $row) {
             $anh_sanpham = "uploads/".$row['anh_sanpham'];
             $thanh_tien = $row['gia'] * $row['soluong'];
             $tongtien += $thanh_tien;
            //  $soluong += $row['soluong'];
        // foreach ($_SESSION['mycart'] as $cart) {
        //     $anh_sanpham = "uploads/".$_SESSION['mycart']['anh_sanpham'];
        //     $ttien = $cart[3] * $cart[4];
        //     $tong+=$ttien;
            $delcart = "index.php?act=xoacart&idcart=".$i;
        echo '<tr>
            <td>'.$key+1 .'</td>
            <td>'.$row['ten_sanpham'].'</td>
            <td><img src="'.$anh_sanpham.'" height="80px"></td>
            <td> <span>'.number_format($row['gia']).' đ</span></td>
            <form action="index.php?act=updatecart" method="post">
                <input type="hidden" name="productId[]" value="'.$row['id_sanpham'].'">
                <td><input type="number" min="1" name="productSlUpdate[]"  value="'.$row['soluong'].'" class=" h-full text-center py-1 " id="quantity_'.$row['id_sanpham'].'"
                oninput="updateQuantity('.$row['id_sanpham'],$i.')"></td>
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
          </tr>';
    }
?> -->