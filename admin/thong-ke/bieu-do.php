
</head>

<body>
    <div class="card-header text-center bg-dark text-white ">BIỂU ĐỒ THỐNG KÊ</div>
    <div id="piechart_3d" style="
     margin-left:500px;
     margin-top:50px;
     width: 900px;
     height: 500px;"></div>
</body>

</html>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load("current", {
    packages: ["corechart"]
});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Loại', 'Số Lượng'],
        <?php
            foreach ($listthongke as $thongke) {
                // extract($thongke);
                echo "['$thongke[ten_dm]',$thongke[so_luong]],";
            }
            ?>
    ]);

    var options = {
        title: 'TỶ LỆ HÀNG HÓA',
        is2D: true,
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
    chart.draw(data, options);
}
</script>