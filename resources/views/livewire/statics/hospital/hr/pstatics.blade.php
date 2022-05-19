<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bar Chart in Laravel 8 - Online Web Tutor</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 style="text-align:center;">Bar Chart in Laravel 8 - Online Web Tutor</h2>
  <div class="panel panel-primary">
    <div class="panel-heading">Bar Chart in Laravel 8</div>
    <div class="panel-body">
        <div id="bar-chart"></div>
    </div>
  </div>
</div>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<script>
    $(function(){
        Highcharts.chart('bar-chart', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Patients Analysis'
            },
            xAxis: {
                categories: <?= $data ?>    ,
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Patients'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key} Patients</span><table>',
                pointFormat: '<tr><td style="color:{catagories.color};padding:0">{catagories.terms}: </td>' +
                    '<td style="padding:0"><b>{point.y}</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: <?= $data ?>
        });
    });
</script>

</body>
</html>