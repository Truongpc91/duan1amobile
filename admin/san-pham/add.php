<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header text-center bg-dark text-white text-uppercase">THÊM MỚI SẢN PHẨM</div>
            <div class="card-body">
                <form action="index.php?act=addsanpham" method="POST" enctype="multipart/form-data">
                <div class="mb-3 mt-3">
                        <label for="id_dm" class="form-label">ID Danh Mục </label>
                        <select name="id_dm" class="form-select">
                            <?php foreach($listdanhmuc as $danhmuc) {
                                extract($danhmuc);
                                echo '<option value="'.$id_dm.'">'.$ten_dm.'</option>'; 
                            } ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="ten_sanpham" class="form-label">Tên Sản Phẩm:</label>
                        <input type="text" class="form-control" id="ten_sanpham" placeholder="Tên Sản Phẩm" name="ten_sanpham">
                    </div>
                    <div class="mb-3">
                        <label for="gia" class="form-label">Giá:</label>
                        <input type="text" class="form-control" id="gia" placeholder="Giá" name="gia">
                    </div>
                    <div class="mb-3">
                        <label for="anh_sanpham" class="form-label">Hình ảnh:</label>
                        <input type="file" class="form-control" id="anh_sanpham" placeholder="Hình ảnh" name="anh_sanpham">
                    </div>
                    <div class="mb-3">
                        <label for="color" class="form-label">Màu Sắc :</label>
                        <input type="color" class="form-control" id="color" placeholder="Màu Sắc" name="color">
                    </div>
                    <div class="mb-3">
                        <label for="dung_duong" class="form-label">Dung Lượng</label>
                        <input type="text" class="form-control" id="dung_luong" placeholder="Dung Lượng" name="dung_luong">
                    </div>
                    <div class="mb-3">
                        <label for="noi_dung" class="form-label">Mô Tả:</label>
                        <textarea class="form-control" id="noi_dung" name="noi_dung"></textarea>
                    </div>
                        <input type="submit" name="themmoi" value="THÊM MỚI" class="btn btn-primary">
                        <input type="reset" value="NHẬP LẠI" class="btn btn-primary">
                        <a href="index.php?act=listsanpham"><input type="button" value="DANH SÁCH" class="btn btn-primary"></a>
                </form>
            </div>
        </div>
    </div>
</div>        