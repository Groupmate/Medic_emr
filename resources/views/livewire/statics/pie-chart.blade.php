<!doctype html>
<html lang="en">

<head>
    <title>Google Pie Chart Integration in Laravel 9</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Month Name', 'Registered User Count'],
                
                @php
                foreach ($pieChart as $d) {
                    echo "['" . $d->month_name . "', " . $d->count . '],';
                }
                @endphp
            ]);

            var options = {
                title: 'Users Detail',
                is3D: false,
            };

            var chart = new google.visualization.PieChart(document.getElementById('pie-chart'));

            chart.draw(data, options);
        }

    </script>
</body>

</html>
<html>
   <head>
      <title>Highcharts Tutorial</title>
      <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
      <script src = "https://code.highcharts.com/highcharts.js"></script>  
   </head>
   
   <body>
      <div id = "container" style = "width: 550px; height: 400px; margin: 0 auto"></div>
      <script language = "JavaScript">
         $(document).ready(function() {
            var chart = {
               plotBackgroundColor: null,
               plotBorderWidth: null,
               plotShadow: false
            };
            var title = {
               text: 'Browser market shares at a specific website, 2014'   
            };      
            var tooltip = {
               pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            };
            var plotOptions = {
               pie: {
                  allowPointSelect: true,
                  cursor: 'pointer',
                  
                  dataLabels: {
                     enabled: true,
                     format: '<b>{point.name}%</b>: {point.percentage:.1f} %',
                     style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor)||
                        'black'
                     }
                  }
               }
            };
            var series = [{
               type: 'pie',
               name: 'Browser share',
               data: [
                  ['Firefox',   45.0],
                  ['IE',       26.8],
                  {
                     name: 'Chrome',
                     y: 12.8,
                     sliced: true,
                     selected: true
                  },
                  ['Safari',    8.5],
                  ['Opera',     6.2],
                  ['Others',   0.7]
               ]
            }];
            // Radialize the colors
            Highcharts.getOptions().colors = Highcharts.map(
               Highcharts.getOptions().colors, function (color) {
                  return {
                     radialGradient: { cx: 0.5, cy: 0.3, r: 0.7 },
                     stops: [
                        [0, color],
                        [1, Highcharts.Color(color).brighten(-0.3).get('rgb')] // darken
                     ]
                  };
               }
            );
	  
            var json = {};   
            json.chart = chart; 
            json.title = title;     
            json.tooltip = tooltip;  
            json.series = series;
            json.plotOptions = plotOptions;
            $('#container').highcharts(json);  
         });
      </script>
   </body>
   
</html>