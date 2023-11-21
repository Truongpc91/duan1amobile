<div class="card mb-4 mx-auto mt-3" style="max-width: 500px;">
<article class="card-body">
    <div class="boxtrain">
        <header class="mb-4">
             <h4 class="alert-dark my-3 py-3 shadow-sm text-center">Đổi Mật Khẩu</h4>
         </header>
         <?php
            if(isset($_SESSION['user']) && is_array($_SESSION['user'])){
                extract($_SESSION['user']);
            }
        ?>
        <div class="row m-1 pb-5">
            <div class="card-body">
                <form action="index.php?act=edit_matkhau" method="post" >
                    <div class="form-group">
                        Tên đăng nhập<input type="text" name="ten_dang_nhap" class="form-control" value="<?= $ten_dang_nhap ?>" readonly>
                    </div>
                    <div class="form-group">
                        Mật khẩu cũ<input type="text" name="mat_khau" class="form-control" value="<?= $mat_khau ?>">
                    </div>
                    <div class="form-group">
                        Mật khẩu mới<input type="password" name="mat_khau2" class="form-control" >
                    </div>
                    <div class="form-group">
                        Nhập lại mật khẩu mới<input type="password" name="mat_khau3" class="form-control" >
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="ten_dang_nhap" value="<?= $ten_dang_nhap ?>">
                        <input type="hidden" name="mat_khau" value="<?= $mat_khau ?>">
                        <input type="submit" name="doimk" value="Đổi Mật Khẩu" class="btn btn-primary btn-block">
                        <input type="reset" value="Nhập Lại" class="btn btn-primary btn-block">
                    </div>
                </form>
            </div>
        </div>
    </div>
</article>
</div>