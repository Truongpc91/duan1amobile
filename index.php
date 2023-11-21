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
            case 'lienhe':
                include 'view/trang-chinh/lienhe.php';
                break;
            case 'gioithieu':
                include 'view/trang-chinh/gioithieu.php';
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
>>>>>>> d9cf1f162b1fe5489cb1f83a4607b01575db578c
