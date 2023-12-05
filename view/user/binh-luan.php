<div class="col-12" id="reviews">
    <div class="card border-light mb-3">
        <div class="card-body">
            <?php foreach ($binh_luan_list as $bl) : ?>
            <div class="review">
                <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                <meta itemprop="datePublished" content="01-01-2016"><?= $bl['ngay_binh_luan'] ?>              
                by <b><?= $bl['ten_dang_nhap'] ?></b>
                <p class="blockquote">
                <p class="mb-0"><?= $bl['noi_dung'] ?></p>
                </p>
                <hr>
            </div>
            <?php endforeach ?>
        </div>
        
        <?php

        if (!isset($_SESSION['user'])) {
            echo '<h5 class="text-center"><i class="text-danger">Đăng nhập để bình luận về sản phẩm này</i></h5>';
        } else {

        ?>
        <div class="comment-box text-center">
            <h4>Để lại bình luận</h4>
            <form action="index.php?act=sanphamct" method="POST">
                <div class="rating">
                    <input type="radio" name="danh_gia" value="5" id="5" checked>
                    <label for="5">☆</label>
                    <input type="radio" name="danh_gia" value="4" id="4">
                    <label for="4">☆</label>
                    <input type="radio" name="danh_gia" value="3" id="3">
                    <label for="3">☆</label>
                    <input type="radio" name="danh_gia" value="2" id="2">
                    <label for="2">☆</label>
                    <input type="radio" name="danh_gia" value="1" id="1">
                    <label for="1">☆</label>
                </div>
                <div class="comment-area">
                    <textarea class="form-control" name="noi_dung" placeholder="Nội dung..." rows="4"></textarea>
                </div>
                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-success send px-5" name="binhluan">Bình Luận</button>
                </div>
            </form>
        </div>
        
        <?php
           
        } ?>
    </div>
</div>