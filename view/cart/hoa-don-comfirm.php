<h5 class="alert-secondary mb-3 pt-3 pb-3 pl-sm-4 shadow-sm text-center text-sm-center text-md-center text-lg-center text-xl-center"
    style="margin-top: 5rem; margin-bottom: 0rem">CẢM ƠN QUÝ KHÁCH</h5>

<?php
    if(isset($hoadon) && (is_array($hoadon))) {
        extract($hoadon);
    }
?>
<h5 class="alert-info mb-3 pt-3 pb-3 pl-sm-4 shadow-sm text-center" style="margin-top: 5rem; margin-bottom: 0rem">MÃ ĐƠN HÀNG: <?=$ten_bill?><?=$id_hoa_don?></h5>