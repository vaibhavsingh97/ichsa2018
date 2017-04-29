function initMap() {
  var styledMapType = new google.maps.StyledMapType(
    [{
        elementType: 'geometry',
        stylers: [{
          color: '#ebe3cd'
        }]
      },
      {
        elementType: 'labels.text.fill',
        stylers: [{
          color: '#523735'
        }]
      },
      {
        elementType: 'labels.text.stroke',
        stylers: [{
          color: '#f5f1e6'
        }]
      },
      {
        featureType: 'administrative',
        elementType: 'geometry.stroke',
        stylers: [{
          color: '#c9b2a6'
        }]
      },
      {
        featureType: 'administrative.land_parcel',
        elementType: 'geometry.stroke',
        stylers: [{
          color: '#dcd2be'
        }]
      },
      {
        featureType: 'administrative.land_parcel',
        elementType: 'labels.text.fill',
        stylers: [{
          color: '#ae9e90'
        }]
      },
      {
        featureType: 'landscape.natural',
        elementType: 'geometry',
        stylers: [{
          color: '#dfd2ae'
        }]
      },
      {
        featureType: 'poi',
        elementType: 'geometry',
        stylers: [{
          color: '#dfd2ae'
        }]
      },
      {
        featureType: 'poi',
        elementType: 'labels.text.fill',
        stylers: [{
          color: '#93817c'
        }]
      },
      {
        featureType: 'poi.park',
        elementType: 'geometry.fill',
        stylers: [{
          color: '#a5b076'
        }]
      },
      {
        featureType: 'poi.park',
        elementType: 'labels.text.fill',
        stylers: [{
          color: '#447530'
        }]
      },
      {
        featureType: 'road',
        elementType: 'geometry',
        stylers: [{
          color: '#f5f1e6'
        }]
      },
      {
        featureType: 'road.arterial',
        elementType: 'geometry',
        stylers: [{
          color: '#fdfcf8'
        }]
      },
      {
        featureType: 'road.highway',
        elementType: 'geometry',
        stylers: [{
          color: '#f8c967'
        }]
      },
      {
        featureType: 'road.highway',
        elementType: 'geometry.stroke',
        stylers: [{
          color: '#e9bc62'
        }]
      },
      {
        featureType: 'road.highway.controlled_access',
        elementType: 'geometry',
        stylers: [{
          color: '#e98d58'
        }]
      },
      {
        featureType: 'road.highway.controlled_access',
        elementType: 'geometry.stroke',
        stylers: [{
          color: '#db8555'
        }]
      },
      {
        featureType: 'road.local',
        elementType: 'labels.text.fill',
        stylers: [{
          color: '#806b63'
        }]
      },
      {
        featureType: 'transit.line',
        elementType: 'geometry',
        stylers: [{
          color: '#dfd2ae'
        }]
      },
      {
        featureType: 'transit.line',
        elementType: 'labels.text.fill',
        stylers: [{
          color: '#8f7d77'
        }]
      },
      {
        featureType: 'transit.line',
        elementType: 'labels.text.stroke',
        stylers: [{
          color: '#ebe3cd'
        }]
      },
      {
        featureType: 'transit.station',
        elementType: 'geometry',
        stylers: [{
          color: '#dfd2ae'
        }]
      },
      {
        featureType: 'water',
        elementType: 'geometry.fill',
        stylers: [{
          color: '#b9d3c2'
        }]
      },
      {
        featureType: 'water',
        elementType: 'labels.text.fill',
        stylers: [{
          color: '#92998d'
        }]
      }
    ], {
      name: 'Styled Map'
    });
  var mapPoints = {
    lat: 28.246831,
    lng: 76.815140
  };
  // var map = new google.maps.Map(document.getElementById('map'), {
  //   zoom: 17,
  //   center:
  // });

  var map = new google.maps.Map(document.getElementById('map'), {
    center: mapPoints,
    zoom: 17,
    mapTypeControlOptions: {
      mapTypeIds: ['roadmap', 'satellite', 'hybrid', 'terrain',
        'styled_map'
      ]
    }
  });

  var trafficLayer = new google.maps.TrafficLayer();
  trafficLayer.setMap(map);

  map.mapTypes.set('styled_map', styledMapType);
  map.setMapTypeId('styled_map');


  var contentString = '<div id="container">' +
    '<h5 class="" style="text-align:center;">BML Munjal Univeristy</h5>' +
    '<p class="noscrollbar">National Highway 8, 67 KM Milestone, Gurgaon, Haryana 122413, India</p>' +
    '</div>';

  var infowindow = new google.maps.InfoWindow({
    content: contentString
  });
  google.maps.event.addListenerOnce(map, 'tilesloaded', function() {
    infowindow.open(map, marker);
  });

  var image = 'assets/images/location.png';
  var marker = new google.maps.Marker({
    position: mapPoints,
    map: map,
    icon: image,
    animation: google.maps.Animation.DROP,
    title: 'BML Munjal Univeristy'
  });

  function toggleBounce() {
    if (marker.getAnimation() !== null) {
      marker.setAnimation(null);
    } else {
      marker.setAnimation(google.maps.Animation.BOUNCE);
    }
  }
  marker.addListener('click', function() {
    infowindow.open(map, marker);
  });

}