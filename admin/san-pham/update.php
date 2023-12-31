<?php
    if(is_array($sanpham)) {
        extract($sanpham);
    }
    $hinhpath = "../uploads/".$anh_sanpham;
    if(is_file($hinhpath)) {
        $anh_sanpham = "<img src='".$hinhpath."' height='80'>";
    }else {
        $anh_sanpham = "no photo";
    }
?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header text-center bg-dark text-white text-uppercase">SỬA HÀNG HÓA</div>
            <div class="card-body">
                <form action="index.php?act=updatesanpham" method="POST" enctype="multipart/form-data">
                    <div class="mb-3 mt-3">
                    <label for="id_dm" class="form-label">ID Danh Mục :</label>
                    <select name="id_dm" class="form-select">
                        <option value="0" selected>Tất Cả</option>
                            <?php foreach($listdanhmuc as $danhmuc) {
                                extract($danhmuc);
                                if($id_dm==$danhmuc['id_dm']){
                                    echo '<option value="'.$id_dm.'" selected>'.$ten_dm.'</option>'; 
                                }else{
                                    echo '<option value="'.$id_dm.'">'.$ten_dm.'</option>';
                                } 
                            } ?>
                    </select>
                    </div>

                    <div class="mb-3">
                        <label for="ten_sanpham" class="form-label">Tên Sản Phẩm:</label>
                        <input type="text" class="form-control" id="ten_sanpham" placeholder="Tên Sản Phẩm" name="ten_sanpham" value="<?=$ten_sanpham?>">
                    </div>
                    <div class="mb-3">
                        <label for="gia" class="form-label">Giá:</label>
                        <input type="text" class="form-control" id="gia" placeholder="Giá" name="gia" value="<?=$gia?>">
                    </div>
                    <div class="mb-3">
                        <label for="anh_sanpham" class="form-label">Hình ảnh:</label>
                        <input type="file" class="form-control" id="anh_sanpham" placeholder="Hình ảnh" name="anh_sanpham"  value="<?=$anh_sanpham?>">
                        <?=$anh_sanpham?>
                    </div>
                    <div class="mb-3">
                        <label for="so_luong" class="form-label">Số lượng :</label>
                        <input type="number" class="form-control" id="so_luong" placeholder="Số lượng" name="so_luong" value="<?=$so_luong?>"> 
                    </div>
                    <div class="mb-3">
                        <label for="dung_duong" class="form-label">Dung Lượng :</label>
                        <input type="text" class="form-control" id="dung_luong" placeholder="Dung Lượng" name="dung_luong" value="<?=$dung_luong?>">
                    </div>
                    <div class="mb-3">
                        <label for="noi_dung" class="form-label">Nội Dung :</label>
                        <textarea class="form-control" id="noi_dung" name="noi_dung"><?=$noi_dung?></textarea>
                    </div>

                        <input type="hidden" name="id" value="<?php if(isset($id_sanpham)&&($id_sanpham>0)) echo $id_sanpham ?>">
                        <input type="submit" name="capnhat" value="CẬP NHẬT" class="btn btn-primary">
                        <input type="reset" name="maloai" value="NHẬP LẠI" class="btn btn-primary">
                        <a href="index.php?act=listsanpham"><input type="button" value="DANH SÁCH" class="btn btn-primary"></a>
            </div>
        </div>
    </div>
</div>        

