<?php
require_once 'pdo.php';

function user_add($ten_dang_nhap, $mat_khau, $ten_user, $vai_tro, $kich_hoat, $email, $so_dien_thoai, $dia_chi, $anh_user ){
    $sql = "INSERT INTO user(ten_dang_nhap, mat_khau, ten_user, vai_tro, kich_hoat, email, so_dien_thoai, dia_chi, anh_user ) VALUES ('$ten_dang_nhap', '$mat_khau', '$ten_user', '0', '$kich_hoat', '$email', '$so_dien_thoai', '$dia_chi', '$anh_user')";
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

function user_edit($ten_dang_nhap, $ten_user, $email, $so_dien_thoai, $dia_chi){
    $sql = "UPDATE user SET  ten_user='".$ten_user."',email='".$email."', so_dien_thoai='".$so_dien_thoai."', dia_chi='".$dia_chi."'  WHERE ten_dang_nhap='".$ten_dang_nhap."'";
    pdo_execute($sql);
}

function user_delete($ten_dang_nhap){
    $sql = "DELETE FROM user  WHERE ten_dang_nhap=$ten_dang_nhap";
    if(is_array($ten_dang_nhap)){
        foreach ($ten_dang_nhap as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $ten_dang_nhap);
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

function lock_user($ten_dang_nhap, $kich_hoat){
    $sql = "UPDATE user SET kich_hoat= b'$kich_hoat' WHERE ten_dang_nhap='$ten_dang_nhap'";
    pdo_execute($sql);
}