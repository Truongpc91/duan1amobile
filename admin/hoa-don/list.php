<div class="rows">
<div class="container">
    <div class="page-title">
        <h3 class="card-header text-center bg-dark text-white">DANH SÁCH HÓA ĐƠN</h3>
    </div>
    <div class="box box-primary">
        <div class="box-body">
            <table width="100%" class="table table-hover table-bordered text-center">
                <thead class="thead-dark">
                    <tr>
                        <th>MÃ ĐƠN HÀNG</th>
                        <th>TÊN ĐƠN HÀNG</th>
                        <th>EMAIL</th>
                        <th>SỐ ĐIỆN THOẠI</th>
                        <th>ĐỊA CHỈ</th>
                        <th>TỔNG GIÁ</th>
                        <th>PHƯƠNG THỨC THANH TOÁN</th>
                        <th>TRẠNG THÁI</th>
                        <th>NGÀY ĐẶT</th>
                        <th>Chỉnh sửa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    foreach ($listhoadon as $hoadon) {
                        extract($hoadon);
                        $suahoadon = "index.php?act=suahoadon&idhoadon=".$id_hoa_don;
                        $checkpttt;
                        $checktrangthai;
                        if($pttt == 1) {
                            $checkpttt = "Tiền mặt";
                        }else if($pttt == 2){
                            $checkpttt = "Chuyển khoản";
                        }else if($pttt == 3){
                            $checkpttt = "Chuyển khoản";
                        }else{
                            $checkpttt ="sss";
                        }

                        if($trang_thai == 0){
                            $checktrangthai = "Đơn hàng mới";
                        }else if($trang_thai == 1) {
                            $checktrangthai = "Đã Xác nhận";
                        }else if($trang_thai == 2) {
                            $checktrangthai = "Đang giao";
                        }else{
                            $checktrangthai = "Đã giao";
                        }
                    ?>
                    <tr>
                        <td><?= $id_hoa_don ?></td>
                        <td><?= $ten_bill ?></td>
                        <td><?= $bill_email ?></td>
                        <td><?= $so_dien_thoai_bill ?></td>
                        <td><?= $dia_chi_bill ?></td>
                        <td><?= number_format($tong_gia) ?></td>
                        <td><?= $checkpttt ?></td>
                        <td><?= $checktrangthai ?></td>
                        <td><?= $ngay_dat_hang ?></td>
                        <td >
                            <?php if($pttt == 2 && $trang_thai == 0){ ?>
                                <a href="<?= $suahoadon ?>" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                            <?php }?>
                        </td>
                    </tr>
                    <?php
                    }

                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>