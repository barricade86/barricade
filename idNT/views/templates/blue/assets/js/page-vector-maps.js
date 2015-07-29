var App = (function () {

  App.mapsVector = function( ){
    'use strict'

    //Maps 
    $('#world-map').vectorMap({
      map: 'world_mill_en',
      backgroundColor: 'transparent',
      regionStyle: {
        initial: {
          fill: 'rgba(255,255,255,0.8)',
          "fill-opacity": 1,
          stroke: 'none',
          "stroke-width": 0,
          "stroke-opacity": 1
        },
        hover: {
          "fill-opacity": 0.8
        }
      },
      markerStyle:{
          initial:{
            r: 10
          },
           hover: {
            r: 12,
            stroke: 'rgba(255,255,255,0.8)',
            "stroke-width": 4
          }
        },
        markers: [
            {latLng: [41.90, 12.45], name: '1.512 Sales', style: {fill: '#E44C34',stroke:'rgba(255,255,255,0.7)',"stroke-width": 3}},
            {latLng: [1.3, 103.8], name: '940 Sales', style: {fill: '#E44C34',stroke:'rgba(255,255,255,0.7)',"stroke-width": 3}},
            {latLng: [51.511214, -0.119824], name: '3.500 Sales', style: {fill: '#E44C34',stroke:'rgba(255,255,255,0.7)',"stroke-width": 3}},
            {latLng: [40.714353, -74.005973], name: '4.800 Sales', style: {fill: '#E44C34',stroke:'rgba(255,255,255,0.7)',"stroke-width": 3}},
            {latLng: [-22.913395, -43.200710], name: '9.800 Sales', style: {fill: '#E44C34',stroke:'rgba(255,255,255,0.7)',"stroke-width": 3}}
        ]
    });        
      
    $('#usa-map').vectorMap({
      map: 'us_merc_en',
      backgroundColor: 'transparent',
      regionStyle: {
        initial: {
          fill: '#51ADFE',
        },
        hover: {
          "fill-opacity": 0.8
        }
      }
    });
      
    $('#france-map').vectorMap({
      map: 'fr_merc_en',
      backgroundColor: 'transparent',
      regionStyle: {
        initial: {
          fill: '#38c3c1',
        },
        hover: {
          "fill-opacity": 0.8
        }
      }
    });
      
    $('#uk-map').vectorMap({
      map: 'uk_mill_en',
      backgroundColor: 'transparent',
      regionStyle: {
        initial: {
          fill: '#FD6A5E',
        },
        hover: {
          "fill-opacity": 0.8
        }
      }
    });
      
    $('#chicago-map').vectorMap({
      map: 'us-il-chicago_mill_en',
      backgroundColor: 'transparent',
      regionStyle: {
        initial: {
          fill: '#d9dade',
        },
        hover: {
          "fill-opacity": 0.8
        }
      }
    });
      
    $('#australia-map').vectorMap({
      map: 'au_mill_en',
      backgroundColor: 'transparent',
      regionStyle: {
        initial: {
          fill: '#dc6ea5',
        },
        hover: {
          "fill-opacity": 0.8
        }
      }
    });
      
    $('#india-map').vectorMap({
      map: 'in_mill_en',
      backgroundColor: 'transparent',
      regionStyle: {
        initial: {
          fill: '#ffba3b',
        },
        hover: {
          "fill-opacity": 0.8
        }
      }
    });
      
    $('#vector-map').vectorMap({
      map: 'map',
      backgroundColor: 'transparent',
      regionStyle: {
          initial: {
            fill: '#D9DADE',
            "fill-opacity": 0.8,
            stroke: 'none',
            "stroke-width": 0,
            "stroke-opacity": 1
          },
          hover: {
            "fill-opacity": 0.8
          }
        },
      markerStyle:{
        initial:{
          r: 10
        }
      },
      markers: [
          {coords: [100, 100], name: 'Marker 1', style: {fill: '#acb1b6',stroke:'#cfd5db',"stroke-width": 3}},
          {coords: [200, 200], name: 'Marker 2', style: {fill: '#acb1b6',stroke:'#cfd5db',"stroke-width": 3}},
      ]
    });

    $('#canada-map').vectorMap({
      map: 'ca_lcc_en',
      backgroundColor: 'transparent',
      regionStyle: {
        initial: {
          fill: '#6f6bc8',
        },
        hover: {
          "fill-opacity": 0.8
        }
      }
    });   

  };

  return App;
})(App || {});
