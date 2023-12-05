<!-- <?php
    session_start();

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $productId = $_POST['id'];
        $newQuantity = $_POST['quantity'];

        //kiểm tra trong giỏ hàng có tồn tại hay không

        if(!empty($_SESSION['mycart'])){
            $index = array_search($_SESSION['mycart'], 'id_sanpham');

            if($index !== false) {
                $_SESSION['mycart']['$index']['soluong'] = $newQuantity;
            }else{
                echo "Sản phẩm không tồn tại !!!";
            }
        }
    }else{
        echo "Yêu cầu không hợp lệ !!!";
    }

?> -->