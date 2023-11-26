<?php
    require_once 'pdo.php';


    function hoa_don_select_all(){
        $sql = "SELECT * FROM hoa_don";
        return pdo_query($sql);
    }

    // function hoa_don_select_by_id($id_hoa_don){
    //     $sql = "SELECT * FROM hoa_don WHERE id_hoa_don='$id_hoa_don'";
    //     return pdo_query_one($sql);
    // }

    function hoa_don_select_by_id_user($bill_email){
        $sql = "SELECT * FROM hoa_don WHERE bill_email='$bill_email'";
        return pdo_query_one($sql);
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
?>