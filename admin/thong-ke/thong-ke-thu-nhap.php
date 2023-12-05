
<a>Thống kê thu nhập theo : <span><?php echo $text; ?></span></a><br>
<form method="POST" action="index.php?act=thongkethunhap">
  <select class="select-date" aria-label="Default select example" name="date">
      <option value="7ngay">1 Tuần</option>
      <option value="30ngay">1 Tháng</option>
      <option value="90ngay">1 Qúy</option>
      <option value="365ngay">1 Năm</option>
  </select>
  <input type="submit" name="search" value="Xem">
</form>

<div id="chart" style="width:1000px; height: 250px; margin-left:400px;"></div>

  <script type="text/javascript">
    $(document).ready(function() {
      thongke();
       var char = new Morris.Area({
        element: 'chart',
      
        // xkey: 'date',

        data: [
          <?php foreach ($val as $key) { ?>
             { date:'<?=$key['ngay_dat_hang']?>', oder:'<?=$key['don_hang']?>',sales:'<?=$key['doanh_thu']?>',quantity:'<?=$key['so_luong_ban']?>'},
            <?php  }  ?>     
        ],
        xkey: 'date',
        
        ykeys: ['date','oder','sales','quantity'],
      
        labels: ['Ngày bán','Đơn hàng', 'Doanh thu', 'Số lượng bán ra'],
      });

      $('.select-date').change(function(){
        var thoigian = $(this).val();
        if(thoigian =='7ngay'){
          var text = '1 Tuần Qua';
          $("#text-date").text(text);
        }else if(thoigian =='30ngay'){
          var text = '1 Tháng Qua';
          $("#text-date").text(text);
        }else if(thoigian =='90ngay'){
          var text = '1 Qúy Qua';
          $("#text-date").text(text);
        }else{
          var text = '1 Năm Qua';
          $("#text-date").text(text);
        }
        
        $.ajax({
          url:"thong-ke/thong-ke-thu-nhap.php",
          method:"POST",
          dataType:"json",
          data:{thoigian:thoigian},
          success:function(data){
            char.setData(data);
            $('#text-data').text(text);
          }
        });
      });

      function thongke(){
        var text = '7 ngày qua';
        $("#text-date").text(text);
        // $.ajax({
        //   url:"index.php?act=thongkethuthap",
        //   method:"POST",
        //   dataType:"JSON",

        //   success: function(data){
        //     char.setData(data);
        //     $("#text-date").text(text);
        //   }
        // });
      }
    });
  </script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js">
 <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>