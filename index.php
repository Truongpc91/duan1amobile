<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TQD - AMobile</title>
    <link rel="stylesheet" href="css/sty1e.css">
    <script src="https://kit.fontawesome.com/509cc166d7.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="icon" href="uploads/Logo.png" type="image/gif" sizes="16x16">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <!-- Font awesome -->
    <link rel="stylesheet" href="css/all.min.css" type="text/css">
    <!-- Slick slider -->
    <link rel="stylesheet" href="css/slick.css" type="text/css">
    <link rel="stylesheet" href="css/slick-theme.css" type="text/css">

</head>

<body>
<?php
    session_start();
    include 'view/trang-chinh/header.php';
    include 'dao/san-pham.php';
    include 'dao/danh-muc.php';
    include 'dao/user.php';
    include 'dao/binh-luan.php';
    include 'dao/cart.php';

    if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];

    if(isset($_GET['act']) && ($_GET['act']!='')) {
        $act = $_GET['act'];
        switch ($act) {
            case 'sanpham':
                $ds_dm = danh_muc_select_all();
                if(isset($_GET['id_dm']) && ($_GET['id_dm']) > 0){
                    $id_dm = $_GET['id_dm'];
                    $name_dm = danh_muc_select_by_id($id_dm);
                    extract($name_dm);
                    $title_site = "Các sản phẩm thuộc loại : '<i>$ten_dm</i>' ";
                    $items = san_pham_select_by_loai($id_dm);
                    if (count($items) == 0) {
                        $title_site = "Không sản phẩm nào thuộc loại :'<i>$ten_dm</i>'";
                    }
                }else if (isset($_POST['timkiem'])) {
                    $kyw = $_POST['kyw'];
                    if ($kyw == '') {
                        $title_site = "Tất cả sản phẩm";
                    } else {
                        $title_site = "Các sản phẩm có chứa từ khóa :'<i>$kyw</i>'";
                    }
                    $items = san_pham_select_keyword($kyw);
                    if (count($items) == 0) {
                        $title_site = "Không sản phẩm nào chứa từ khóa :'<i>$kyw</i>'";
                    }
                } else {
                    $title_site = "Tất cả sản phẩm";
                    $items = san_pham_select_page('so_luot_xem', 9);
                }
                include 'view/trang-chinh/sanpham.php';
                break;
            case 'sanphamct':
                if(isset($_GET['id_sanpham']) && ($_GET['id_sanpham']>0)) {
                    $id_sanpham = $_GET['id_sanpham'];
                    $_SESSION['product'] = $id_sanpham;
                    $onesp = san_pham_select_by_id($id_sanpham);
                    extract($onesp);
                    $id_dm = $onesp['id_dm'];
                    $sp_cung_loai = san_pham_select_cung_loai($id_dm); 
                    $binh_luan_list = binh_luan_select_by_san_pham($id_sanpham);
                    include 'view/san-pham/san-pham-chi-tiet.php';
                }else if(isset($_POST['binhluan'])){
                    $ten_dang_nhap = $_SESSION['user']['ten_dang_nhap'];
                    $noi_dung = $_POST['noi_dung'];
                    $ngay_bl = date("Y/m/d");
                    binh_luan_insert($ten_dang_nhap, $_SESSION['product'], $noi_dung, $ngay_bl);
                    $onesp = san_pham_select_by_id($_SESSION['product']);
                    extract($onesp);
                    $sp_cung_loai = san_pham_select_cung_loai($id_dm, $_SESSION['product']); 
                    $binh_luan_list = binh_luan_select_by_san_pham($_SESSION['product']);
                    include 'view/san-pham/san-pham-chi-tiet.php';
                    include 'view/san-pham/san-pham-cung-loai.php';
                    }
                    break;
            case 'lienhe':
                include 'view/trang-chinh/lienhe.php';
                break;
            case 'gioithieu':
                include 'view/trang-chinh/gioithieu.php';
                break;
            case 'dangnhap':
                if(isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                    $ten_dang_nhap = $_POST['ten_dang_nhap'];
                    $mat_khau = $_POST['mat_khau'];
                    $checkuser = check_user($ten_dang_nhap, $mat_khau);
                    if($ten_dang_nhap!=''){
                    if(is_array($checkuser)){
                        $_SESSION['user'] = $checkuser;
                        echo "<script>
                        alert('Đăng Nhập Thành Công!!!'); 
                        location.href='http://localhost:/duan1amobile';
                        </script>";  
                    }
                    }else{
                        $thongbao = "<i style='color: red;'>Tài khoản hoặc mặt khẩu không tồn tại !!!</i>";
                    }
                    
                }
                    include 'view/user/dang-nhap.php';
                    break;

                case 'edit_taikhoan':
                    if(isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                        $ten_dang_nhap = $_POST['ten_dang_nhap'];
                        $ten_user = $_POST['ten_user'];
                        $email = $_POST['email'];
                        $email = $_POST['email'];
                        $so_dien_thoai = $_POST['so_dien_thoai'];
                        $dia_chi = $_POST['dia_chi'];
                        user_edit($ten_dang_nhap, $ten_user, $email, $so_dien_thoai, $dia_chi);
                        echo "<script>
                        alert('Cập Nhật Tài Khoản Thành Công!!!'); 
                        location.href='http://localhost:/duan1amobile';
                        </script>"; 
                    }
                    include 'view/user/edit-thong-tin.php';
                    break;
                    
                case 'edit_matkhau':
                    if(isset($_POST['doimk']) && ($_POST['doimk'])) {
                        $ten_dang_nhap = $_POST['ten_dang_nhap'];
                        $mat_khau_moi = $_POST['mat_khau2'];
                        $mat_khau_moi2 = $_POST['mat_khau3'];
                        $thongbao = "Mật khẩu nhập không trùng nhau !!!"; 
                        user_change_password($ten_dang_nhap, $mat_khau_moi);
                        echo "<script>
                        alert('Đổi Mật Khẩu Thành Công!!!'); 
                        location.href='http://localhost:/duan1amobile/index.php?act=dangnhap';
                        </script>";
                    }
                        include 'view/user/edit-mat-khau.php';
                        break;
                case 'dangky':
                    if(isset($_POST['dangky']) && ($_POST['dangky'])) {
                        $ten_dang_nhap = $_POST['ten_dang_nhap'];
                        $ten_user = $_POST['ten_user'];
                        $email = $_POST['email'];
                        $vai_tro = 0;
                        $kich_hoat = 1;
                        $mat_khau = $_POST['mat_khau'];
                        $mat_khau2 = $_POST['mat_khau2'];
                        $so_dien_thoai = $_POST['so_dien_thoai'];
                        $dia_chi = $_POST['dia_chi'];
                        $anh_user = $_FILES['anh_user']['name'];
                        $target_dir = "uploads/";
                        $target_file = $target_dir . basename($_FILES['anh_user']['name']);
                        user_add($ten_dang_nhap, $mat_khau, $ten_user, $vai_tro, $kich_hoat, $email, $so_dien_thoai, $dia_chi, $anh_user);
                        echo "<script>
                        alert('Đăng Ký Tài Khoản Thành Công!!!'); 
                        location.href='http://localhost:/duan1amobile/index.php?act=dangnhap';
                        </script>";
                    }
                    include 'view/user/dang-ky.php';
                    break;
                case 'dangxuat':
                    session_unset();
                    echo "<script>
                        alert('Đăng Xuất Thành Công!!!'); 
                        location.href='http://localhost:/duan1amobile';
                        </script>";
                    break;
                
            case 'cart' :
                include 'view/cart/cart.php';
                break;       

            case 'addtocart':
                if(isset($_POST['addtocart']) && ($_POST['addtocart'])){
                    $id_sanpham = $_POST['id_sanpham'];
                    $ten_sanpham = $_POST['ten_sanpham'];
                    $anh_sanpham = $_POST['anh_sanpham'];
                    $gia = $_POST['gia'];
                    $soluong = 1;
                    $tongtien = $gia * $soluong;
                    $sanphamadd = [$id_sanpham,$ten_sanpham,$anh_sanpham,$gia,$soluong,$tongtien];
                    array_push($_SESSION['mycart'],$sanphamadd);
                }
                include 'view/cart/cart.php';
                break;

            case 'xoacart':
                if(isset($_GET['idcart'])) {
                    array_splice($_SESSION['mycart'],$_GET['idcart'],1);
                }else {
                    $_SESSION['mycart'] = [];
                }
                include 'view/cart/cart.php';
                // header('location: index.php');
                break; 
                
            case 'dathang' :
                include 'view/cart/hoa-don.php';
                break;
            
            case 'confirmhoadon' :
                if(isset($_POST['dongydathang']) && ($_POST['dongydathang'])) {

                    // $ten_bill = $_POST['ten_bill'];
                    $ten_bill = bin2hex(random_bytes(3));
                    $bill_email = $_POST['bill_email'];
                    $so_dien_thoai_bill = $_POST['so_dien_thoai_bill'];
                    $pttt = $_POST['phuong_thuc_tt'];
                    $dia_chi_bill = $_POST['dia_chi_bill'];
                    $ngay_dat_hang = date('d/m/Y');
                    $tong_gia = tongdonhang(); 

                    $idhoadon = insert_hoa_don($ten_bill, $bill_email, $so_dien_thoai_bill, $dia_chi_bill, $tong_gia, $pttt, $ngay_dat_hang);

                   //insert into cart : Lấy dữ liệu từ session['mycart'] và idhoadon

                   foreach ($_SESSION['mycart'] as $cart) {
                        insert_cart($_SESSION['user']['ten_dang_nhap'],$cart[0],$cart[2],$cart[3],$cart[4],$cart[5],$idhoadon);
                   }
                   
                   unset($_SESSION['mycart']);
                }
                $hoadon = hoa_don_select_by_id($idhoadon);
                include 'view/cart/hoa-don-comfirm.php';
                break;

                case 'xemhoadon':
                    $listhoadon = hoa_don_select_by_id_user($_SESSION['user']['email']);
                    include 'view/cart/xem-hoa-don.php';
                    break;
            default:
                include 'view/trang-chinh/slideshow.php';
                include 'view/trang-chinh/home.php';
                include 'view/trang-chinh/top10.php';
                break;
        }
    
    }else {
        include 'view/trang-chinh/slideshow.php';
        include 'view/trang-chinh/home.php';
        include 'view/trang-chinh/top10.php';
    }
    include 'view/trang-chinh/footer.php';
?>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.validate.js"></script>
    <script src="js/main.js"></script>
    <script src="js/validation.js"></script>

