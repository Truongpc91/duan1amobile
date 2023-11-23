<div class = "row">
  <div class="container mt-3">
    <h2>Danh Sách Sản phẩm</h2>
    <form action="index.php?act=listsanpham" method="POST">
      <select name="id_dm" class="form-select">
          <option value="0" selected>Tất Cả</option>
          <?php foreach($listdanhmuc as $danhmuc) {
              extract($danhmuc);
              echo '<option value="'.$id_dm.'">'.$ten_dm.'</option>'; 
          } ?>
      </select>
      <input type="text" name="keyword" class="form-control">
      <input type="submit" value="OK" name="listok" class="btn btn-outline-secondary" >
    </form>
    <table class="table">
      <thead class="table-dark">
        <tr>
          <th>ID Sản Phẩm</th>
          <th>Tên Sản Phẩm</th>
          <th>Giá</th>
          <th>Hình</th>
          <th>Màu Sắc</th>
          <th>Dung Lượng</th>
          <th>Nội Dung</th>
          <th>ID Danh Mục</th>
          <th><a href="index.php?act=addsanpham" class="btn btn-success text-white">Thêm mới
                                      <i class="fas fa-plus-circle"></i></a></th>
        </tr>
      </thead>
      <tbody>
      <?php 
          foreach ($listsanpham as $sanpham) {
              extract($sanpham);
              $suasanpham = "index.php?act=suasanpham&id=".$id_sanpham;
              $xoasanpham = "index.php?act=xoasanpham&id=".$id_sanpham;
              $hinhpath = "../uploads/".$anh_sanpham;
              if(is_file($hinhpath)) {
                  $anh_sanpham = "<img src='".$hinhpath."' height='80'>";
              }else {
                  $anh_sanpham = "no photo";
              }
              echo '<tr>
                      <td>'.$id_sanpham.'</td>
                      <td>'.$ten_sanpham.'</td>
                      <td>'.$gia.'</td>
                      <td>'.$anh_sanpham.'</td>
                      <td>'.$color.'</td>
                      <td>'.$dung_luong.'</td>
                      <td>'.$noi_dung.'</td>
                      <td>'.$id_dm.'</td>
                      <td>
                        <a href="'.$suasanpham.'"><input type="button" value="Sửa" class="btn btn-outline-secondary"></a>
                        <a href="'.$xoasanpham.'"><input type="button" value="Xóa" class="btn btn-outline-secondary"></a>
                      </td>
                    </tr>';
          } ?>
      </tbody>
      </table>
  </div>
</div>