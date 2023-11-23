<div class="container mt-3">
    <div class="row">
        <div class="col-sm">
            <div class="card">
                <div class="card-header bg-primary text-white text-uppercase text-center">
                    <i class="fas fa-heart"></i> Top 10 yêu thích
                </div>
                <div class="card-body">
                    <div class="row">
                    <?php $listtop10 = san_pham_select_top10(); ?>
                    <?php foreach ($listtop10 as $sanpham) {
                                extract($sanpham);
                                $linksp = "index.php?act=sanphamct&id_sanpham=".$id_sanpham;
                                $img = 'uploads/'.$anh_sanpham;
                                echo '<div class="col-12 col-md-6 col-lg-3 mt-3">
                                <div class="card text-center product-card pb-2">
                                    <a class="product-thumb"
                                        href="'.$linksp.'" data-abc="true">
                                        <img class="card-img-top product-img object-fit-contain"
                                            src="'.$img.'" alt="Ảnh sản phẩm">
                                    </a>
                                    <div class="card-body p-0 pt-2 px-2">
                                        <h3 class="product-title mh-60">
                                            <a href="'.$linksp.'">
                                                '.$ten_sanpham.'
                                            </a>
                                        </h3>
                                        <div class="product-price">
                                            <div class="col d-flex justify-content-center align-items-center">
                                                <del class="d-block fz-14">'.$gia.'đ </del>
                                                <p class="text-danger font-weight-bold fz-20 d-block ml-3 mb-0">
                                                '.$gia.'đ</p>
                                            </div>
                                        </div>
                                        <div class="col m-2">
                                            <form action="index.php?act=addtocart" method="POST">
                                                <input type="hidden" name="id_sanpham" value="'.$id_sanpham.'">
                                                <input type="hidden" name="ten_sanpham" value="'.$ten_sanpham.'">
                                                <input type="hidden" name="anh_sanpham" value="'.$anh_sanpham.'">
                                                <input type="hidden" name="gia" value="'.$gia.'">
                                                <input type="submit" name="addtocart" value="ADD TO CART"  class=" btn btn-outline-primary btn-sm"/> 
                                            </form>
                                        </div>
                                    </div>
 				                </div>
                            </div>';
                    } ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>