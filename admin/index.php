<?php
    session_start();
    include '../dao/pdo.php';
    include 'header.php';
    include '../dao/danh-muc.php';
    include '../dao/san-pham.php';
    include '../dao/user.php';
    include '../dao/thong-ke.php';
    include '../dao/binh-luan.php';
    include '../dao/hoa-don.php';

    require '../carbon/autoload.php';

    use Carbon\Carbon;
    use Carbon\CarbonInterval;
   
    //controler 

    if(isset($_GET['act'])) {
        $act = $_GET['act'];
       switch ($act) {

        case 'dangxuat':
            session_unset();
            echo "<script>
                alert('Đăng Xuất Thành Công!!!'); 
                location.href='http://localhost:/duan1amobile';
                </script>";
            break;
            break;

        case 'trangchu':
            $countdm = count(danh_muc_select_all());
            $countsanpham = count(san_pham_select_all());
            $countuser = count(user_select_all());
            $countbinhluan = count(binh_luan_select_all());

            include 'trang-chinh.php';
            break;
        //DANH MỤC
        case 'adddm':
            //kiểm tra xem người dùng có nhấm add hay không 
            if(isset($_POST['add']) && ($_POST['add'])) {
                $ten_dm = $_POST['ten_dm'];
                danh_muc_insert($ten_dm);
                echo "<script>
                alert('Thêm Danh Mục Thành Công!!!'); 
                location.href='http://localhost/duan1amobile/admin/index.php?act=listdanhmuc';
                </script>";
            }
            include 'danh-muc/add.php';
            break;

        case 'listdanhmuc':
            $listdanhmuc = danh_muc_select_all();
            include 'danh-muc/list.php';
            break;
           
        case 'xoadanhmuc':
            if(isset($_GET['id']) && ($_GET['id'])>0 ) {
                danh_muc_delete($_GET['id']);
                echo "<script>
                alert('Xóa Danh Mục Thành Công!!!'); 
                location.href='http://localhost/duan1amobile/admin/index.php?act=listdanhmuc';
                </script>";
            }
            $listdanhmuc = danh_muc_select_all();
            include 'danh-muc/list.php';
            break;
        
        case 'suadanhmuc' :
            if(isset($_GET['id']) && ($_GET['id'])>0 ) {
               
                $danhmuc = danh_muc_select_by_id($_GET['id']);
            }
            include 'danh-muc/update.php';
            break;

        case 'updatedanhmuc' :
            if(isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $ten_dm = $_POST['ten_dm'];
                $id = $_POST['id'];
                danh_muc_update($id, $ten_dm);
                echo "<script>
                alert('Cập Nhật Danh Mục Thành Công!!!'); 
                location.href='http://localhost/duan1amobile/admin/index.php?act=listdanhmuc';
                </script>";
            }
            $listdanhmuc =  danh_muc_select_all();
            include 'danh-muc/list.php';
            break;
        

        //SẢN PHẨM

         case 'addsanpham':
            if(isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $id_dm = $_POST['id_dm'];
                $ten_sanpham = $_POST['ten_sanpham'];
                $gia = $_POST['gia'];
                $color = $_POST['color'];
                $dung_luong = $_POST['dung_luong'];
                $noi_dung = $_POST['noi_dung'];
                $anh_sanpham = $_FILES['anh_sanpham']['name'];
                $target_dir = "../uploads/";
                $target_file = $target_dir . basename($_FILES['anh_sanpham']['name']);
                if (move_uploaded_file($_FILES["anh_sanpham"]["tmp_name"], $target_file)) {
                   // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                } else {
                   // echo "Sorry, there was an error uploading your file.";
                }
                san_pham_insert($ten_sanpham, $gia, $anh_sanpham, $color, $dung_luong, $noi_dung, $id_dm);
                echo "<script>
                alert('Thêm Sản Phẩm Thành Công!!!'); 
                location.href='http://localhost/duan1amobile/admin/index.php?act=listsanpham';
                </script>";
            }
            $listdanhmuc = danh_muc_select_all();
            include 'san-pham/add.php';
            break;

        case 'listsanpham':
            if(isset($_POST['listok']) && ($_POST['listok'])) {
                $keyword = $_POST['keyword'];
                $id_dm = $_POST['id_dm'];
            }
            else {
                $keyword = '';
                $id_dm = 0;
            }
            $listdanhmuc = danh_muc_select_all();
            $listsanpham = san_pham_select_all($keyword,$id_dm);
            include 'san-pham/list.php';
            break;

        case 'suasanpham' :
            if(isset($_GET['id']) && ($_GET['id'])>0 ) {
                   
                $sanpham = san_pham_select_by_id($_GET['id']);
            }
            $listdanhmuc = danh_muc_select_all();
            include 'san-pham/update.php';
            break;
    
        case 'updatesanpham' :
            if(isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id_sanpham = $_POST['id'];
                $id_dm = $_POST['id_dm'];
                $ten_sanpham = $_POST['ten_sanpham'];
                $gia = $_POST['gia'];
                $so_luong = $_POST['so_luong'];
                $dung_luong = $_POST['dung_luong'];
                $noi_dung = $_POST['noi_dung'];
                $anh_sanpham = $_FILES['anh_sanpham']['name'];
                $target_dir = "../uploads/";
                $target_file = $target_dir . basename($_FILES['anh_sanpham']['name']);
                if (move_uploaded_file($_FILES["anh_sanpham"]["tmp_name"], $target_file)) {
                   // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                } else {
                   // echo "Sorry, there was an error uploading your file.";
                }
                san_pham_update($id_sanpham, $ten_sanpham, $gia, $anh_sanpham, $so_luong, $dung_luong, $noi_dung, $id_dm);
                echo "<script>
                alert('Sửa Sản Phẩm Thành Công!!!'); 
                location.href='http://localhost/duan1amobile/admin/index.php?act=listsanpham';
                </script>";
            }
            $listdanhmuc = danh_muc_select_all();
            $listsanpham = san_pham_select_all();
            include 'san-pham/list.php';
            break;

        case 'xoasanpham': 
            if(isset($_GET['id']) && ($_GET['id'])>0 ) {
                san_pham_delete($_GET['id']);
                echo "<script>
                alert('Xóa Sản Phẩm Thành Công!!!'); 
                </script>";
            }
            $listsanpham = san_pham_select_all("",0);
            include 'san-pham/list.php';
            break;

        case 'listuser':
            $listuser = user_select_all();
            include 'user/list.php';
            break;
        
        case 'listbinhluan' :
            $listbinhluan = thong_ke_binh_luan();
            include 'binh-luan/list.php';
            break;
        case 'listblct' :
            if(isset($_GET['id_sanpham'])){
                $listbinhluanct = binh_luan_select_by_san_pham($_GET['id_sanpham']);
            }
            include 'binh-luan/list-chi-tiet.php';
            break;
            
        case 'xoabinhluan' :
            if(isset($_GET['id_binh_luan'])){
                binh_luan_delete($_GET['id_binh_luan']);
                echo "<script>
                alert('Đã Xóa Thành Công!!!'); 
                location.href='http://localhost/duan1amobile/admin/index.php?act=listbinhluan';
                </script>";
            }
            $listbinhluan = thong_ke_binh_luan();
            include 'binh-luan/list.php';
            break;

        case 'listhoadon' :
            $listhoadon = hoa_don_select_all();
            include 'hoa-don/list.php';
            break;

        case 'suahoadon' :
            if(isset($_GET['idhoadon']) && ($_GET['idhoadon'])>0 ){
                $id_hoa_don = $_GET['idhoadon'];
                $trangthai = 1;
                update_hoa_don($id_hoa_don, $trangthai);
                echo "<script>
                alert('Cập nhật hóa đơn thành công!!!'); 
                location.href='http://localhost/duan1amobile/admin/index.php?act=listhoadon';
                </script>";
                // $hoadon = hoa_don_select_by_id($_GET['idhoadon']);
                // foreach($hoadon as $dh) {
                //     // var_dump($dh);
                // }
                // extract($hoadon);
                
            }
            include 'hoa-don/list.php';
            break;
            
        case 'updatehoadon' :
            if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                $id_hoa_don = $_POST['idhoadon'];
                $trangthai = $_POST['trangthai'];
                $ngay_dat_hang = $_POST['ngay_dat_hang'];
                $tong_gia = $_POST['tong_gia'];
                $don_hang = 0;
                $so_luong_ban = 60;
                update_hoa_don($id_hoa_don, $trangthai);

                $listngaydat = select_tbl_thongke_by_ngay_dat($ngay_dat_hang);
                
                foreach($listngaydat as $key) {
                    $countdoanhthu;
                    if($ngay_dat_hang != $key['ngay_dat_hang']){
                        $don_hang+=1;
                        insert_tbl_thongke($ngay_dat_hang,$don_hang, $tong_gia, $so_luong_ban);
                    }else{
                        $countdoanhthu+=$tong_gia;
                        update_tbl_thongke($ngay_dat_hang,$don_hang, $countdoanhthu, $so_luong_ban);
                    }
                }
                

                // var_dump($listngaydat);
                echo "<script>
                alert('Cập nhật hóa đơn thành công!!!'); 
                location.href='http://localhost/duan1amobile/admin/index.php?act=listhoadon';
                </script>";
            }
            include 'hoa-don/list.php';
            break;

            case 'huyhoadon' :
                if(isset($_GET['idhoadon']) && ($_GET['idhoadon'])>0 ){
                    $id = $_GET['idhoadon'];
                    $listcart = cart_select_by_id($id);
                    // var_dump($listcart);
                    // echo "<br>";
                    foreach($listcart as $cart){
                        $sanpham = san_pham_select_by_id($cart['id_sanpham']);
                        extract($sanpham);
                        // var_dump($sanpham);
                        $slupdate = $sanpham['so_luong'] + $cart['so_luong'];
                        // echo "<br>";
                        // echo $slupdate;
                        update_soluong_sanpham($cart['id_sanpham'],$slupdate);
                    }
                   
                    cart_delete_id_hoa_don($id);
                    hoa_don_delete_id_hoa_don($id);
                    echo "<script>
                    alert('Đã duyệt xóa hóa đơn!!!'); 
                    location.href='http://localhost/duan1amobile/admin/index.php?act=listhoadon';
                    // </script>";
                    
                    
                }
                // include 'footer.php';
                include 'hoa-don/list.php';
                break;
        case 'thongke' :
            $thu = cart_select_all();
            $listthongke = thong_ke_san_pham();
            include 'thong-ke/list.php';
            break;
       
       case 'bieudo' :
            $listthongke = thong_ke_san_pham();
            include 'thong-ke/bieu-do.php';
            break;

        case 'thongkethunhap' :
            // $subdays = Carbon::now('Asia/Ho_Chi_Minh')->subdays(365)->toDateString();
            $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
            if(isset($_POST['search']) && $_POST['search']){
                $date = $_POST['date'];
                if($date == '7ngay'){
                     $subdays = Carbon::now('Asia/Ho_Chi_Minh')->subdays(7)->toDateString();
                     $val = thong_ke_theo_nam($subdays, $now);
                     $text='7 ngày qua';
                }else if($date == '30ngay'){
                    $subdays = Carbon::now('Asia/Ho_Chi_Minh')->subdays(30)->toDateString();
                    $val = thong_ke_theo_nam($subdays, $now);
                    $text='30 ngày qua';
                }else if($date == '90ngay'){
                    $subdays = Carbon::now('Asia/Ho_Chi_Minh')->subdays(90)->toDateString();
                    $val = thong_ke_theo_nam($subdays, $now);
                    $text='90 ngày qua';
                }else{
                    $subdays = Carbon::now('Asia/Ho_Chi_Minh')->subdays(365)->toDateString();
                    $val = thong_ke_theo_nam($subdays, $now);
                    $text='365 ngày qua';
                }
            }
            $text;
            include 'thong-ke/thong-ke-thu-nhap.php';
            break;
       } 
    }else {
            include 'home.php';
        }
        
        include 'footer.php';

?>