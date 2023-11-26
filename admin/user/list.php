<div class ="row">
<div class="container">
    <div class="page-title">
      <div class="card-header text-center bg-dark text-white ">DANH SÁCH KHÁCH HÀNG</div>
    </div>
    <div class="box box-primary">
        <div class="box-body">
            <form action="?btn_delete_all" method="post" class="table-responsive">
                <table width="100%" class="table table-hover table-bordered text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th>Tên Đăng Nhập</th>
                            <th>Họ và tên</th>
                            <th>Ảnh</th>
                            <th>Địa chỉ email</th>
                            <th>Số điện thoại</th>
                            <th>Địa chỉ</th>
                            <th>Vai trò</th>
                            <th>Kích hoạt</th>
                            <th><a href="index.php?act=addkhachhang" class="btn btn-success text-white">Thêm mới
                                    <i class="fas fa-plus-circle"></i></a></th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php 
                        foreach ($listuser as $user) {
                            extract($user);
                            $suauser = "index.php?act=suauser&id=".$ten_dang_nhap;
                            $hinhpath = "../uploads/".$anh_user;
                            if(is_file($hinhpath)) {
                                $anh_user = "<img src='".$hinhpath."' height='80'>";
                            }else {
                                $anh_user = "no photo";
                            }
                            $checkvaitro;
                            $checkkichhoat;
                            //Kiểm tra vai trò
                            if ($vai_tro == 0){
                                $checkvaitro = "Quản trị";
                            }else {
                                $checkvaitro =  "Khách hàng";
                            }
                            //Kiểm tra kích hoạt
                            if ($kich_hoat == 1){
                                $checkkichhoat = "Rồi";
                            }else {
                                $checkkichhoat =  "Chưa";
                            }
                            echo '<tr>
                                <td>'.$ten_dang_nhap.'</td>
                                <td>'.$ten_user.'</td>
                                <td>'.$anh_user.'</td>
                                <td>'.$email.'</td>
                                <td>'.$so_dien_thoai.'</td>
                                <td>'.$dia_chi.'</td>
                                <td>'.$checkvaitro.'</td>
                                <td>'.$checkkichhoat.'</td>
                                <td class="text-end">
                                    <a href="'.$suauser.'" class="btn btn-outline-info btn-rounded"><i
                                            class="fas fa-pen"></i></a>
                                </td>
                                </tr>';
                        } ?>
                    </tbody>

                </table>
            </form>
        </div>
    </div>
</div>
</div>