<div class="card mb-4 mx-auto mt-3" style="max-width: 500px;">
<article class="card-body">
    <div class="boxtrain">
        <header class="mb-4">
             <h4 class="card-title text-center font-weight-bold">Đăng ký</h4>
         </header>
        <div class="boxcontent">
            <form action="index.php?act=dangky" method="post" enctype="multipart/form-data" >
                <div class="form-group">
                    Tên đăng nhập<input type="text" name="ten_dang_nhap" class="form-control" required>
                </div>
                <div class="form-group">
                    Email<input type="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    Họ và tên<input type="text" name="ten_user" class="form-control" required>
                </div>
                <div class="form-group">
                    Số điện thoại<input type="text" name="so_dien_thoai" class="form-control" required>
                </div>
                <div class="form-group">
                    Địa chỉ<input type="text" name="dia_chi" class="form-control" required>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        Mật khẩu<input type="password" name="mat_khau" id="mat_khau" class="form-control" required >
                    </div>
                    <div class="form-group col-md-6">
                        Nhập lại mật khẩu<input type="password" name="mat_khau2" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    Ảnh đại diện<input type="file" name="anh_user" id="anh_user" class="form-control" required>
                </div>
                <div class="form-group">
                    <input type="hidden" name="vai_tro" value="0">
                    <input type="hidden" name="kich_hoat" value="1">
                    <input type="submit" name="dangky" value="Đăng Ký" class="btn btn-primary btn-block">
                    <input type="reset" value="Nhập Lại" class="btn btn-primary btn-block">
                </div>
                <p class="text-center">Đã có tài khoản? <a href="index.php?act=dangnhap">Đăng nhập</a></p>
            </form>
        </div>
    </div>
</article>
</div>