<div class="row">
<div class="container">
    <div class="page-title">
        <div class="card-header text-center bg-dark text-white ">DANH SÁCH BÌNH LUẬN CHI TIẾT</div>
    </div>
    <div class="box box-primary">
        <div class="box-body">
            <form action="" method="post" class="table-responsive">
                <table width="100%" class="table table-hover table-bordered text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th>Nội dung</th>
                            <th>Ngày BL</th>
                            <th>Người BL</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($listbinhluanct as $binhluan) {
                            extract($binhluan);
                        ?>
                        <tr>
                            <td><?= $noi_dung ?></td>
                            <td><?= $ngay_binh_luan ?></td>
                            <td><?= $ten_dang_nhap ?></td>
                            <td class="text-end">
                                <a href="index.php?act=xoabinhluan&id_binh_luan=<?= $id_binh_luan ?>&ten_dang_nhap=<?= $ten_dang_nhap ?>"
                                    class="btn btn-outline-danger btn-rounded"><i
                                        class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>

                </table>
                <a class="btn btn-dark" href="index.php?act=listbinhluan">Quay lại</a>
            </form>
        </div>
    </div>
</div>
</div>