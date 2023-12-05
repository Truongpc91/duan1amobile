<div class="container mt-3">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="view/trang-chinh/sanpham.php">Sản phẩm</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Chi tiết</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <!-- Image -->
        <div class="col-12 col-lg-6">
            <div class="card bg-light mb-3">
                <div class="card-body text-center">
                    <a href="#" data-toggle="modal" data-target="#productModal">
                        <!-- Ảnh sản phẩm -->
                        <img class="img-fluid" src="<?php echo 'uploads/'.$anh_sanpham ?>" />
                    </a>
                </div>
            </div>
        </div>

        <!-- Add to cart -->
        <div class="col-12 col-lg-6 add_to_cart_block">
            <div class="card bg-light mb-3">
                <div class="card-body text-center">
                    <h4 class="card-title"><?= $ten_sanpham ?></h4>
                    <div class="product-price">
                        <div class="col d-flex justify-content-center align-items-center">
                            <del class="d-block"><?= number_format($gia, 0, ',') ?>đ</del>
                            <p class="text-danger font-weight-bold d-block ml-3 mb-0">
                                <?= number_format($gia - $giam_gia, 0, ',') ?>đ</p>
                        </div>
                    </div>

                    <form method="POST" action="index.php?act=addtocart">

                        <div class="form-group">
                            <label>Số lượng :</label>
                            <div class="input-group mb-3 justify-content-center">
                                <div class="input-group-prepend">
                                    <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                        data-type="minus" data-field="">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input type="text" class="text-center" id="quantity" name="quantity" min="1" max="100"
                                    value="1" name="soluong">
                                <div class="input-group-append">
                                    <button type="button" class="quantity-right-plus btn btn-success btn-number"
                                        data-type="plus" data-field="">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col m-2">  
                                        <input type="hidden" name="id_sanpham" value="<?=$id_sanpham?>">
                                        <input type="hidden" name="ten_sanpham" value="<?=$ten_sanpham?>">
                                        <input type="hidden" name="anh_sanpham" value="<?=$anh_sanpham?>">
                                        <input type="hidden" name="gia" value="<?=$gia?>">
                                        <input type="submit" name="addtocart" value="THÊM VÀO GIỎ HÀNG"  class="btn btn-danger btn-lg btn-block text-uppercase"/ >   
                             </div>
                    </form>
                    <div class="product_rassurance">
                        <ul class="list-inline">
                            <li class="list-inline-item"><i class="fa fa-truck fa-2x"></i><br />Giao hàng tận nơi</li>
                            <li class="list-inline-item"><i class="fa fa-credit-card fa-2x"></i><br />Bảo mật</li>
                            <li class="list-inline-item"><i class="fa fa-phone fa-2x"></i><br />0384196190</li>
                        </ul>
                    </div>
                    <div class="reviews_product p-3 mb-2 ">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        (4/5)
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Description -->
        <div class="col-12">
            <div class="card border-light mb-3">
                <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-align-justify"></i>
                    Mô tả sản phẩm
                </div>
                <div class="card-body">
                    <p class="card-text"><?= $noi_dung ?></p>
                </div>
            </div>
        </div>
        
        <div class="col-12">
            <div class="card border-light mb-3">
                <div class="card-header bg-primary text-white text-uppercase"><i class="fa-regular fa-comment"></i></i></i>
                    Bình Luận
                </div>
                <div class="card-body">
                    <?php include "view/user/binh-luan.php"; ?>
                </div>
            </div>
        </div>

        <?php include "view/san-pham/san-pham-cung-loai.php"; ?>
    </div>
    
</div>
