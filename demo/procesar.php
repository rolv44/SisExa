<?php
//$preguntas = json_decode($_GET['pregunta'], true);
/*
$respuestas = json_decode($_GET['respuesta'], true);
    print_r($preguntas[2]);
$preguntas=$_GET['pregunta'];
for($i=0;$i<count($preguntas);$i++){
  echo $preguntas[$i];
} 
for($i=0;$i<count($preguntas);$i++){
  echo $preguntas[$i]."<br>";
}
*/
$lista=array();
$listaIdP=array();
$op=true;
$i=1;
while($op){
  $n="radiobtn".$i;
  $ni="h".$i;
  if(isset($_POST[$n])){
    array_push($lista,$_POST[$n]);
    array_push($listaIdP,$_POST[$ni]);
  }else{
    $op=false;
  }
  $i++;
}
/*
echo "<h4>TOTAL: ".count($lista)."</h4>";
for($j=0;$j<count($lista);$j++){
  echo $lista[$j]." ---".$listaIdP[$j]."<br>";
}
*/


?>
<html>

<head>
    <title>Radar Chart</title>
    <link rel="stylesheet" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script src="../bootstrap-3.3.7-dist/js/bootstrap.js"></script>
    
    <script src="Chart.js-2.7.1/dist/Chart.bundle.js"></script>
    <script src="Chart.js-2.7.1/samples/utils.js"></script>
    <style>
    canvas {
        -moz-user-select: none;
        -webkit-user-select: none;
        -ms-user-select: none;
    }
    </style>
</head>



<body>
    <div id="canvas-holder" style="width:40%">
        <canvas id="chart-area" />
    </div>
    <button id="randomizeData">Randomize Data</button>
    <button id="addDataset">Add Dataset</button>
    <button id="removeDataset">Remove Dataset</button>
    <button id="addData">Add Data</button>
    <button id="removeData">Remove Data</button>
    <script>
    var randomScalingFactor = function() {
        return Math.round(Math.random() * 100);
    };

    var config = {
        type: 'doughnut',
        data: {
            datasets: [{
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                ],
                backgroundColor: [
                    window.chartColors.red,
                    window.chartColors.orange,
                    window.chartColors.yellow,
                    window.chartColors.green,
                    window.chartColors.blue,
                ],
                label: 'Dataset 1'
            }],
            labels: [
                "Red",
                "Orange",
                "Yellow",
                "Green",
                "Blue"
            ]
        },
        options: {
            responsive: true,
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: 'Chart.js Doughnut Chart'
            },
            animation: {
                animateScale: true,
                animateRotate: true
            }
        }
    };

    window.onload = function() {
        var ctx = document.getElementById("chart-area").getContext("2d");
        window.myDoughnut = new Chart(ctx, config);
    };

    document.getElementById('randomizeData').addEventListener('click', function() {
        config.data.datasets.forEach(function(dataset) {
            dataset.data = dataset.data.map(function() {
                return randomScalingFactor();
            });
        });

        window.myDoughnut.update();
    });

    var colorNames = Object.keys(window.chartColors);
    document.getElementById('addDataset').addEventListener('click', function() {
        var newDataset = {
            backgroundColor: [],
            data: [],
            label: 'New dataset ' + config.data.datasets.length,
        };

        for (var index = 0; index < config.data.labels.length; ++index) {
            newDataset.data.push(randomScalingFactor());

            var colorName = colorNames[index % colorNames.length];;
            var newColor = window.chartColors[colorName];
            newDataset.backgroundColor.push(newColor);
        }

        config.data.datasets.push(newDataset);
        window.myDoughnut.update();
    });

    document.getElementById('addData').addEventListener('click', function() {
        if (config.data.datasets.length > 0) {
            config.data.labels.push('data #' + config.data.labels.length);

            var colorName = colorNames[config.data.datasets[0].data.length % colorNames.length];;
            var newColor = window.chartColors[colorName];

            config.data.datasets.forEach(function(dataset) {
                dataset.data.push(randomScalingFactor());
                dataset.backgroundColor.push(newColor);
            });

            window.myDoughnut.update();
        }
    });

    document.getElementById('removeDataset').addEventListener('click', function() {
        config.data.datasets.splice(0, 1);
        window.myDoughnut.update();
    });

    document.getElementById('removeData').addEventListener('click', function() {
        config.data.labels.splice(-1, 1); // remove the label first

        config.data.datasets.forEach(function(dataset) {
            dataset.data.pop();
            dataset.backgroundColor.pop();
        });

        window.myDoughnut.update();
    });
    </script>
</body>

</html>
