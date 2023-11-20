<div class="card mt-3">
    <div class="card-header bg-primary text-white text-uppercase" role="tab" id="headingTwo">
        <h6 class="mb-0">
            <a class="text-white d-block collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false"
                aria-controls="collapseTwo">
                <i class="fas fa-heart text-danger"></i> Top 10 yêu thích
            </a>
        </h6>
    </div>
    <div id="collapseTwo" class="collapse show" role="tabpanel" aria-labelledby="headingTwo">
        <?php 
            $sp_top10 = san_pham_select_top10();
        ?>
        <ul class="list-group category_block">
            <?php foreach ($sp_top10 as $sp) {
                extract($sp);
                $linksp = "index.php?act=sanphamct&id_sanpham=".$id_sanpham;
                echo '<li class="list-group-item px-2 py-3">
                        <a class="d-flex align-items-center"
                            href="'.$linksp.'">
                            <span class="ml-2 d-blocke">'.$ten_sanpham.'</span>
                        </a>
                    </li>';
             } ?>
        </ul>
    </div>
</div>
<br>