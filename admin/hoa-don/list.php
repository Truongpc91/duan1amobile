<div class="row">
<div class="container">
    <div class="page-title">
        <h4 class="mt-5 font-weight-bold text-center">DANH SÁCH HÓA ĐƠN</h4>
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
                            $checktrangthai = "Đang xử lí";
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
                        <td><?= $tong_gia ?></td>
                        <td><?= $checkpttt ?></td>
                        <td><?= $checktrangthai ?></td>
                        <td><?= $ngay_dat_hang ?></td>
                        <td class="text-end">
                                    <a href="index.php?act=updatehoadon" class="btn btn-outline-info btn-rounded"><i
                                            class="fas fa-pen"></i></a>
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