<?php

    require_once 'pdo.php';

    function thong_ke_san_pham(){
        $sql = "SELECT lo.id_dm, lo.ten_dm,"
            . " COUNT(*) so_luong,"
            . " MIN(hh.gia) gia_min,"
            . " MAX(hh.gia) gia_max,"
            . " AVG(hh.gia) gia_avg"
            . " FROM san_pham hh "
            . " JOIN danh_muc lo ON lo.id_dm=hh.id_dm "
            . " GROUP BY lo.id_dm, lo.ten_dm";
        return pdo_query($sql);
    }

    function thong_ke_binh_luan(){
        $sql = "SELECT hh.id_sanpham, hh.ten_sanpham,"
            . " COUNT(*) so_luong,"
            . " MIN(bl.ngay_binh_luan) cu_nhat,"
            . " MAX(bl.ngay_binh_luan) moi_nhat"
            . " FROM binh_luan bl "
            . " JOIN san_pham hh ON hh.id_sanpham=bl.id_sanpham "
            . " GROUP BY hh.id_sanpham, hh.ten_sanpham"
            . " HAVING so_luong > 0";
        return pdo_query($sql);
    }

    function thong_ke_gia_theo_sp(){
        $sql = "SELECT Count(tong_tien) from cart";
        return pdo_query_one($sql);
       
    }

    function thong_ke_thu_nhap(){
        $sql = "SELECT sum(tong_tien) from cart";
        return pdo_query($sql);
    }

    // function thong_ke_thu_nhap_theo_san_pham(){
    //     $sql = "SELECT sum(tong_tien) from cart WHERE id_sanpham='$id_sanpham'";
    //     return pdo_query($sql);
    // }

    function thong_ke_thu_nhap_theo_san_pham(){
        $sql = "SELECT lo.id_sanpham, lo.tong_tien,"
            . " COUNT(*) so_luong,"
            . " Cout(hh.tong_tien) tong_tien,"
            . " FROM san_pham hh"
            . " JOIN cart lo ON lo.id_sanpham=hh.id_sanpham"
            . " GROUP BY lo.id_sanpham, lo.tong_tien";
        return pdo_query($sql);
    }


    function thong_ke_theo_nam($subdays, $now){
        $sql = "SELECT * FROM tbl_thongke WHERE ngay_dat_hang BETWEEN '$subdays' AND '$now' ORDER BY ngay_dat_hang ASC";
        // $sql = "SELECT * FROM tbl_thongke";
        return pdo_query($sql);
    }


    function select_tbl_thongke_by_ngay_dat($ngay_dat_hang){
        $sql = "SELECT * FROM tbl_thongke WHERE ngay_dat_hang='$ngay_dat_hang'";
        return pdo_query($sql);
    }

    function insert_tbl_thongke($ngay_dat_hang,$don_hang, $doanh_thu, $so_luong_ban){
        $sql = "INSERT INTO tbl_thongke(ngay_dat_hang, don_hang, doanh_thu, so_luong_ban) VALUES('$ngay_dat_hang','$don_hang', '$doanh_thu', '$so_luong_ban')";
        pdo_execute($sql);
    }

    function update_tbl_thongke($ngay_dat_hang,$don_hang, $doanh_thu, $so_luong_ban){
        $sql = "UPDATE tbl_thongke SET  don_hang='$don_hang', doanh_thu = '$doanh_thu', so_luong_ban = '$so_luong_ban' WHERE ngay_dat_hang = '$ngay_dat_hang'"; 
        pdo_execute($sql);
    }
?>