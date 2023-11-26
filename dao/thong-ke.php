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

?>