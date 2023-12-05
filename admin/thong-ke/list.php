<div class="row">
<div class="container">
    <div class="page-title">
        <h4 class="mt-5 font-weight-bold text-center">THỐNG KÊ GIÁ SẢN PHẨM THEO DANH MỤC</h4>
        <!-- <?php echo $thu ?> -->
    </div>
    <div class="box box-primary">
        <div class="box-body">
            <table width="100%" class="table table-hover table-bordered text-center">
                <thead class="thead-dark">
                    <tr>
                        <th>DANH MỤC</th>
                        <th>SỐ LƯỢNG</th>
                        <th>GIÁ THẤP NHẤT</th>
                        <th>GIÁ CAO NHẤT</th>
                        <th>GIÁ TRUNG BÌNH</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    foreach ($listthongke as $thongke) {
                        extract($thongke);

                    ?>
                    <tr>
                        <td><?= $ten_dm ?></td>
                        <td><?= $so_luong ?></td>
                        <td><?= number_format($gia_min, 0) ?> đ</td>
                        <td><?= number_format($gia_max, 0) ?> đ</td>
                        <td><?= number_format($gia_avg, 0) ?> đ</td>
                    </tr>
                    
                    <?php
                    }

                    ?>
                </tbody>
            </table>
            <a href="index.php?act=bieudo" class="btn btn-info text-white">Xem biểu đồ<i class="fas fa-eye ml-2"></i></a>
        </div>
    </div>
</div>
</div>