<?php
    session_start();
    include '../dao/pdo.php';
    include 'header.php';
    include '../dao/danh-muc.php';
    include '../dao/san-pham.php';
    include '../dao/user.php';
    include '../dao/thong-ke.php';
    include '../dao/binh-luan.php';

    //controler 

    if(isset($_GET['act'])) {
        $act = $_GET['act'];
       switch ($act) {

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
                san_pham_update($id_sanpham, $ten_sanpham, $gia, $anh_sanpham, $color, $dung_luong, $noi_dung, $id_dm);
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
        }

    }else {
            include 'home.php';
        }
        
        include 'footer.php';

?>