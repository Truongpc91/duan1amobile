<div class="row">
<div class="container">
    <div class="page-title">
        <h4 class="mt-5 font-weight-bold text-center">DANH SÁCH BÌNH LUẬN</h4>
    </div>
    <div class="box box-primary">
        <div class="box-body">
            <table width="100%" class="table table-hover table-bordered text-center">
                <thead class="thead-dark">
                    <tr>
                        <th>Sản Phẩm</th>
                        <th>Nội dung</th>
                        <th>Cũ nhất</th>
                        <th>Mới nhất</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    foreach ($listbinhluan as $binhluan) {
                        extract($binhluan);

                    ?>
                    <tr>
                        <td><?= $ten_sanpham ?></td>
                        <td><?= $so_luong ?></td>
                        <td><?= $cu_nhat ?></td>
                        <td><?= $moi_nhat ?></td>
                        <td class="text-end">
                            <a href="index.php?act=listblct&id_sanpham=<?= $id_sanpham ?>"
                                class="btn btn-outline-info btn-rounded">Chi tiết <i
                                    class="fas fa-info-circle"></i></i></a>
                        </td>
                    </tr>
                    <?php
                    }

                    ?>
                </tbody>

            </table>
        </div>
    </div>
</div>
</div>