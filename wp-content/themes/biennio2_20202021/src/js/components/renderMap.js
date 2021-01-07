import $ from 'jquery'
import { ICON_URL, MAP_STYLE } from './constants'

let map = null
let infowindow_current = false

export const addMarker = ($marker, map) => {  
  const latlng = new google.maps.LatLng($marker.attr('data-lat'), $marker.attr('data-lng'))
  const marker = new google.maps.Marker({
    position: latlng,
    map: map,
    icon: ICON_URL,
  })

  map.markers.push( marker )  

  if ($marker.html()) {
		var infowindow = new google.maps.InfoWindow({
      content: $marker.html()
		})

		google.maps.event.addListener(marker, 'click', function() {
      infowindow.open( map, marker )
      if (infowindow_current && infowindow_current != infowindow) infowindow_current.close()
      infowindow_current = infowindow
		})
	}
}

export const centerMap = (map) => {
  const bounds = new google.maps.LatLngBounds()

  $.each( map.markers, function( i, marker ){
		const latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() )
		bounds.extend( latlng )
	})

  if (( map.markers.length == 1 )) {
    map.setCenter( bounds.getCenter() )
    map.setZoom( 16 )
  } else {
    map.fitBounds( bounds )
  }
}

export const newMap = ($el) => {
  const markers = $el.children('.marker')
  const args = {
    zoom : 8,
		center : new google.maps.LatLng(0, 0),
    mapTypeId	: google.maps.MapTypeId.ROADMAP,
    styles: MAP_STYLE,
    disableDefaultUI: true
  }
  const map = new google.maps.Map( $el[0], args)
  
  map.markers = []

  markers.each(function(){
    addMarker($(this), map)
	})
  centerMap(map)
  return map
}

export const renderMap = (mapWrapper) => {
  const $map = $(mapWrapper)
  
  if ($map.length) {
    $map.each(function(){
      newMap($(this))
    })
  }
}