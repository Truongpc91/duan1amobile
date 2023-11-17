<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header text-center bg-dark text-white text-uppercase">THÊM MỚI DANH MỤC</div>
            <div class="card-body">
                <form action="index.php?act=adddm" method="POST" id="addm">
                    <div class="mb-3">
                        <label for="id_dm" class="form-label">Mã Danh Mục</label>
                        <input type="text" name="id_dm" class="form-control" disabled >
                    </div>
                    <div class="mb-3">
                        <label for="ten_dm" class="form-label">Tên Danh Mục</label>
                        <input type="text" name="ten_dm" placeholder="Nhập tên danh mục" class="form-control" required >
                    </div>
                    <div class="mb-3 text-center">
                        <input type="reset" value="NHẬP LẠI" class="btn btn-danger mr-3">
                        <input type="submit" name="add" value="THÊM MỚI" class="btn btn-primary mr-3">
                        <a href="index.php?act=listdanhmuc"><input type="button" class="btn btn-success" value="Danh sách"></a>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>       