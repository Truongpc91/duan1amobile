<?php
    if(is_array($danhmuc)) {
        extract($danhmuc);
    }
?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header text-center bg-dark text-white text-uppercase">Cập nhật danh mục</div>
            <div class="card-body">
                <form action="index.php?act=updatedanhmuc" method="POST" id="edit_loai">
                    <div class="mb-3">
                        <label for="id_dm" class="form-label">ID Danh Mục</label>
                        <input type="text" name="id_dm" class="form-control" disabled value="<?= $id_dm ?>">
                    </div>
                    <div class="mb-3">
                        <label for="ten_dm" class="form-label">Tên Danh Mục</label>
                        <input type="text" name="ten_dm" placeholder="Nhập tên loại" class="form-control" required
                            value="<?= $ten_dm ?>">
                    </div>
                    <div class="mb-3 text-center">
                        <input type="hidden" name="id" value="<?= $id_dm ?>">
                        <input type="reset" value="NHẬP LẠI" class="btn btn-danger mr-3">
                        <input type="submit" name="capnhat" value="CẬP NHẬT" class="btn btn-primary mr-3">
                        <a href="index.php?act=listdanhmuc"><input type="button" class="btn btn-success" value="Danh sách"></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>