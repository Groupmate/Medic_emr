
<body>
<div class="mt-10 sm:mt-0">
   
        <div class="panel panel-primary">
            <div class="panel-body">
                <div id="container"></div>
            </div>
            </div>
         </div>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
         <script src="https://code.highcharts.com/highcharts.js"></script>
         <script src="https://code.highcharts.com/modules/exporting.js"></script>
         <script src="https://code.highcharts.com/modules/export-data.js"></script>
         <script src="https://code.highcharts.com/modules/accessibility.js"></script>

         <div id = "container" class=" ml-2 px-7 py-8" ></div>
         <script language = "JavaScript">
            $(document).ready(function() {
               var chart = {
                  plotBackgroundColor: null,
                  plotBorderWidth: null,
                  plotShadow: false
               };
               var title = {
                  text: '  '   
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
 
</div>