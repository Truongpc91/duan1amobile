<?php
    require_once 'pdo.php';

   function ketnoidb() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "duan12023_amoblie";

    try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
    } catch(PDOException $e) {
        return $e->getMessage();
    }
}

    function insert_hoa_don($ten_dang_nhap,$ten_bill, $bill_email, $so_dien_thoai_bill, $dia_chi_bill, $tong_gia, $pttt, $ngay_dat_hang) {
        $conn = ketnoidb();
        $sql = "INSERT INTO hoa_don (ten_dang_nhap,ten_bill, bill_email, so_dien_thoai_bill, dia_chi_bill, tong_gia, pttt, ngay_dat_hang)
        VALUES ('$ten_dang_nhap','$ten_bill', '$bill_email', '$so_dien_thoai_bill', '$dia_chi_bill', '$tong_gia', '$pttt', '$ngay_dat_hang')";
        $conn->exec($sql);
        $last_id = $conn->lastInsertId();
        $conn = null;
        return $last_id;
}

function insert_cart($ten_dang_nhap , $id_sanpham , $img, $gia, $so_luong, $tong_tien, $ngay_dat_hang, $id_hoa_don) {
    $conn = ketnoidb();
    $sql = "INSERT INTO cart(ten_dang_nhap, id_sanpham, img, gia, so_luong, tong_tien, ngay_dat_hang, id_hoa_don) 
    VALUES ('$ten_dang_nhap', '$id_sanpham','$img', '$gia', '$so_luong', '$tong_tien', '$ngay_dat_hang', '$id_hoa_don')";
    $conn->exec($sql);
    $conn = null;
}


    function tongdonhang() {
        $tong = 0;

        foreach ($_SESSION['mycart'] as $cart) {
            $ttien = $cart['gia'] * $cart['soluong'];
            $tong+=$ttien;
        }
        return $tong;
    }


    // function insert_bill($ten_bill,$bill_email, $so_dien_thoai_bill, $dia_chi_bill, $tong_gia, $pttt, $ngay_dat_hang){
    //     $sql = "INSERT INTO hoa_don(ten_bill, bill_email, so_dien_thoai_bill, dia_chi_bill, tong_gia, pttt, ngay_dat_hang) VALUES ('$ten_bill', '$bill_email', '$so_dien_thoai_bill', '$dia_chi_bill', '$tong_gia', '$pttt', '$ngay_dat_hang')";
    //     $last_id = $conn->lastInsertId();
    //     return $last_id;
    // }

    // function hoa_don_insert($ten_bill, $bill_email, $so_dien_thoai_bill, $dia_chi_bill, $tong_gia, $pttt, $ngay_dat_hang) {
    //     $sql = "INSERT INTO hoa_don(ten_bill, bill_email, so_dien_thoai_bill, dia_chi_bill, tong_gia, pttt, ngay_dat_hang) 
    //     VALUES ('$ten_bill', '$bill_email', '$so_dien_thoai_bill', '$dia_chi_bill', '$tong_gia', '$pttt', '$ngay_dat_hang')";
    //     pdo_execute($sql);
    // }

    // function cart_insert($ten_dang_nhap, $id_sanpham,$img, $gia, $so_luong, $tong_tien, $id_hoa_don){
    //     $sql = "INSERT INTO cart(ten_dang_nhap, id_sanpham, img, gia, so_luong, tong_tien, id_hoa_don) VALUES ('$ten_dang_nhap', '$id_sanpham','$img', '$gia', '$so_luong', '$tong_tien', '$id_hoa_don')";
    //     return pdo_execute($sql);
    // }

    // function hoa_don_select_by_id($id_hoa_don){
    //     $sql = "SELECT * FROM hoa_don WHERE id_hoa_don=$id_hoa_don";
    //     return pdo_query_one($sql);
    // }

    // function cart_select_by_id($ten_dang_nhap){
    //     $sql = "SELECT * FROM cart WHERE ten_dang_nhap=$ten_dang_nhap";
    //     return pdo_query_one($sql);
    // }

    // function cart_select_by_id($ten_dang_nhap){
    //     $sql = "SELECT * FROM cart WHERE ten_dang_nhap=$ten_dang_nhap";
    //     return pdo_query($sql);
    // }
?>