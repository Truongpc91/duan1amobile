    <header class="sticky-top">
       <nav class="navbar navbar-md navbar-expand-lg navbar-dark p-1">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img class="img-fluid logo" src="uploads/Logo.png" alt="logo" >
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars primary-color"></i>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarsExampleDefault">
            <ul class="navbar-nav m-auto nav">
                <?php
                if (isset($_SESSION['name_page'])) {
                    $name_page = $_SESSION['name_page'];
                }
                ?>
                <li class="nav-item">
                    <a class="nav-link text-black" href="index.php">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black" href="index.php?act=sanpham">Sản phẩm</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black" href="index.php?act=gioithieu">Giới thiệu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black" href="index.php?act=gioithieu">Bài viết</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black" href="index.php?act=lienhe">Liên hệ</a>
                </li>
            </ul>

            <div class="widgets-wrap float-md-right ml-4">
                <!-- Cart -->
                <div class="widget-header  mr-3">
                    <a href="index.php?act=cart" class="icon icon-sm rounded-circle border"><i class="fa fa-shopping-cart primary-color"></i></a>
                </div>
    
                <!-- User -->
                <div class="dropdown widget-header icontext">
                    <a href="#" class="icon icon-sm rounded-circle border" id="dropdownMenu1" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <?php
                        if (isset($_SESSION['user']) && $_SESSION['user']['anh_user'] != "") { ?>
                        <img src="./uploads/<?=  $_SESSION['user']['anh_user'] ?>" width="50" height="50"
                            class="mb-2 object-fit-cover" alt="">
                        <?php } else { ?>
                        <i class="fa fa-user primary-color"></i>
                        <?php }  ?>
                    </a>
                    <div class="text">
                        <?php
                        if (isset($_SESSION['user'])) { ?>
                         <span class="text-dark">Xin chào!</span>
                        <div class="text-dark text-info"><?= $_SESSION['user']['ten_user'] ?></div>
                        <?php } else { ?>

                        <a href="index.php?act=dangnhap" class="d-block text-info">Đăng nhập</a>

                        <?php }  ?>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <?php
                            if (isset($_SESSION['user'])) { ?>
                                
                            <?php if ($_SESSION['user']['vai_tro'] == 0) { ?>
                            <a class="dropdown-item pl-3 py-2" href="admin">Quản trị admin</a>
                            <?php }  ?>
                            <a class="dropdown-item pl-3 py-2"
                                href="index.php?act=xemhoadon">Xem hóa đơn</a>   
                            <a class="dropdown-item pl-3 py-2"
                                href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a>
                            <a class="dropdown-item pl-3 py-2" href="index.php?act=edit_matkhau">Đổi mật khẩu</a>
                            <a class="dropdown-item pl-3 py-2"
                                href="index.php?act=dangxuat">Đăng xuất</a>


                            <?php } else { ?>

                            <a class="dropdown-item pl-3 py-2" href="index.php?act=dangnhap">Đăng
                                nhập</a>
                            <a class="dropdown-item pl-3 py-2" href="index.php?act=dangky">Đăng
                                ký</a>

                            <?php }  ?>
                        </div>
                    </div>
                </div>

            </div> 

        </div>

    </div>
    </nav>
</header>   
