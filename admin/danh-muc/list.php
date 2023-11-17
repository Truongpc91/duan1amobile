<div class="container">
    <div class="page-title">
      <div class="card-header text-center bg-dark text-white ">Danh Sách Danh Mục</div>
    </div>
    <div class="box box-primary">
        <div class="box-body">
            <form action="?btn_delete_all" method="post" class="table-responsive">
                <table width="100%" class="table table-hover table-bordered text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID Danh Mục</th>
                            <th>Tên Danh Mục</th>
                            <th><a href="index.php?act=adddm" class="btn btn-success text-white">Thêm mới
                                    <i class="fas fa-plus-circle"></i></a></th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php 
                        foreach ($listdanhmuc as $danhmuc) {
                            extract($danhmuc);
                            $suadanhmuc = "index.php?act=suadanhmuc&id=".$id_dm;
                            $xoadanhmuc = "index.php?act=xoadanhmuc&id=".$id_dm;
                            echo '<tr>
                                    <td>'.$id_dm.'</td>
                                    <td>'.$ten_dm.'</td>
                                    <td>
                                      <a href="'.$suadanhmuc.'"   class="btn btn-outline-info btn-rounded">
                                        <i class="fas fa-pen"></i></a>
                                      <a href="'.$xoadanhmuc.'" class="btn btn-outline-danger btn-rounded" onclick="return checkDelete()">
                                        <i class="fas fa-trash"></i></a>
                                    </td>
                                  </tr>';
                        } ?>
                    </tbody>

                </table>
            </form>
        </div>
    </div>
</div>