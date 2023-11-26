<?php
require_once 'pdo.php';

function san_pham_insert($ten_sanpham, $gia, $anh_sanpham, $color, $dung_luong, $noi_dung, $id_dm){
    $sql = "INSERT INTO san_pham(ten_sanpham, gia, anh_sanpham, color, dung_luong, noi_dung, id_dm) VALUES ('$ten_sanpham', '$gia', '$anh_sanpham', '$color', '$dung_luong', '$noi_dung', '$id_dm')";
    pdo_execute($sql);
}


function san_pham_update($id_sanpham, $ten_sanpham, $gia, $anh_sanpham, $color, $dung_luong, $noi_dung, $id_dm){
    if($anh_sanpham != "") {
        $sql = "UPDATE san_pham SET ten_sanpham='".$ten_sanpham."', anh_sanpham='".$anh_sanpham."', gia='".$gia."', color='".$color."', dung_luong='".$dung_luong."', noi_dung='".$noi_dung."', id_dm='".$id_dm."' WHERE id_sanpham=".$id_sanpham;
    }else {
        $sql = "UPDATE san_pham SET ten_sanpham='".$ten_sanpham."', dung_luong='".$dung_luong."', gia='".$gia."', color='".$color."', noi_dung='".$noi_dung."', id_dm='".$id_dm."' WHERE id_sanpham=".$id_sanpham;
    }
    pdo_execute($sql);
}

function san_pham_delete($id_sanpham){
    $sql = "DELETE FROM san_pham WHERE  id_sanpham=$id_sanpham";
    if(is_array($id_sanpham)){
        foreach ($id_sanpham as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql);
    }
}

function san_pham_select_all($keyword="",$id_dm=0){
    $sql = "SELECT * FROM san_pham WHERE 1";
    if($keyword != ''){
        $sql .= " AND ten_sanpham LIKE '%".$keyword."%'";
    }
    if($id_dm > 0){
        $sql .= " AND id_dm LIKE '%".$id_dm."%'";
    }
    $sql .= " ORDER BY id_sanpham DESC";
    return pdo_query($sql);
}

function san_pham_select_by_id($id_sanpham){
    $sql = "SELECT * FROM san_pham WHERE id_sanpham=$id_sanpham";
    return pdo_query_one($sql);
}


function san_pham_select_top10(){
    $sql = "SELECT * FROM san_pham WHERE id_sanpham > 0 ORDER BY id_sanpham DESC LIMIT 0, 8";
    return pdo_query($sql);
}

function san_pham_select_by_loai($id_dm){
    $sql = "SELECT * FROM san_pham WHERE id_dm=$id_dm";
    return pdo_query($sql);
}

function san_pham_select_cung_loai($id_dm){
    $sql = "SELECT * FROM san_pham WHERE id_dm ='$id_dm'";
    return pdo_query($sql);
}

function san_pham_select_keyword($keyword){
    $sql = "SELECT * FROM san_pham hh "
            . " JOIN danh_muc lo ON lo.id_dm=hh.id_dm "
            . " WHERE ten_sanpham LIKE ? OR ten_dm LIKE ?";
    return pdo_query($sql, '%'.$keyword.'%', '%'.$keyword.'%');
}

function san_pham_select_page(){
    if(!isset($_SESSION['page_no'])){
        $_SESSION['page_no'] = 0;
    }
    // if(!isset($_SESSION['page_count'])){
    //     $row_count = pdo_query_value("SELECT count(*) FROM hang_hoa");
    //     $_SESSION['page_count'] = ceil($row_count/10.0);
    // }
    // if(exist_param("page_no")){
    //     $_SESSION['page_no'] = $_REQUEST['page_no'];
    // }
    // if($_SESSION['page_no'] < 0){
    //     $_SESSION['page_no'] = $_SESSION['page_count'] - 1;
    // }
    // if($_SESSION['page_no'] >= $_SESSION['page_count']){
    //     $_SESSION['page_no'] = 0;
    // }
    $sql = "SELECT * FROM san_pham ORDER BY id_sanpham LIMIT ".$_SESSION['page_no'].", 9";
    return pdo_query($sql);
}