<div class="card mx-auto" style="max-width: 380px; margin-top:100px;">
<article class="card-body">
    <div class="boxtrain">
        <header class="mb-4">
             <h4 class="card-title mb-4">Đăng Nhập</h4>
         </header>
        <div class="boxcontent">
            <form action="index.php?act=dangnhap" method="post" enctype="multipart/form-data">
                <a href="#" class="btn btn-facebook btn-block mb-2"> <i class="fab fa-facebook-f"></i>  Đăng
                    nhập bằng facebook</a>
                <a href="#" class="btn btn-google btn-block mb-4"> <i class="fab fa-google"></i>  Đăng nhập
                    bằng google</a>
                <div class="form-group">
                    Tên đăng nhập<input type="text" name="ten_dang_nhap" class="form-control">
                </div>
                <div class="form-group">  
                        Mật khẩu<input type="password" name="mat_khau" class="form-control">
                </div>
                <div class="form-group">
                <a href="<?= $SITE_URL ?>/tai-khoan/quen-mk.php" class="float-right">Quên mật khẩu?</a>

                <label class="float-left custom-control custom-checkbox"> <input type="checkbox"
                        class="custom-control-input" name="ghi_nho" checked>
                    <div class="custom-control-label"> Ghi nhớ tài khoản </div>
                </label>
                </div>
                <div class="form-group">
                    <input type="submit" name="dangnhap" value="Đăng Nhập" class="btn btn-primary btn-block">
                    <input type="reset" value="Nhập Lại" class="btn btn-primary btn-block">
                </div>
                <p class="text-center mt-4">Bạn chưa có tài khoản? <a href="index.php?act=dangky">Đăng ký</a></p>
            </form>
            <?php 
                if(isset($thongbao)&&($thongbao!="")){ 
                    echo $thongbao;
                } 
            ?>
        </div>
    </div>
</article>
</div>
<br/><br/>