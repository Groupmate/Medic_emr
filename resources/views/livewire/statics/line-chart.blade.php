 <body>
      <div id = "container" style = "width: 550px; height: 400px; margin: 0 auto"></div>
      <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"> </script>
      <script src = "https://code.highcharts.com/highcharts.js"></script> 
      <script language = "JavaScript">
         $(document).ready(function() {
            var title = {
               text: 'Average No Of Users And Patients In Each Months '   
            };
            var subtitle = {
               text: 'Source: worldClimate.com'
            };
            var xAxis = {
               categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                  'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            };
            var yAxis = {
               title: {
                  text: 'Number Of Users '
               },
               plotLines: [{
                  value: 0,
                  width: 1,
                  color: '#808080'
               }]
            };   
            var tooltip = {
               valueSuffix: ''
            };
            var legend = {
               layout: 'vertical',
               align: 'right',
               verticalAlign: 'middle',
               borderWidth: 0
            };
            var series =  [{
                  name: 'Users',
                  data:<?= $data ?>
               }, 
               {
                  name: 'New York',
                  data: [-0.2, 0.8, 5.7, 11.3, 17.0, 22.0, 24.8,
                     24.1, 20.1, 14.1, 8.6, 2.5]
               }, 
               {
                  name: 'London',
                  data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 
                     16.6, 14.2, 10.3, 6.6, 4.8]
               }
            ];
            

            var json = {};
            json.title = title;
            json.subtitle = subtitle;
            json.xAxis = xAxis;
            json.yAxis = yAxis;
     
            json.legend = legend;
            json.series = series;
            
            $('#container').highcharts(json);
         });
      </script>
   </body> 
   
