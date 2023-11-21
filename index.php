<?php
include "dao/pdo.php";
include "dao/san-pham.php";
include "view/header.php";
if ((isset($_GET['act']))&&($_GET['act']!="")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'about':
            include "view/about.php";
            break;
        case 'blog':
            include "view/blog.php";
            break;
        case 'shop':
            include "view/shop.php";
            break;
        case 'pages':
            include "view/about.php";
            break;
        case '404':
            include "view/404.php";
            break;
        case 'cart':
            include "view/cart.php";
            break;
        case 'checkout':
            include "view/checkout.php";
            break;
        case 'contact':
            include "view/contact.php";
            break;
        case 'faq':
            include "view/faq.php";
            break;
        case 'my-account':
            include "view/my-account.php";
            break;
        case 'product':
            include "view/product.php";
            break;
        case 'wishlist':
            include "view/wishlist.php";
            break;
        default:
            include "view/home.php"; 
            break;
    }
}else {
    include "view/home.php"; 
}
include "view/footer.php";
?>