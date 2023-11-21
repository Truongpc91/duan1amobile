<?php
require_once 'pdo.php';

function user_add($ten_dang_nhap, $mat_khau, $ten_user, $vai_tro, $kich_hoat, $email, $so_dien_thoai, $dia_chi, $anh_user ){
    $sql = "INSERT INTO user(ten_dang_nhap, mat_khau, ten_user, vai_tro, kich_hoat, email, so_dien_thoai, dia_chi, anh_user ) VALUES ('$ten_dang_nhap', '$mat_khau', '$ten_user', '$vai_tro', '$kich_hoat', '$email', '$so_dien_thoai', '$dia_chi', '$anh_user')";
    pdo_execute($sql);
}

function check_user($ten_dang_nhap, $mat_khau){
    $sql = "SELECT * FROM user WHERE ten_dang_nhap = '".$ten_dang_nhap."' AND mat_khau = '".$mat_khau."' ";
    $sp = pdo_query_one($sql);
    return $sp;
}

function khach_hang_insert($ma_kh, $mat_khau, $ho_ten,$vai_tro, $kich_hoat, $email, $hinh){
    $sql = "INSERT INTO khach_hang(ma_kh, mat_khau, ho_ten, email, hinh, vai_tro, kich_hoat) VALUES ('$ma_kh', '$mat_khau', '$ho_ten', '$email', '$hinh', '$vaitro', '$kich_hoat')";
    pdo_execute($sql);
}

function khach_hang_update($ma_kh, $kich_hoat, $vai_tro){
    $sql = "UPDATE khach_hang SET kich_hoat='$kich_hoat',vai_tro='$vai_tro' WHERE ma_kh='$ma_kh'";
    pdo_execute($sql);
}

function khach_hang_edit( $ma_kh, $ho_ten, $email){
    $sql = "UPDATE khach_hang SET  ho_ten='".$ho_ten."',email='".$email."' WHERE ma_kh='".$ma_kh."'";
    pdo_execute($sql);
}

function khach_hang_delete($ma_kh){
    $sql = "DELETE FROM khach_hang  WHERE ma_kh=$makh";
    if(is_array($ma_kh)){
        foreach ($ma_kh as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $ma_kh);
    }
}

function user_select_all(){
    $sql = "SELECT * FROM user";
    return pdo_query($sql);
}

function user_select_by_id($ten_dang_nhap){
    $sql = "SELECT * FROM user WHERE ten_dang_nhap='$ten_dang_nhap'";
    return pdo_query_one($sql);
}


function user_change_password($ten_dang_nhap, $mat_khau_moi){
    $sql = "UPDATE user SET mat_khau='$mat_khau_moi' WHERE ten_dang_nhap='$ten_dang_nhap'";
    pdo_execute($sql);
}