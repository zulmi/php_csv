<!doctype html>
<html>

<head>
    <title>Company Detail</title>
    <link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
    <script src="public/javascript/Chart.bundle.js"></script>
    <script src="public/javascript/utils.js"></script>
    <style>
    canvas {
        -moz-user-select: none;
        -webkit-user-select: none;
        -ms-user-select: none;
    }
    </style>
</head>

<body>
    <?php
            require "reader.php";
            $detailRow = -1;
            $data = getArray();
            $header = array_shift($data);
            if(isset($_GET['detail'])){
                $detailRow = $_GET['detail']-1;
                $arr = $data["$detailRow"];
                foreach ($arr as $key => $value) {
                    if($key>9){
                        $arr[$key] = str_replace(',', '', $value);
                        $arr[$key] = str_replace('%', '', $arr[$key]);
                        $arr[$key] = str_replace(' ', '', $arr[$key]);
                        if(!is_numeric($arr[$key])){
                            $arr[$key]=0;
                        }                        
                    }
                }
                $y14 = array(
                        $arr[10],$arr[12],$arr[14],$arr[18],$arr[21],$arr[24]
                    );
                $y15 = array(
                        $arr[11],$arr[13],$arr[16],$arr[17],$arr[22],$arr[23]
                    );
                $sy14 = array(
                        $arr[19],$arr[25]
                    );
                $sy15 = array(
                        $arr[20],$arr[26]
                    );
            }
        ?>
        <div class="panel panel-info col-md-12">
            <div class="panel-heading">Company Detail</div>
            <div class="panel-body">
                <div class="col-md-6">
                    <?php
                        for($i=0;$i<5;$i++){
                            ?>
                                <div class="form-group">
                                    <label class="control-label"><?php echo $header[$i]; ?>: </label>
                                    <label class="control-label"><?php echo $arr[$i]; ?></label>
                                </div>

                            <?php
                        }
                    ?>
                </div>                
                <div class="col-md-6">
                    <?php
                        for($i=6;$i<10;$i++){
                            ?>
                                <div class="form-group">
                                    <label class="control-label"><?php echo $header[$i]; ?>: </label>
                                    <label class="control-label"><?php echo $arr[$i]; ?></label>
                                </div>

                            <?php
                        }
                    ?>
                </div>                
                <hr/>
                <div id="container" style="width:75%;">
                    <canvas id="canvas"></canvas>
                </div>
                <div id="container" style="width:75%;">
                    <canvas id="canvas2"></canvas>
                </div>                
            </div>
        </div>

    <script>
        var param = ["REVENUE", "DEPOSIT_EOP", "TOTAL_LIMITS_EOP", "RWA", "NPAT_ALLOCEQ", "REGULATORY_CAPITAL_AVG"];
        var param2 = ["REV/ROE", "ROE"];
        var color = Chart.helpers.color;
        var y14 = JSON.parse('<?php echo json_encode($y14); ?>');
        var y15 = JSON.parse('<?php echo json_encode($y15); ?>');
        var sy14 = JSON.parse('<?php echo json_encode($sy14); ?>');
        var sy15 = JSON.parse('<?php echo json_encode($sy15); ?>');
        var barChartData = {
            labels: param,
            datasets: [{
                label: 'Y14',
                backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
                borderColor: window.chartColors.red,
                borderWidth: 1,
                data: y14
            }, {
                label: 'Y15',
                backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
                borderColor: window.chartColors.blue,
                borderWidth: 1,
                data: y15
            }]

        };
        var barChartData2 = {
            labels: param2,
            datasets: [{
                label: 'Y14',
                backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
                borderColor: window.chartColors.red,
                borderWidth: 1,
                data: sy14
            }, {
                label: 'Y15',
                backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
                borderColor: window.chartColors.blue,
                borderWidth: 1,
                data: sy15
            }]

        };

        window.onload = function() {
            var ctx = document.getElementById("canvas").getContext("2d");
            var ctx2 = document.getElementById("canvas2").getContext("2d");
            window.myBar = new Chart(ctx, {
                type: 'bar',
                data: barChartData,
                options: {
                    responsive: true,
                    legend: {
                        position: 'bottom'
                    },
                    hover: {
                        mode: 'label'
                    },
                    scales: {
                        yAxes: [{
                                display: true,
                                ticks: {
                                    beginAtZero: true,
                                    steps: 200,
                                    stepValue: 100
                                }
                            }]
                    },
                    title: {
                        display: true,
                        text: 'Comparison Between Y14 And Y15'
                    }
                }
            });
            window.myBar2 = new Chart(ctx2, {
                type: 'bar',
                data: barChartData2,
                options: {
                    responsive: true,
                    legend: {
                        position: 'bottom'
                    },
                    hover: {
                        mode: 'label'
                    },
                    scales: {
                        yAxes: [{
                                display: true,
                                ticks: {
                                    beginAtZero: true,
                                    steps: 200,
                                    stepValue: 100
                                }
                            }]
                    },
                    title: {
                        display: true,
                        text: 'Comparison Between Y14 And Y15'
                    }
                }
            });

        };    
        </script>
</body>

</html>
