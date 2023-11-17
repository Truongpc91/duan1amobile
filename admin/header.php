<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AMobile</title>
    <script src="https://kit.fontawesome.com/509cc166d7.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="icon" href="../upload/logoadidas.png" type="image/gif" sizes="16x16">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/dashboard.css" type="text/css">
    <!-- Font awesome -->
    <link rel="stylesheet" href="css/all.min.css" type="text/css">
   
</head>
<style>
  .error {
    padding-left: 0.5rem;
    margin-top: 0.5rem;
    color: red;
    font-style: italic;
    font-size: 14px;
}
.object-fit-cover {
    object-fit: cover;
}
.object-fit-contain {
    object-fit: contain;
}
.logo {
    height: 46px;
}
.ml-auto {
    margin-left: auto;
}
/* Navbar */
.nav-dropdown .nav-link {
    color: #b2ebf2;
    line-height: 1.42857;
    padding: 1rem 0 1rem 1rem !important;
}

.nav-dropdown .nav-link:hover {
    color: #fff;
}

.nav-dropdown.show a {
    color: #fff;
}

.nav-dropdown .nav-link::after {
    display: none;
}

.nav-dropdown .nav-link-menu {
    position: absolute !important;
    left: -80% !important;
    border: none;
    min-width: 220px;
    padding: 0;
    line-height: 1.4;
    box-shadow: 0 1px 10px 0 rgba(69, 90, 100, 0.2);
    margin-top: -5px;
}

.nav-dropdown .nav-link-menu::before {
    top: -4px;
    right: 25%;
    margin: 0 0 0 -0.25em;
    display: block;
    position: absolute;
    pointer-events: none;
    content: '';
    visibility: visible;
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
    width: 0.5em;
    height: 0.5em;
    background: #ffffff;
    z-index: 2;
}

.nav-dropdown .nav-link-menu .nav-list {
    padding: 5px 0;
    margin-bottom: 0;
    list-style: none;
}

.nav-dropdown .nav-link-menu .nav-list li {
    line-height: 1.2;
}

.nav-dropdown .nav-link-menu .nav-list li a {
    color: #888;
    font-size: 14px;
    padding: 0.8rem;
}

.nav-dropdown .dropdown-divider {
    margin: 3px 0;
}
/* ==========================sidebar-=========================== */
#sidebar {
    min-width: 250px;
    max-width: 100%;
    background: #fff;
    color: #fff;
    transition: all 0.3s;
    border-right: 1px solid #e6ecf5;
}

#sidebar.active {
    margin-left: -250px;
}

#sidebar .sidebar-header {
    padding: 0.4rem 1rem;
    border-bottom: 1px solid rgba(101, 109, 119, 0.16);
    max-height: 55px;
}

#sidebar ul.components {
    padding: 0 0;
}

#sidebar ul p {
    color: #fff;
    padding: 10px;
}

#sidebar ul li a {
    padding: 0.8rem 1.5rem;
    font-size: 1rem;
    display: block;
}

#sidebar ul li a .fas {
    min-width: 20px;
    margin-right: 5px;
    text-align: center;
}

#sidebar ul li a:hover,
#sidebar ul li a.active {
    color: #fff;
    background: #2196f3;
}

#sidebar ul li.active > a,
a[aria-expanded='true'] {
    color: inherit;
}

#sidebar ul ul a {
    font-size: 1rem;
    background: #eeeeee;
}

#sidebar a[data-toggle='collapse'] {
    position: relative;
}

#sidebar .dropdown-toggle::after {
    display: block;
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
    display: none;
}

@media (max-width: 768px) {
    #sidebarCollapse span {
        display: none;
    }
}
/* ==========================body-=========================== */

body,
h1,
.h1,
h2,
.h2,
h3,
.h3,
h4,
.h4,
h5,
.h5,
h6,
.h6,
p,
a,
td {
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
}

body {
    width: 100%;
    height: 100%;
    background: #f4f6fa;
    font-family: 'Lato', 'Helvetica Neue', Arial, Helvetica, sans-serif;
    font-size: 1rem;
    color: #444;
}

.wrapper {
    display: flex;
    width: 100%;
    align-items: stretch;
    overflow-x: hidden;
}

#body {
    width: 100%;
    padding: 0;
    min-height: 100vh;
    transition: all 0.3s;
}

/*------------------------------------------------------------------
[2. Header / #header]
*/
#body > .navbar {
    padding: 0 1.5rem;
    min-height: 54px;
    box-shadow: none;
    border-bottom: 1px solid rgba(101, 109, 119, 0.16);
}

