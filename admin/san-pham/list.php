<div class = "row">
  <div class="container mt-3">
      <h4 class="mt-5 font-weight-bold text-center">DANH SÁCH SẢN PHẨM</h4>
    <form action="index.php?act=listsanpham" method="POST">
      <select name="id_dm" class="form-select" aria-label="Disabled select example" >
          <option value="0" selected>Tất Cả</option>
          <?php foreach($listdanhmuc as $danhmuc) {
              extract($danhmuc);
              echo '<option value="'.$id_dm.'">'.$ten_dm.'</option>'; 
          } ?>
      </select>
      <input type="search"  name="keyword" placeholder="Nhập từ khóa...">
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
          <th>Số lượng</th>
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
                      <td>'.$so_luong.'</td>
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