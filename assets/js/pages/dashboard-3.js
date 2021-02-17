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
	
	
	
	
		var sparkResize;
	
	
		am4core.ready(function() {

		// Themes begin
		am4core.useTheme(am4themes_animated);
		// Themes end

		// Create map instance
		var chart = am4core.create("reports", am4maps.MapChart);

		// Set map definition
		chart.geodata = am4geodata_worldLow;

		// Set projection
		chart.projection = new am4maps.projections.Miller();

		// Create map polygon series
		var polygonSeries = chart.series.push(new am4maps.MapPolygonSeries());

		// Exclude Antartica
		polygonSeries.exclude = ["AQ"];

		// Make map load polygon (like country names) data from GeoJSON
		polygonSeries.useGeodata = true;

		// Configure series
		var polygonTemplate = polygonSeries.mapPolygons.template;
		polygonTemplate.tooltipText = "{name}";
		polygonTemplate.fill = chart.colors.getIndex(0).lighten(0.5);

		// Create hover state and set alternative fill color
		var hs = polygonTemplate.states.create("hover");
		hs.properties.fill = chart.colors.getIndex(0);

		// Add image series
		var imageSeries = chart.series.push(new am4maps.MapImageSeries());
		imageSeries.mapImages.template.propertyFields.longitude = "longitude";
		imageSeries.mapImages.template.propertyFields.latitude = "latitude";
		imageSeries.data = [ {
		  "zoomLevel": 5,
		  "scale": 0.5,
		  "title": "Brussels",
		  "latitude": 50.8371,
		  "longitude": 4.3676
		}, {
		  "zoomLevel": 5,
		  "scale": 0.5,
		  "title": "Copenhagen",
		  "latitude": 55.6763,
		  "longitude": 12.5681
		}, {
		  "zoomLevel": 5,
		  "scale": 0.5,
		  "title": "Paris",
		  "latitude": 48.8567,
		  "longitude": 2.3510
		}, {
		  "zoomLevel": 5,
		  "scale": 0.5,
		  "title": "Reykjavik",
		  "latitude": 64.1353,
		  "longitude": -21.8952
		}, {
		  "zoomLevel": 5,
		  "scale": 0.5,
		  "title": "Moscow",
		  "latitude": 55.7558,
		  "longitude": 37.6176
		}, {
		  "zoomLevel": 5,
		  "scale": 0.5,
		  "title": "Madrid",
		  "latitude": 40.4167,
		  "longitude": -3.7033
		}, {
		  "zoomLevel": 5,
		  "scale": 0.5,
		  "title": "London",
		  "latitude": 51.5002,
		  "longitude": -0.1262,
		  "url": "http://www.google.co.uk"
		}, {
		  "zoomLevel": 5,
		  "scale": 0.5,
		  "title": "Peking",
		  "latitude": 39.9056,
		  "longitude": 116.3958
		}, {
		  "zoomLevel": 5,
		  "scale": 0.5,
		  "title": "New Delhi",
		  "latitude": 28.6353,
		  "longitude": 77.2250
		}, {
		  "zoomLevel": 5,
		  "scale": 0.5,
		  "title": "Tokyo",
		  "latitude": 35.6785,
		  "longitude": 139.6823,
		  "url": "http://www.google.co.jp"
		}, {
		  "zoomLevel": 5,
		  "scale": 0.5,
		  "title": "Ankara",
		  "latitude": 39.9439,
		  "longitude": 32.8560
		}, {
		  "zoomLevel": 5,
		  "scale": 0.5,
		  "title": "Buenos Aires",
		  "latitude": -34.6118,
		  "longitude": -58.4173
		}, {
		  "zoomLevel": 5,
		  "scale": 0.5,
		  "title": "Brasilia",
		  "latitude": -15.7801,
		  "longitude": -47.9292
		}, {
		  "zoomLevel": 5,
		  "scale": 0.5,
		  "title": "Ottawa",
		  "latitude": 45.4235,
		  "longitude": -75.6979
		}, {
		  "zoomLevel": 5,
		  "scale": 0.5,
		  "title": "Washington",
		  "latitude": 38.8921,
		  "longitude": -77.0241
		}, {
		  "zoomLevel": 5,
		  "scale": 0.5,
		  "title": "Kinshasa",
		  "latitude": -4.3369,
		  "longitude": 15.3271
		}, {
		  "zoomLevel": 5,
		  "scale": 0.5,
		  "title": "Cairo",
		  "latitude": 30.0571,
		  "longitude": 31.2272
		}, {
		  "zoomLevel": 5,
		  "scale": 0.5,
		  "title": "Pretoria",
		  "latitude": -25.7463,
		  "longitude": 28.1876
		} ];

		// add events to recalculate map position when the map is moved or zoomed
		chart.events.on( "mappositionchanged", updateCustomMarkers );

		// this function will take current images on the map and create HTML elements for them
		function updateCustomMarkers( event ) {

		  // go through all of the images
		  imageSeries.mapImages.each(function(image) {
			// check if it has corresponding HTML element
			if (!image.dummyData || !image.dummyData.externalElement) {
			  // create onex
			  image.dummyData = {
				externalElement: createCustomMarker(image)
			  };
			}

			// reposition the element accoridng to coordinates
			var xy = chart.geoPointToSVG( { longitude: image.longitude, latitude: image.latitude } );
			image.dummyData.externalElement.style.top = xy.y + 'px';
			image.dummyData.externalElement.style.left = xy.x + 'px';
		  });

		}

		// this function creates and returns a new marker element
		function createCustomMarker( image ) {

		  var chart = image.dataItem.component.chart;

		  // create holder
		  var holder = document.createElement( 'div' );
		  holder.className = 'map-marker';
		  holder.title = image.dataItem.dataContext.title;
		  holder.style.position = 'absolute';

		  // maybe add a link to it?
		  if ( undefined != image.url ) {
			holder.onclick = function() {
			  window.location.href = image.url;
			};
			holder.className += ' map-clickable';
		  }

		  // create dot
		  var dot = document.createElement( 'div' );
		  dot.className = 'dot';
		  holder.appendChild( dot );

		  // create pulse
		  var pulse = document.createElement( 'div' );
		  pulse.className = 'pulse';
		  holder.appendChild( pulse );

		  // append the marker to the map container
		  chart.svgContainer.htmlElement.appendChild( holder );

		  return holder;
		}

		}); // end am4core.ready()
	
	
	
	var plot = $.plot('#flotChart', [{
          data: flotSampleData3,
          color: '#f3000b',
          lines: {
            fillColor: { colors: [{ opacity: 0 }, { opacity: 0.5 }]}
          }
        },{
          data: flotSampleData4,
          color: '#0055c9',
          lines: {
            fillColor: { colors: [{ opacity: 0 }, { opacity: 0.5 }]}
          }
        }], {
    			series: {
    				shadowSize: 1,
            lines: {
              show: true,
              lineWidth: 2,
              fill: true
            }
    			},
          grid: {
            borderWidth: 0,
            labelMargin: 8
          },
    			yaxis: {
            			show: true,
    					min: 0,
    					max: 100,
            			ticks: [[0,''],[20,'20K'],[40,'40K'],[60,'60K'],[80,'80K']],
            			tickColor: 'rgba(255, 255, 255, 0.10)',
						font: {
							color: '#666666'
						  }
    			},
    			xaxis: {
            			show: true,
            			color: 'rgba(255, 255, 255, 0.10)',
            			ticks: [[25,'OCT 21'],[75,'OCT 22'],[100,'OCT 23'],[125,'OCT 24']],
						font: {
							color: '#666666'
						  }
          }
        });
	
		
	
		var options = {
            chart: {
                height: 465,
                type: 'bar',
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '55%'	
                },
            },
            dataLabels: {
                enabled: false
            },
			colors: ["#4029a7", '#fc9208'],
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            series: [{
                name: 'New User',
                data: [76, 85, 101, 98, 87, 105, 91]
            }, {
                name: 'Old User',
                data: [35, 41, 36, 26, 45, 48, 52]
            }],
            xaxis: {
                categories: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Set', 'Sun'],
            },
            fill: {
                opacity: 1

            },
			  legend: {
				position: 'top',
				horizontalAlign: 'left'
			  },
            tooltip: {
                y: {
                    formatter: function (val) {
                        return "$ " + val + " thousands"
                    }
                }
            }
        }

        var chart = new ApexCharts(
            document.querySelector("#userflow"),
            options
        );

        chart.render();
	
	
	
}); // End of use strict

