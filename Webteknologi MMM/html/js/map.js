window.addEventListener('load',initialize);

function initialize()
{
var mapProp = {
  center:new google.maps.LatLng(63.430491, 10.395053),
  zoom:13,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };
var map=new google.maps.Map(document.getElementById("map_canvas")
  ,mapProp);
}

google.maps.event.addDomListener(window, 'load', initialize);