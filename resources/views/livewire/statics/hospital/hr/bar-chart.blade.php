<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bar Chart in Laravel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  {{-- <h2 style="text-align:center;">Statics Of Doctor Department and Speciality</h2> --}}
  <div class="">
    <div class="panel-heading"></div>
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
            text: 'Doctors availability vs Department'
            },
            xAxis: [
                {
                    categories: <?= $terms ?>,
                    crosshair: true
                }
            ],
            yAxis: [
                {
                    min: 0,
                    title: {
                        text: 'Doctors Availabile'
                }
                }
            ],
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}  Doctors </span><table>',
                pointFormat: '<tr><td style="color:{catagories.color};padding:0">{categories.name}: </td>' +
                    '<td style="padding:0"><b>{point.y}</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0.2
                }
            },
            series: [
            {
                name: 'Major Departments',
               
                barWidth: '5%',
                data: [
                    {{$opd_count}},
                    {{$ipd_count}}, 
                    {{$emergency_count}},
                    {{$rad_count}},
                    {{$gdoc_count}},
                    {{$eye_count}},
                    {{$mind_count}},
                    {{$skel_count}},
                    {{$nerve_count}},
                    
                ]
                

            }
        ]
        });
    });
</script>

</body>
</html>