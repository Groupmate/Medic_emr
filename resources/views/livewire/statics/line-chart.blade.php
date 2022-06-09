 <body>
      <div id = "container" style = "width: 550px; height: 400px; margin: 0 auto"></div>
      <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"> </script>
      <script src = "https://code.highcharts.com/highcharts.js"></script> 
      <script language = "JavaScript">
         $(document).ready(function() {
            var title = {
               text: ' No Of Users And Doctors Registered In Each Months In Specfic Organizaton '   
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
   
