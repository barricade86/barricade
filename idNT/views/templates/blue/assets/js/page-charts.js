var App = (function () {

  App.charts = function( ){
    'use strict'

    // random data generator for plot charts
    function getRandomData() {
      if (data.length > 0) data = data.slice(1);
      // do a random walk
      while (data.length < totalPoints) {
      var prev = data.length > 0 ? data[data.length - 1] : 50;
      var y = prev + Math.random() * 10 - 5;
      if (y < 0) y = 0;
      if (y > 100) y = 100;
      data.push(y);
      }
      // zip the generated y values with the x values
      var res = [];
      for (var i = 0; i < data.length; ++i) res.push([i, data[i]])
      return res;
    }

    function showTooltip(x, y, contents) {
      $("<div id='tooltip'>" + contents + "</div>").css({
        position: "absolute",
        display: "none",
        top: y + 5,
        left: x + 5,
        border: "1px solid #000",
        padding: "5px",
        'color':'#fff',
        'border-radius':'2px',
        'font-size':'11px',
        "background-color": "#000",
        opacity: 0.80
      }).appendTo("body").fadeIn(200);
    } 

    function randValue() {
      return (Math.floor(Math.random() * (1 + 50 - 20))) + 10;
    }

    function update() {
      chart4.setData([getRandomData()]);
      // Since the axes don't change, we don't need to call plot.setupGrid()
      chart4.draw();
      setTimeout(update, 500);
    }

    if (!jQuery.plot) {
      return;
    }

    var data = [];
    var totalPoints = 250;

    var pageviews = [
    [1, randValue()],
    [2, randValue()],
    [3, 2 + randValue()],
    [4, 3 + randValue()],
    [5, 5 + randValue()],
    [6, 10 + randValue()],
    [7, 15 + randValue()],
    [8, 20 + randValue()],
    [9, 25 + randValue()],
    [10, 30 + randValue()],
    [11, 35 + randValue()],
    [12, 25 + randValue()],
    [13, 15 + randValue()],
    [14, 20 + randValue()],
    [15, 45 + randValue()],
    [16, 50 + randValue()],
    [17, 65 + randValue()],
    [18, 70 + randValue()],
    [19, 85 + randValue()],
    [20, 80 + randValue()],
    [21, 75 + randValue()],
    [22, 80 + randValue()],
    [23, 75 + randValue()]
    ];

    var visitors = [
    [1, randValue() - 5],
    [2, randValue() - 5],
    [3, randValue() - 5],
    [4, 6 + randValue()],
    [5, 5 + randValue()],
    [6, 20 + randValue()],
    [7, 25 + randValue()],
    [8, 36 + randValue()],
    [9, 26 + randValue()],
    [10, 38 + randValue()],
    [11, 39 + randValue()],
    [12, 50 + randValue()],
    [13, 51 + randValue()],
    [14, 12 + randValue()],
    [15, 13 + randValue()],
    [16, 14 + randValue()],
    [17, 15 + randValue()],
    [18, 15 + randValue()],
    [19, 16 + randValue()],
    [20, 17 + randValue()],
    [21, 18 + randValue()],
    [22, 19 + randValue()],
    [23, 20 + randValue()],
    [24, 21 + randValue()],
    [25, 14 + randValue()],
    [26, 24 + randValue()],
    [27, 25 + randValue()],
    [28, 26 + randValue()],
    [29, 27 + randValue()],
    [30, 31 + randValue()]
    ];

    if ($('#site_statistics').size() != 0) {

      $('#site_statistics_loading').hide();
      $('#site_statistics_content').show();
      
      var plot_statistics = $.plot($("#site_statistics"), [{
        data: pageviews,
        label: "Sales"
      }
      ], {
        series: {
          lines: {
            show: true,
            lineWidth: 2, 
            fill: true,
            fillColor: {
              colors: [{
                opacity: 0.25
              }, {
                opacity: 0.25
              }
              ]
            } 
          },
          points: {
            show: true
          },
          shadowSize: 2
        },
        legend:{
          show: false
        },
        grid: {
        labelMargin: 10,
           axisMargin: 500,
          hoverable: true,
          clickable: true,
          tickColor: "rgba(0,0,0,0.15)",
          borderWidth: 0
        },
        colors: ["#50ACFE", "#4A8CF7", "#52e136"],
        xaxis: {
          ticks: 11,
          tickDecimals: 0
        },
        yaxis: {
          ticks: 5,
          tickDecimals: 0
        }
      });
      
      var plot_statistics2 = $.plot($("#site_statistics2"), [{
        data: pageviews,
        label: "Unique Visits"
      }
      ], {
        series: {
          bars: {
            show: true,
            barWidth: 0.6,
            lineWidth: 0,
            fill: true,
            hoverable: true,
            fillColor: {
              colors: [{
                opacity: 1
              }, {
                opacity: 1
              }
              ]
            } 
          },
          shadowSize: 2
        },
        legend:{
          show: false
        },
        grid: {
        labelMargin: 10,
           axisMargin: 500,
          hoverable: true,
          clickable: true,
          tickColor: "rgba(0,0,0,0.15)",
          borderWidth: 0
        },
        colors: ["#FD6A5E", "#FFFFFF", "#52e136"],
        xaxis: {
          ticks: 11,
          tickDecimals: 0
        },
        yaxis: {
          ticks: 6,
          tickDecimals: 0
        }
      });
      
      /*Pie Chart*/
      var data = [
      { label: "Google", data: 50},
      { label: "Dribbble", data: 7},
      { label: "Twitter", data: 8},
      { label: "Youtube", data: 9},
      { label: "Microsoft", data: 14},
      { label: "Apple", data: 13},
      { label: "Amazon", data: 10},
      { label: "Facebook", data: 5}
      ]; 

      $.plot('#piec', data, {
        series: {
          pie: {
            show: true,
            innerRadius: 0.27,
            shadow:{
              top: 5,
              left: 15,
              alpha:0.3
            },
            stroke:{
              width:0
            },
            label: {
                        show: true,
                        formatter: function (label, series) {
                            return '<div style="font-size:12px;text-align:center;padding:2px;color:#333;">' + label + '</div>';

                        }
                    },
            highlight:{
              opacity: 0.08
            }
          }
        },
        grid: {
          hoverable: true,
          clickable: true
        },
        colors: ["#5793f3", "#dd4d79", "#bd3b47","#dd4444","#fd9c35","#fec42c","#d4df5a","#5578c2"],
        legend: {
          show: false
        }
      });
      
      /*COM Chart*/
      var data_com2 = [
        [1, randValue()],
        [2, randValue()],
        [3, 2 + randValue()],
        [4, 3 + randValue()],
        [5, 5 + randValue()],
        [6, 10 + randValue()],
        [7, 15 + randValue()],
        [8, 20 + randValue()],
        [9, 25 + randValue()],
        [10, 30 + randValue()],
        [11, 35 + randValue()],
        [12, 25 + randValue()],
        [13, 15 + randValue()],
        [14, 20 + randValue()],
        [15, 45 + randValue()],
        [16, 50 + randValue()],
        [17, 65 + randValue()],
        [18, 70 + randValue()],
        [19, 85 + randValue()],
        [20, 80 + randValue()],
        [21, 75 + randValue()],
        [22, 80 + randValue()],
        [23, 75 + randValue()]
      ];
      var data_com = [
        [1, randValue()],
        [2, randValue()],
        [3, 10 + randValue()],
        [4, 15 + randValue()],
        [5, 20 + randValue()],
        [6, 25 + randValue()],
        [7, 30 + randValue()],
        [8, 35 + randValue()],
        [9, 40 + randValue()],
        [10, 45 + randValue()],
        [11, 50 + randValue()],
        [12, 55 + randValue()],
        [13, 60 + randValue()],
        [14, 70 + randValue()],
        [15, 75 + randValue()],
        [16, 80 + randValue()],
        [17, 85 + randValue()],
        [18, 90 + randValue()],
        [19, 95 + randValue()],
        [20, 100 + randValue()],
        [21, 110 + randValue()],
        [22, 120 + randValue()],
        [23, 130 + randValue()]
      ];
       var names = [
                    "Alpha",
                    "Beta",
                    "Gamma",
                    "Delta",
                    "Epsilon",
                    "Zeta",
                    "Eta",
                    "Theta"
                ];
          
      var plot_statistics = $.plot($("#chart3"), [{
        data: data_com, showLabels: true, label: "New Visitors", labelPlacement: "below", canvasRender: true, cColor: "#FFFFFF" 
      },{
        data: data_com2, showLabels: true, label: "Old Visitors", labelPlacement: "below", canvasRender: true, cColor: "#FFFFFF" 
      }
      ], {
        series: {
          lines: {
            show: true,
            lineWidth: 1, 
            fill: true,
             fillColor: { colors: [{ opacity: 0.5 }, { opacity: 0.5}] }
          },
          fillColor: "rgba(0, 0, 0, 1)",
          points: {
            show: false,
            fill: true
          },
          shadowSize: 2
        },
        legend:{
          show: true,
           position:"nw",
           backgroundColor: "green",
           container: $("#chart3-legend")
        },
        grid: {
          show:false,
          margin: 0,
          labelMargin: 0,
           axisMargin: 0,
          hoverable: true,
          clickable: true,
          tickColor: "rgba(255,255,255,1)",
          borderWidth: 0
        },
        colors: ["#E3E6E8","#1fb594"],
        xaxis: {
          autoscaleMargin: 0,
          ticks: 11,
          tickDecimals: 0
        },
        yaxis: {
          autoscaleMargin: 0.2,
          ticks: 5,
          tickDecimals: 0
        }
      });
      
      /*LIVE DATA CHART*/
      
      var data = [],totalPoints = 200; 
      


      var chart4 = $.plot($("#chart4"), [{
        data:  getRandomData() ,
        label: "Sales"
      }
      ], {
        series: {
          lines: {
            show: true,
            lineWidth: 2, 
            fill: true,
            fillColor: {
              colors: [{
                opacity: 0.25
              }, {
                opacity: 0.25
              }
              ]
            } 
          },
          points: {
            show: false
          },
          shadowSize: 2
        },
        legend:{
          show: false
        },
        grid: {
        labelMargin: 10,
           axisMargin: 500,
          hoverable: true,
          clickable: true,
          tickColor: "rgba(0,0,0,0.15)",
          borderWidth: 0
        },
        colors: ["#B450B2", "#4A8CF7", "#52e136"],
        xaxis: {
          ticks: 11,
          tickDecimals: 0
        },
        yaxis: {
          ticks: 5,
          tickDecimals: 0
        }
      });
      
      update();
      
      /*Tooltips*/
      
      var previousPoint = null;
      $("#site_statistics").bind("plothover", function (event, pos, item) {
      
        var str = "(" + pos.x.toFixed(2) + ", " + pos.y.toFixed(2) + ")";

        if (item) {
          if (previousPoint != item.dataIndex) {
            previousPoint = item.dataIndex;
            $("#tooltip").remove();
            var x = item.datapoint[0].toFixed(2),
            y = item.datapoint[1].toFixed(2);
            showTooltip(item.pageX, item.pageY,
            item.series.label + " of " + x + " = " + y);
          }
        } else {
          $("#tooltip").remove();
          previousPoint = null;
        }
      }); 
      
      $("#site_statistics2").bind("plothover", function (event, pos, item) {
      
        var str = "(" + pos.x.toFixed(2) + ", " + pos.y.toFixed(2) + ")";

        if (item) {
          if (previousPoint != item.dataIndex) {
            previousPoint = item.dataIndex;
            $("#tooltip").remove();
            var x = item.datapoint[0],
            y = item.datapoint[1];
            showTooltip(item.pageX, item.pageY,
            item.series.label + "" + x + " = " + y + "%");
          }
        } else {
          $("#tooltip").remove();
          previousPoint = null;
        }
      }); 
      
      $("#chart3").bind("plothover", function (event, pos, item) {
      
        var str = "(" + pos.x.toFixed(2) + ", " + pos.y.toFixed(2) + ")";

        if (item) {
          if (previousPoint != item.dataIndex) {
            previousPoint = item.dataIndex;
            $("#tooltip").remove();
            var x = item.datapoint[0].toFixed(2),
            y = item.datapoint[1].toFixed(2);
            showTooltip(item.pageX, item.pageY,
            item.series.label + " of " + x + " = " + y);
          }
        } else {
          $("#tooltip").remove();
          previousPoint = null;
        }
      }); 
    }

    /*Jquery Easy Pie Chart*/
      $('.epie-chart').easyPieChart({
        lineWidth: 8,
        animate: { duration: 600, enabled: true },
        size: 150,
        scaleLength: 9,
        onStep: function(f, t, val){//Update current value while animation
          var height = $("canvas", this.el).height();
          $("span", this.el).html(parseInt(val) + "%").css({"line-height": height + "px"});
        }
        });
    
  };

  return App;
})(App || {});
