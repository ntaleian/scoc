//[Dashboard Javascript]

//Project:	Indusui admin - Responsive Admin Template
//Primary use:   Used only for the main dashboard (index.html)

$(function () {

  'use strict';
	
		//bootstrap WYSIHTML5 - text editor
		$('.textarea').wysihtml5();	
	
		$('.dash-chat').slimScroll({
			height: '420'
		  });
	
	
	
	
		var optionDonut = {
		  colors : ['#0055c9','#fc9208', '#7c096a'],
		  chart: {
			  type: 'donut',
			  width: '100%'
		  },
		  dataLabels: {
			enabled: false,
		  },
		  plotOptions: {
			pie: {
			  donut: {
				size: '55%',
			  },
			  offsetY: 20,
			},
			stroke: {
			  colors: undefined
			}
		  },
		  series: [21, 23, 19],
		  labels: ['Technical', 'Accounts', 'Other'],
		  legend: {
			position: 'bottom',
			offsetY: 0
		  }
		}

		var donut = new ApexCharts(
		  document.querySelector("#donut"),
		  optionDonut
		)
		donut.render();

	
		var options = {
            chart: {
                height: 395,
                type: 'bar',
            },
			colors : ['#4029a7','#128c80', '#f3000b'],
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '55%',
                    endingShape: 'rounded'	
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            series: [{
                name: 'Total',
                data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
            }, {
                name: 'Open',
                data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
            }, {
                name: 'Close',
                data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
            }],
            xaxis: {
                categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
            },
            fill: {
                opacity: 1

            },
            tooltip: {
                y: {
                    formatter: function (val) {
                        return val + " Ticket"
                    }
                }
            }
        }

        var chart = new ApexCharts(
            document.querySelector("#ticketoverview"),
            options
        );

        chart.render();
	
	
		// bradcrumb section
	
		$('#thismonth').sparkline([8, 5, 4, 7, 9, 7, 10, 9], {
				type: 'bar',
				height: '35',
				barWidth: '4',
				resize: true,
				barSpacing: '4',
				barColor: '#4029a7'
			});
		$('#lastyear').sparkline([8, 5, 4, 7, 9, 7, 10, 9], {
				type: 'bar',
				height: '35',
				barWidth: '4',
				resize: true,
				barSpacing: '4',
				barColor: '#f3000b'
			});
	
	
}); // End of use strict

