<?php
    require_once 'pdo.php';


    function hoa_don_select_all(){
        $sql = "SELECT * FROM hoa_don order by ngay_dat_hang DESC";
        return pdo_query($sql);
    }

    function hoa_don_select_by_id($id_hoa_don){
        $sql = "SELECT * FROM hoa_don WHERE id_hoa_don = '$id_hoa_don'";
        return pdo_query_one($sql);
    }

    function update_hoa_don($id_hoa_don, $trang_thai){
        $sql = "UPDATE hoa_don SET trang_thai='".$trang_thai."' WHERE id_hoa_don=".$id_hoa_don; 
        pdo_execute($sql);
    }

    // function hoa_don_select_by_id($id_hoa_don){
    //     $sql = "SELECT * FROM hoa_don WHERE id_hoa_don='$id_hoa_don'";
    //     return pdo_query_one($sql);
    // }

    function hoa_don_select_by_id_user($ten_dang_nhap){
        $sql = "SELECT * FROM hoa_don WHERE ten_dang_nhap='$ten_dang_nhap'";
        return pdo_query($sql);
    }

    function hoa_don_delete($id_hoa_don){
        $sql = "DELETE FROM hoa_don  WHERE id_hoa_don=$id_hoa_don";
        if(is_array($ten_dang_nhap)){
            foreach ($id_hoa_don as $ma) {
                pdo_execute($sql, $ma);
            }
        }
        else{
            pdo_execute($sql, $id_hoa_don);
        }
    }

    function cart_select_by_id($id_hoa_don){
        $sql = "SELECT * FROM cart WHERE id_hoa_don='$id_hoa_don'";
        return pdo_query($sql);
    }

    function cart_select_all(){
        $sql = "SELECT sum(tong_tien) FROM cart";
        return pdo_query($sql);
    }
?>