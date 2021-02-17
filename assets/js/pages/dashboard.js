//[Dashboard Javascript]

//Project:	Indusui admin - Responsive Admin Template
//Primary use:   Used only for the main dashboard (index.html)

$(function () {

  'use strict';
	
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
	
		// Counter
	
		$('.countnm').each(function () {
			$(this).prop('Counter',0).animate({
				Counter: $(this).text()
			}, {
				duration: 5000,
				easing: 'swing',
				step: function (now) {
					$(this).text(Math.ceil(now));
				}
			});
		});
	
		
		$("#barchart4").sparkline([32,24,26,24,32,26,40,34,22,24], {
			type: 'bar',
			height: '188',
			width: '70%',
			barWidth: 8,
			barSpacing: 4,
			barColor: '#ffffff',
		});

		$("#linearea3").sparkline([32,24,26,24,32,26,40,34,22,24], {
			type: 'line',
			width: '70%',
			height: '188',
			lineColor: '#ffffff',
			fillColor: '#ffffff',
			lineWidth: 1,
		});
		
	
		var options = {
				chart: {
					height: 320,
					type: 'area',
				},
				colors:['#4029a7', '#f3000b'],
				dataLabels: {
					enabled: false
				},
				stroke: {
					curve: 'smooth'
				},
				series: [{
					name: 'series1',
					data: [31, 40, 28, 51, 42, 109, 100]
				}, {
					name: 'series2',
					data: [11, 32, 45, 32, 34, 52, 41]
				}],

				xaxis: {
					type: 'datetime',
					categories: ["2018-09-19T00:00:00", "2018-09-19T01:30:00", "2018-09-19T02:30:00", "2018-09-19T03:30:00", "2018-09-19T04:30:00", "2018-09-19T05:30:00", "2018-09-19T06:30:00"],                
				},
				tooltip: {
					x: {
						format: 'dd/MM/yy HH:mm'
					},
				}
			}

			var chart = new ApexCharts(
				document.querySelector("#overview-chart"),
				options
			);

			chart.render();
	
		
			window.Apex = {
			  stroke: {
				width: 3,
				  curve: 'smooth'
			  },
			  colors:['#ffffff'],
			  markers: {
				size: 0
			  },
			  tooltip: {
				  theme: 'dark',
				fixed: {
				  enabled: true,
				},
			  }
			};
	
		    var options1 = {
			  chart: {
				type: 'line',				
				height: 100,
				sparkline: {
				  enabled: true
				}
			  },
			  series: [{
				data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54]
			  }],
			  tooltip: {
				fixed: {
				  enabled: false
				},
				x: {
				  show: false
				},
				y: {
				  title: {
					formatter: function (seriesName) {
					  return ''
					}
				  }
				},
				marker: {
				  show: false
				}
			  }
			}

			var options2 = {
			  chart: {
				type: 'line',
				height: 100,
				sparkline: {
				  enabled: true
				}
			  },
			  series: [{
				data: [12, 14, 2, 47, 42, 15, 47, 75, 65, 19, 14]
			  }],
			  tooltip: {
				fixed: {
				  enabled: false
				},
				x: {
				  show: false
				},
				y: {
				  title: {
					formatter: function (seriesName) {
					  return ''
					}
				  }
				},
				marker: {
				  show: false
				}
			  }
			}

			var options3 = {
			  chart: {
				type: 'line',
				height: 100,
				sparkline: {
				  enabled: true
				}
			  },
			  series: [{
				data: [47, 45, 74, 14, 56, 74, 14, 11, 7, 39, 82]
			  }],
			  tooltip: {
				fixed: {
				  enabled: false
				},
				x: {
				  show: false
				},
				y: {
				  title: {
					formatter: function (seriesName) {
					  return ''
					}
				  }
				},
				marker: {
				  show: false
				}
			  }
			}

			var options4 = {
			  chart: {
				type: 'line',
				height: 100,
				sparkline: {
				  enabled: true
				}
			  },
			  series: [{
				data: [15, 75, 47, 65, 14, 2, 41, 54, 4, 27, 15]
			  }],
			  tooltip: {
				fixed: {
				  enabled: false
				},
				x: {
				  show: false
				},
				y: {
				  title: {
					formatter: function (seriesName) {
					  return ''
					}
				  }
				},
				marker: {
				  show: false
				}
			  }
			};


			new ApexCharts(document.querySelector("#gsales"), options1).render();
			new ApexCharts(document.querySelector("#tsales"), options2).render();
			new ApexCharts(document.querySelector("#osales"), options3).render();
			new ApexCharts(document.querySelector("#vsales"), options4).render();
	
	
	
	
}); // End of use strict

