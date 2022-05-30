
<body>
<div class="mt-10 sm:mt-0">
    <x-guest-layout>
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">

    <strong style="text-align:center"> <h2>Statical Data Of Patients Affected By Major Diseases in All Regions</h2></strong>
        <div class="panel panel-primary">
            <div class="panel-heading">Full Statica In All Regions</div>
            <div class="panel-body">
                <div id="bar-chart"></div>
            </div>
            </div>
         </div>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                text: ''
            },
            xAxis: {
                categories: <?= $terms ?>,
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Number of Patients'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key} Patients</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
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
            series:<?= $data ?>, 

           
        

        });
    });
</script>



<div class="container">
  <h2 style="text-align: center;"></h2>
  <div class="panel panel-primary">
    <div class="panel-heading"></div>
    <div class="panel-body">
        <div id="line-chart"></div>
    </div>
  </div>
</div>

<script>
  $(function(){
    Highcharts.chart('line-chart', {

        title: {
            text: ''
        },

        yAxis: {
            title: {
                text:  'Number of Patients'
            }
        },

        xAxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                  'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
    },

        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },

        series: <?= $data ?>,

        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }

        });
  });
</script>
</body>
     </x-guest-layout>
</div>