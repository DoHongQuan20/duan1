<style>
    
</style>
<div class="col-sm-8 nd bg">
    <script src="https://www.gstatic.com/charts/loader.js"></script>


    <div id="myChart" style="width:100%; max-width:600px; height:500px;background-color: #ccc;">
    </div>

    <script>
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['danhmuc', 'số lượng sản phẩm'],
                <?php
                $tongdm = count($listthongke);
                $i = 1;
                $echo = '';
                foreach ($listthongke as $thongke) {
                    extract($thongke);
                    if ($i == $tongdm) $dauphay = "";
                    else $dauphay = ",";
                    $echo .=  "['" . $thongke['tendm'] . "', " . $thongke['counthh'] . "],";

                    $i += 1;
                }
                // echo $echo;
                echo ($echo);
                ?>


            ]);
            var options = {
                'title': 'Biểu đồ sản phẩm',
                'width': 950,
                'height': 500,
                is3D:true
            };


            // Draw
            const chart = new google.visualization.PieChart(document.getElementById('myChart'));
            chart.draw(data, options);

        }
    </script>

</div>