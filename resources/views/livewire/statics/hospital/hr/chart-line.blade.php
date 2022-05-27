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
            var title = {
               text: 'Average Temperatures of Cities'   
            };
            var subtitle = {
               text: ''
            };
            var xAxis = {
               categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                  'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            };
            var yAxis = {
               title: {
                  text: 'Number of Appointements (\xB0C)'
               },
               plotLines: [{
                  value: 0,
                  width: 1,
                  color: '#808080'
               }]
            };   
            var tooltip = {
               valueSuffix: '\xB0C'
            }
            var legend = {
               layout: 'vertical',
               align: 'right',
               verticalAlign: 'middle',
               borderWidth: 0
            };
            var series =  [{
                  name: 'Users',
                  data: <?= $data ?>, 
               }, 
               {
                  name: 'Appointments',
                  data:  
               }, 
              
            ];

            var json = {};
            json.title = title;
            json.subtitle = subtitle;
            json.xAxis = xAxis;
            json.yAxis = yAxis;
            json.tooltip = tooltip;
            json.legend = legend;
            json.series = series;
            
            $('#container').highcharts(json);
         });
      </script>
   </body>
   
</html>