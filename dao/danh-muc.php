<?php
    require_once 'pdo.php';

/**
 * Thêm loại mới
 */
function danh_muc_insert($ten_dm){
    $sql = "INSERT INTO danh_muc(ten_dm) VALUES ('$ten_dm')";
    pdo_execute($sql);
}
/**
 * Cập nhật tên loại
 */
function danh_muc_update($id_dm, $ten_dm){
    $sql = "UPDATE danh_muc SET ten_dm='".$ten_dm."' WHERE id_dm=".$id_dm; 
    pdo_execute($sql);
}
/**
 * Xóa một hoặc nhiều loại
 */
function danh_muc_delete($id_dm){
    $sql = "DELETE FROM danh_muc WHERE id_dm=".$id_dm;
    if(is_array($id_dm)){
        foreach ($id_dm as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql);
    }
}
/**
 * Truy vấn tất cả các loại
 */
function danh_muc_select_all(){
    $sql = "SELECT * FROM danh_muc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}
/**
 * Truy vấn một loại theo mã
 */
function danh_muc_select_by_id($id_dm){
    $sql = "SELECT * FROM danh_muc WHERE id_dm=".$id_dm;
    $danhmuc = pdo_query_one($sql);
    return $danhmuc;
}
/**
 * Kiểm tra sự tồn tại của một loại
 */
function danh_muc_exist($id_dm){
    $sql = "SELECT count(*) FROM danh_muc WHERE id_dm=$id_dm";
    return pdo_query_value($sql, $id_dm) > 0;
}