/*------------------------------------------------------------------
[3. Navigation / #navbar] - see /components/navbar/navbar-dropdown.css
*/
.default-light-menu {
    border: none !important;
    box-shadow: 0 0 0 1px rgba(255, 255, 255, 0.5) inset !important;
    color: #fff;
}

.default-light-menu:hover {
    background: #2196f3 !important;
    color: #fff;
}

/*------------------------------------------------------------------
[4. Content / #content]
*/
#body > .content {
    position: relative;
    padding: 0.5rem;
}

#body .content .page-title h3 {
    margin: 1rem 0;
}

.page-header {
    margin-top: 1.25rem;
}

.page-pretitle {
    font-size: 0.8rem;
    text-transform: uppercase;
    line-height: 1.6;
    color: #656d77;
}

.page-title {
    margin: 0;
    font-size: 1.5rem;
    line-height: 1.5555556;
}

.detail-subtitle {
    font-size: 0.8rem;
    text-transform: uppercase;
    line-height: 1.6;
}

/*------------------------------------------------------------------
[5. Sidebar / #sidebar] - see /components/sidebar/sidebar-default.css
*/

/*------------------------------------------------------------------
[6. Boxes / .box] 
*/
.box {
    position: relative;
    border-radius: 3px;
    background: #ffffff;
    border-top: 3px solid #d2d6de;
    margin-bottom: 20px;
    width: 100%;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
}

.box-body {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    padding: 10px;
}

.box-footer {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    border-top: 1px solid #f4f4f4;
    padding: 10px 20px;
    background-color: #fafafa;
    text-align: right;
}

.box-primary {
    border-top-color: #22a1f9;
}

/*------------------------------------------------------------------
[7. Dashboard Cards / .card] 
*/
.card {
    margin-bottom: 15px;
    box-shadow: rgba(35, 46, 60, 0.04) 0 2px 4px 0;
}

.card .content {
    padding: 15px 15px 10px 15px;
}

.card .content .icon-big {
    font-size: 3em;
    min-height: 64px;
    line-height: 64px;
}

.card .content .number {
    font-size: 1.5em;
    text-align: right;
    font-weight: bolder;
}

.card .content .footer {
    background-attachment: fixed;
    position: relative;
    padding: 0;
    line-height: 30px;
}

.card .content .stats {
    display: inline-block;
    color: #a9a9a9;
}

/*------------------------------------------------------------------
[8. Miscellaneous ] 
*/
.line {
    border-bottom: 1px solid #e0e0e0;
}

.nav-pills {
    padding: 15px;
    background-color: #e0e0e0;
    -webkit-box-shadow: 0 3px 10px 0 rgba(0, 0, 0, 0.05);
    box-shadow: 0 3px 10px 0 rgba(0, 0, 0, 0.05);
}

.btn-rounded {
    border-radius: 10em;
    padding: 6px 8px;
    font-size: small;
    text-transform: none;
    text-shadow: none !important;
    background: #eaeaea;
    border-color: transparent;
    border: none;
}

.btn-rounded:hover {
    border-color: transparent;
    border: none;
}

#myTab {
    margin-bottom: 15px;
}

.no-margin {
    margin: 0;
}

.dfd {
    width: 100%;
}

.bg-lighter-grey {
    background: #fafafa;
}

/*------------------------------------------------------------------
[9. Adjustments to default behaviors] 
*/
a,
a:hover,
a:focus {
    color: inherit;
    text-decoration: none;
    transition: all 0.3s;
}

.btn.focus,
.btn:focus {
    box-shadow: none;
}

.btn.btn-square {
    border-radius: 0;
}

.table td,
.table th {
    vertical-align: middle;
}

table.dataTable thead .sorting:before,
table.dataTable thead .sorting:after,
table.dataTable thead .sorting_asc:before,
table.dataTable thead .sorting_asc:after,
table.dataTable thead .sorting_desc:before,
table.dataTable thead .sorting_desc:after,
table.dataTable thead .sorting_asc_disabled:before,
table.dataTable thead .sorting_asc_disabled:after,
table.dataTable thead .sorting_desc_disabled:before,
table.dataTable thead .sorting_desc_disabled:after {
    font-size: 0.8rem;
    bottom: 0.9rem;
}

.dataTables_info {
    visibility: hidden;
}

table.dataTable > tbody > tr.child ul.dtr-details {
    display: block;
}

.nav-tabs {
    border-bottom: 2px solid #dee2e6;
}

.nav-tabs .nav-item {
    margin-bottom: -2px;
}

