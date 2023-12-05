<?php
    extract($hoadon);
    $checktrangthai;
    if($trang_thai == 0){
        $checktrangthai = "Đơn hàng mới";
    }else if($trang_thai == 1) {
        $checktrangthai = "Đang xử lí";
    }else if($trang_thai == 2) {
        $checktrangthai = "Đang giao";
    }else{
        $checktrangthai = "Đã giao";
    }

?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header text-center bg-dark text-white text-uppercase">Xác nhận hóa đơn</div>
            <div class="card-body">
                <form action="index.php?act=updatehoadon" method="POST" id="edit_loai">
                    <label for="id_dm" class="form-label">Trạng thái đơn hàng:</label>
                    <!-- <input type="text" name="ngay_dat_hang" value="<?= $ngay_dat_hang ?>"> -->
                    <select name="trangthai" class="form-select">
                        <option value="0" >Đơn hàng mới</option>
                        <option value="1" >Xác nhận</option>
                            
                    </select><br>
                    <div class="mb-3 text-center">
                        <input type="hidden" name="ngay_dat_hang" value="<?= $ngay_dat_hang ?>">
                        <input type="hidden" name="tong_gia" value="<?= $tong_gia ?>">
                        <input type="hidden" name="idhoadon" value="<?= $id_hoa_don ?>">
                        <input type="reset" value="NHẬP LẠI" class="btn btn-danger mr-3">
                        <input type="submit" name="capnhat" value="CẬP NHẬT" class="btn btn-primary mr-3">
                        <a href="index.php?act=listhoadon"><input type="button" class="btn btn-success" value="Danh sách"></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>