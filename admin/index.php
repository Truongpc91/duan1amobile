<?php
    session_start();
    include '../dao/pdo.php';
    include 'header.php';
    include '../dao/danh-muc.php';
    include '../dao/hang-hoa.php';
    include '../dao/khach-hang.php';
    include '../dao/thong-ke.php';
    include '../dao/binh-luan.php';

    //controler 

    if(isset($_GET['act'])) {
        $act = $_GET['act'];
       switch ($act) {
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
        }
    }else {
            include 'home.php';
        }
        
        include 'footer.php';

?>