.nav-tabs .nav-link {
    border: none;
    -webkit-transition: color 0.1s ease;
    transition: color 0.1s ease;
    color: inherit;
}

.nav-tabs .nav-item.show .nav-link,
.nav-tabs .nav-link.active {
    color: #007bff;
    background-color: #fff;
    border-bottom: 2px solid #22a1f9;
}

.tab-content {
    padding: 15px;
}

.svg-inline--fa {
    min-width: 15px;
}

.display-absolute {
    position: absolute;
}

.large-icon {
    font-size: 3em;
}

.license span {
    margin-bottom: 1em;
}

/*------------------------------------------------------------------
[10. Colors / .teal, .olive, .violet, .orange, .darkgray, .blue, .grey] 
*/
.teal {
    color: #00b5ad !important;
}

.olive {
    color: #b5cc18 !important;
}

.violet {
    color: #6435c9 !important;
}

.orange {
    color: #f2711c !important;
}

.darkgray {
    color: darkgray !important;
}

.blue {
    color: #2185d0 !important;
}

.grey {
    color: #767676 !important;
}

/*------------------------------------------------------------------
[11. Responsive properties] 
*/
@media (max-width: 768px) {
    .display-absolute {
        position: relative;
    }
}

@media (max-width: 680px) {
    #body.active .navbar-collapse {
        display: -ms-flexbox !important;
        display: flex !important;
        -ms-flex-preferred-size: auto;
        flex-basis: auto;
    }

    .nav-dropdown .nav-link-menu {
        position: fixed !important;
        top: 52px !important;
        width: 100% !important;
        margin-top: 0;
    }

    .nav-dropdown .nav-link {
        padding: 10px;
    }

    .nav-dropdown .nav-link-menu::before {
        right: 50%;
    }

    #body .navbar-collapse {
        display: none !important;
    }

    #body .nav-dropdown .nav-item span {
        display: none !important;
    }

    .btn-header {
        display: none;
    }
}

@media (min-width: 200px) {
    .navbar-expand-lg .navbar-collapse {
        display: -ms-flexbox !important;
        display: flex !important;
        -ms-flex-preferred-size: auto;
        flex-basis: auto;
    }

    .navbar-expand-lg .navbar-nav {
        -ms-flex-direction: row;
        flex-direction: row;
    }
}

</style>

<body>
    <nav id="sidebar">
    <div class="sidebar-header">
        <a href="../index.php">
            <img src="../upload/logoadidas.png" alt="logo" class="img-fluid logo">
        </a>
    </div>
    <ul class="list-unstyled components text-secondary">
        <li>
            <a href="../index.php"><i class="fas fa-store"></i>Xem trang web</a>
        </li>
        <li>
            <a href="../index.php"><i class="fas fa-home"></i>Trang chủ</a>
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
                    <a href="index.php?act=addhanghoa"><i class="fas fa-plus"></i>Thêm sản phẩm</a>
                </li>
                <li>
                    <a href="index.php?act=listhanghoa">
                        <i class="fas fa-list-ul"></i>Danh sách sản phẩm</a>
                </li>
            </ul>
        </li>
        <!-- Khách hàng -->
        <li>
            <a href="#accounts" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down">
                <i class="fas fa-user-friends"></i>Khách hàng
                <i class="fas fa-angle-right float-xl-right"></i>
            </a>
            <ul class="collapse list-unstyled" id="accounts">
                <li>
                    <a href="index.php?act=addkhachhang"><i class="fas fa-plus"></i>Thêm khách hàng</a>
                </li>
                <li>
                    <a href="index.php?act=listkhachhang">
                        <i class="fas fa-list-ul"></i>Danh sách khách hàng</a>
                </li>
            </ul>
        </li>

         <!-- Đơn Hàng -->
         <li>
            <a href="#donhangs" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down">
                <i class="fas fa-user-friends"></i>Đơn hàng
                <i class="fas fa-angle-right float-xl-right"></i>
            </a>
            <ul class="collapse list-unstyled" id="donhang">
                <li>
                    <a href="index.php?act=listkhachhang">
                        <i class="fas fa-list-ul"></i>Danh sách đơn hàng</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="index.php?act=listbinhluan"> <i class="fas fa-comments"></i>Bình luận</a>
        </li>
        <li>
            <a href="index.php?act=thongke"><i class="fas fa-chart-line"></i></i>Thống kê</a>
        </li>
        <li>
            <a href="settings.html"><i class="fas fa-cog"></i>Cài đặt</a>
        </li>
    </ul>