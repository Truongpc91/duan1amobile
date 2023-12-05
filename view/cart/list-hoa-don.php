<h5 class="alert-info mb-3 pt-3 pb-3 pl-sm-4 shadow-sm text-center" style="margin-top: 5rem; margin-bottom: 0rem">Danh sách đơn hàng</h5>
<div class="col-9 m-auto">
        <table class="table table-responsive-md">
            <thead class="thead text-center">
                <tr>
                    <th>STT</th>
                    <th>Tên Hóa Đơn</th>
                    <th>Địa chỉ</th>
                    <th>PTTT</th>
                    <th>Trạng Thái</th>
                    <th>Thành tiền</th>
                    <th>Ngày đặt</th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="text-center" id="giohang">
                <?php 
                $stt=1;
                    foreach($listhoadon as $hoadon) {
                        extract($hoadon);
                        $checkpttt;
                        $checktrangthai;
                        if($pttt == 0){
                            $checkpttt = "Tiền mặt";
                        }else{
                            $checkpttt = "Chuyển khoản";
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
                    echo '<tr>
                        <td>'.$stt++.'</td>
                        <td>'.$ten_bill.'</td>
                        <td> <span>'.$dia_chi_bill.'</span></td>
                        <td> <span>'.$checkpttt.'</span></td>
                        <td> <span>'.$checktrangthai.'</span></td>
                        <td> <span>'.number_format($tong_gia).'</span></td>
                        <td> <span>'.$ngay_dat_hang.'</span></td>
                        <td>
                            <form method="POST" action="index.php?act=xemchitiethoadon">
                                <input type="hidden" name="id" value="'.$id_hoa_don.'">
                                <input type="hidden" name="name_bill" value="'.$ten_bill.'">
                                <input type="submit" name="hoadon" value="Chi tiết" class="btn btn-success text-white">
                            </form>
                        </td>
                    </tr>';
                    }
                ?>

            </tbody>
        </table>
        <div class="row  m-1 pb-5">
            <a class="btn btn-outline-dark col-12" href="index.php"> Về trang chủ</a>
        </div>
    </div>