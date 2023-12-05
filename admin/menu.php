<nav id="sidebar">
        <div class="sidebar-header">
            <a href="../index.php">
                <img src="../uploads/Logo.png" alt="logo" class="img-fluid logo" width="80">
            </a>
        </div>
        <ul class="list-unstyled components text-secondary">
            <li>
                <a href="../index.php"><i class="fas fa-store"></i>Xem trang web</a>
            </li>
            <li>
                <a href="index.php?act=trangchu"><i class="fas fa-home"></i>Trang chủ</a>
            </li>
            <!-- Danh mục -->
            <li>
                <a href="#categories" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-list-alt"></i>Danh mục
                    <i class="fas fa-angle-right float-xl-right"></i>
                </a>
                <ul class="collapse list-unstyled" id="categories">
                    <li>
                        <a href="index.php?act=adddm">
                            <i class="fas fa-plus"></i>Thêm Danh Mục</a>
                    </li>
                    <li>
                        <a href="index.php?act=listdanhmuc">
                            <i class="fas fa-list-ul"></i>Danh sách danh mục</a>
                    </li>
                </ul>
            </li>
            <!-- Sản phẩm -->
            <li>
                <a href="#products" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-table"></i>Sản phẩm
                    <i class="fas fa-angle-right float-xl-right"></i>
                </a>
                <ul class="collapse list-unstyled" id="products">
                    <li>
                        <a href="index.php?act=addsanpham"><i class="fas fa-plus"></i>Thêm sản phẩm</a>
                    </li>
                    <li>
                        <a href="index.php?act=listsanpham">
                            <i class="fas fa-list-ul"></i>Danh sách sản phẩm</a>
                    </li>
                </ul>
            </li>
            <!-- Khách hàng -->
            <li>
                <a href="#accounts" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down">
                    <i class="fas fa-user-friends"></i>Người Dùng
                    <i class="fas fa-angle-right float-xl-right"></i>
                </a>
                <ul class="collapse list-unstyled" id="accounts">
                    <li>
                        <a href="index.php?act=addkhachhang"><i class="fas fa-plus"></i>Thêm người dùng</a>
                    </li>
                    <li>
                        <a href="index.php?act=listuser">
                            <i class="fas fa-list-ul"></i>Danh sách người dùng</a>
                    </li>
                </ul>
            </li>

            <!-- Hóa Đơn -->
            <li>
                <a href="#hoadon" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down">
                <i class="fas fa-shipping-fast"></i>Hóa đơn
                    <i class="fas fa-angle-right float-xl-right"></i>
                </a>
                <ul class="collapse list-unstyled" id="hoadon">
                    <li>
                        <a href="index.php?act=listhoadon">
                            <i class="fas fa-list-ul"></i>Danh sách hóa đơn</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="index.php?act=listbinhluan"> <i class="fas fa-comments"></i>Bình luận</a>
            </li>
            <li>
                <a href="#thongke" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down">
                <i class="fas fa-chart-line"></i>Thống kê
                    <i class="fas fa-angle-right float-xl-right"></i>
                </a>
                <ul class="collapse list-unstyled" id="thongke">
                    <li>
                        <a href="index.php?act=thongke">
                            <i class="fas fa-list-ul"></i>Thống kê sản phẩm theo danh mục</a>
                    </li>
                    <li>
                        <a href="index.php?act=thongkethunhap">
                            <i class="fas fa-list-ul"></i>Thống kê thu nhập</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="settings.html"><i class="fas fa-cog"></i>Cài đặt</a>
            </li>
        </ul>
    </nav>