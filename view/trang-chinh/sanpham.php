<div class="container">
     <div class="row">
         <div class="col">
             <nav aria-label="breadcrumb">
                 <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                     <li class="breadcrumb-item"><a href="index.php?act=sanpham">Sản phẩm</a></li>
                 </ol>
             </nav>
         </div>
     </div>
 </div>
 <div class="container">
     <div class="row">
         <div class="col-12 col-sm-3">
             <div class="bg-light mb-3">
                 <?php include 'view/san-pham/tim-kiem.php'; ?>
                 <!-- Danh mục -->
                 <div id="accordion" role="tablist">
                     <?php include 'view/san-pham/danh-muc.php'; ?>
                     <?php include 'view/san-pham/tim-kiem-theo-gia.php'; ?>
                 </div>
             </div>

         </div>
         <!-- Sản phẩm -->
         <div class="col">
             <h5 class="alert-secondary pt-3 pb-3 pl-sm-4 shadow-sm text-center ">
                 <?= $title_site ?></h5>
             <div class="row">
                 <?php foreach ($items as $item) :
                        extract($item);
                        $idsanpham = $item['id_sanpham'];
                        if ($gia > 0) {
                            $percent_discount = number_format($giam_gia / $gia * 100);
                        } else {
                            $percent_discount = 0;
                        }

                    ?>
                 <div class="col-12 col-md-6 col-lg-4 mt-3">
                     <div class="card text-center product-card pb-2">
                         <div class="product-badge text-danger bg-warning">
                             <?= $giam_gia == 0 ? '' : '-' . $percent_discount . '%' ?>
                         </div>
                         <a class="product-thumb" href="index.php?act=sanphamct&id_sanpham=<?php echo $id_sanpham ?>"
                             data-abc="true">
                             <img class="card-img-top product-img object-fit-contain"
                                src="<?php echo 'uploads/'.$anh_sanpham ?>" alt="Ảnh sản phẩm">
                         </a>
                         <div class="card-body p-0 pt-3 px-2">
                             <h3 class="product-title mh-60">
                                 <a href="index.php?act=sanphamct&ma_hh=<?php echo $id_sanpham ?>">
                                     <?= $ten_sanpham ?>
                                 </a>
                             </h3>
                             <div class="product-price">
                                 <div class="col d-flex justify-content-center align-items-center">
                                     <del class="d-block text-muted fz-14"><?= number_format($gia, 0, ',') ?>đ</del>
                                     <p class="text-danger font-weight-bold fz-20 d-block ml-3 mb-0">
                                         <?= number_format($gia - $giam_gia, 0, ',') ?>đ</p>
                                 </div>
                             </div>
                             <div class="col m-2">
                                     <form action="index.php?act=addtocart" method="POST">
                                        <input type="hidden" name="id_sanpham" value="<?=$id_sanpham?>">
                                        <input type="hidden" name="ten_sanpham" value="<?=$ten_sanpham?>">
                                        <input type="hidden" name="anh_sanpham" value="<?=$anh_sanpham?>">
                                        <input type="hidden" name="gia" value="<?=$gia?>">
                                        <input type="submit" name="addtocart" value="ADD TO CART"  class=" btn btn-outline-primary btn-sm"/> 
                                     </form>
                             </div>
                         </div>
                     </div>
                 </div>
                 <?php endforeach; ?>

             </div>
         </div>

     </div>
 </div>
 <br>

