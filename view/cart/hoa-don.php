<?php
    if(isset($_SESSION['user'])){
       $ten_user = $_SESSION['user']['ten_user'];
       $ten_dang_nhap = $_SESSION['user']['ten_dang_nhap'];
       $email = $_SESSION['user']['email'];
       $so_dien_thoai = $_SESSION['user']['so_dien_thoai'];
       $dia_chi = $_SESSION['user']['dia_chi'];
    }else{
        $ten_user = "";
        $ten_dang_nhap = "";
        $email = "";
        $so_dien_thoai = "";
        $dia_chi = "";
    }
?>
<h5 class="alert-secondary mb-3 pt-3 pb-3 pl-sm-4 shadow-sm text-center text-sm-center text-md-center text-lg-center text-xl-center"
    style="margin-top: 5rem; margin-bottom: 0rem">Thông tin nhận hàng</h5>
<form action="index.php?act=confirmhoadon" method="POST" class="col-9 m-auto"><br>
<div class="form-group form">
            <label for="">Tên Hóa Đơn</label>
            <input type="text" name="ten_bill" id="" class="form-control rounded-pill" 
                aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">Địa chỉ email</label>
            <input type="text" name="bill_email" id="" class="form-control rounded-pill" value="<?=$email?>"
                aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">Số điện thoại</label>
            <input type="text" name="so_dien_thoai_bill" id="" class="form-control rounded-pill" placeholder="" value="<?=$so_dien_thoai?>"
                aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">Địa chỉ nhận hàng</label>
            <input type="text" name="dia_chi_bill" id="" class="form-control rounded-pill" placeholder="" <?=$dia_chi?>
                aria-describedby="helpId">
        </div>
    <label for="">Phương thức thanh toán </label>
            <br>
            <input type="radio" name="phuong_thuc_tt" id="" value="0" checked placeholder="" aria-describedby="helpId"> Tiền mặt
            <input type="radio" name="phuong_thuc_tt" id="" value="1" placeholder="" aria-describedby="helpId"> Chuyển khoản ngân hàng
            <input type="radio" name="phuong_thuc_tt" id="" value="2" placeholder="" aria-describedby="helpId"> Ví điện tử
<div class="row m-1 pb-5">
    <table class="table table-responsive-md">
            <thead class="thead text-center">
                <tr>
                    <th>Tên Sản Phẩm</th>
                    <th>Ảnh</th>
                    <th>Giá</th>
                    <th style="width:6rem">Số lượng</th>
                    <th>Thành tiền</th>
                </tr>
            </thead>
            <tbody class="text-center" id="giohang">
                <?php 
                     $tongtien = 0;
                     foreach ($_SESSION['mycart'] as $row) {
                         $anh_sanpham = "uploads/".$row['anh_sanpham'];
                         $thanh_tien = $row['gia'] * $row['soluong'];
                         $tongtien += $thanh_tien;
                    echo '<tr>
                        <td>'.$row['ten_sanpham'].'</td>
                        <td><img src="'.$anh_sanpham.'" height="80px"></td>
                        <td> <span>'.number_format($row['gia']).' đ</span></td>
                        <td> <span>'.$row['soluong'].'</span></td>
                        <td>'.number_format($thanh_tien).' đ</td>
                    </tr>';
                        
                    }
                echo '<tr class="text-center">
                        <th colspan="4">Tổng thành tiền: </th>
                        <td class=" text-danger font-weight-bold"><span id="tong_thanh_tien">'.number_format($tongtien).' đ</span></td>
                      </tr>'
                ?>
            </tbody>
        </table>
    </div>
    <input type="submit" name="dongydathang" value="Xác nhận" class="btn btn-success btn-block pt-2 pb-2 rounded-pill">
</form>
