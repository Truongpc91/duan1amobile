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
    style="margin-top: 5rem; margin-bottom: 0rem">Thông tin nhận hàng </h5>
<div class="row m-1 pb-5">
    <form action="" method="POST" class="col-6 m-auto" id="invoice"
        enctype="multipart/form-data">
        <div class="form-group form">
            <label for="">Họ và tên</label>
            <input type="text" name="ten_user" id="" class="form-control rounded-pill" value="<?= $ten_user ?>"
                aria-describedby="helpId">
        </div>
        <div class="form-group">
            <!-- <label for="">Tên đăng nhập</label> -->
            <input type="hidden" name="ten_dang_nhap" id="" class="form-control rounded-pill" value="<?= $ten_dang_nhap ?>"
                aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">Địa chỉ email</label>
            <input type="text" name="email" id="" class="form-control rounded-pill" value="<?= $email ?>"
                aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">Số điện thoại</label>
            <input type="text" name="so_dien_thoai" id="" class="form-control rounded-pill" placeholder="" value="<?=$so_dien_thoai ?>"
                aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">Địa chỉ nhận hàng</label>
            <input type="text" name="dia_chi" id="" class="form-control rounded-pill" placeholder="" <?=$dia_chi ?>
                aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">Phương thức thanh toán </label>
            <br>
            <input type="radio" name="phuong_thuc_tt" id="" value="0" checked placeholder="" aria-describedby="helpId">
            Tiền mặt
            <input type="radio" name="phuong_thuc_tt" id="" value="1" placeholder="" aria-describedby="helpId"> Chuyển
            khoản ngân hàng
            <input type="radio" name="phuong_thuc_tt" id="" value="2" placeholder="" aria-describedby="helpId"> Ví điện
            tử
        </div>
        <input type="hidden" name="trang_thai" value="0">
        <div class="form-group">
            <label for="">Ghi chú</label>
            <textarea name="ghi_chu" class="form-control" id=""></textarea>
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" name="dat_hang" class="btn btn-success btn-block pt-2 pb-2 rounded-pill">Xác nhận</button>
        </div>
    </form>

</div>