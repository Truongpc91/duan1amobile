<h5 class="alert-secondary mb-3 pt-3 pb-3 pl-sm-4 shadow-sm text-center text-sm-center text-md-center text-lg-center text-xl-center"
    style="margin-top: 5rem; margin-bottom: 0rem">CẢM ƠN QUÝ KHÁCH</h5>

<?php
    if(isset($hoadon) && (is_array($hoadon))) {
        extract($hoadon);
        $checkpttt;
        if($pttt == 0) {
            $checkpttt = "Tiền mặt";
        }else if($pttt == 1){
            $checkpttt = "Chuyển khoản";
        }else if($pttt == 2){
            $checkpttt = "Chuyển khoản";
        }else{
            $checkpttt ="sss";
        }
    }
?>
<div class="card-hoa-don">
            <div class="card-body text-center">
                <h5 class="alert-info mb-3 pt-3 pb-3 pl-sm-4 shadow-sm text-center" style="margin-top: 5rem; margin-bottom: 0rem">MÃ ĐƠN HÀNG: <?=$ten_bill?><?=$id_hoa_don?></h5>
                    <div class="product-price">
                        <div class="col d-flex justify-content-center align-items-center">
                        <label class="text-danger font-weight-bold">Tổng giá :</label>
                            <p ><?= number_format($tong_gia, 0, ',') ?>đ</p>
                        </div>
                        <div class="col d-flex justify-content-center align-items-center">
                        <label class="text-danger font-weight-bold">Địa chỉ: </label>
                            <p><?=$dia_chi_bill?></p>
                        </div>
                        <div class="col d-flex justify-content-center align-items-center">
                        <label class="text-danger font-weight-bold">Số điện thoại: </label>
                            <p><?=$so_dien_thoai_bill?></p>
                        </div>
                        <div class="col d-flex justify-content-center align-items-center">
                        <label class="text-danger font-weight-bold">Phương thức thanh toán: </label>
                            <p ><?=$checkpttt?></p>
                        </div>
                    </div>
                    <div class="product_rassurance">
                        <ul class="list-inline">
                            <li class="list-inline-item"><i class="fa fa-truck fa-2x"></i><br />Giao hàng tận nơi</li>
                            <li class="list-inline-item"><i class="fa fa-credit-card fa-2x"></i><br />Bảo mật</li>
                            <li class="list-inline-item"><i class="fa fa-phone fa-2x"></i><br />0384196190</li>
                        </ul>
                    </div><br>
                    <?php
                        if($pttt == 2) { ?>
                                <div class="row m-1 pb-5">
                                    <form method="POST" target="_black" enctype="application/x-www-form-urlencoded"
                                                            action="view/cart/xulythanhtoanmomo.php" class="col-9 m-auto">
                                                <input type="submit" name="momo" value="Thanh toán MOMO ATM" class="btn btn-danger">
                                                <input type="hidden" name="tong_tien" value="<?=$tong_tien?>">
                                    </form>
                                </div>
                            <?php  }
                    ?>
                    <div class="row  m-1 pb-5">
                        <a class="btn btn-outline-dark col-12" href="index.php">Xác Nhận</a>
                    </div>
                </div>
</div>
            
<style>
   .card-hoa-don{
        border:2px solid black;
        text-align:center;
   } 
</style>
