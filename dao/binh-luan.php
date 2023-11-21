<?php
require_once 'pdo.php';

function binh_luan_insert($ten_dang_nhap, $id_sanpham, $noi_dung, $ngay_binh_luan){
    $sql = "INSERT INTO binh_luan(ten_dang_nhap, id_sanpham, noi_dung, ngay_binh_luan) VALUES ('$ten_dang_nhap','$id_sanpham','$noi_dung','$ngay_binh_luan')";
    pdo_execute($sql);
}

function binh_luan_update($ma_bl, $ma_kh, $ma_hh, $noi_dung, $ngay_bl){
    $sql = "UPDATE binh_luan SET ma_kh=?,ma_hh=?,noi_dung=?,ngay_bl=? WHERE ma_bl=?";
    pdo_execute($sql, $ma_kh, $ma_hh, $noi_dung, $ngay_bl, $ma_bl);
}

function binh_luan_delete($id_binh_luan){
    $sql = "DELETE FROM binh_luan WHERE id_binh_luan='$id_binh_luan'";
    if(is_array($id_binh_luan)){
        foreach ($id_binh_luan as $id) {
            pdo_execute($sql, $id);
        }
    }
    else{
        pdo_execute($sql);
    }
}

function binh_luan_select_all(){
    $sql = "SELECT * FROM binh_luan bl ORDER BY ngay_binh_luan DESC";
    return pdo_query($sql);
}

function binh_luan_select_by_id($id_binh_luan){
    $sql = "SELECT * FROM binh_luan WHERE id_binh_luan='$id_binh_luan'";
    return pdo_query_one($sql, $ma_bl);
}

function binh_luan_select_by_san_pham($id_sanpham){
    $sql = "SELECT b.*, h.ten_sanpham FROM binh_luan b JOIN san_pham h ON h.id_sanpham=b.id_sanpham WHERE b.id_sanpham='$id_sanpham' ORDER BY ngay_binh_luan DESC";
    return pdo_query($sql);
}