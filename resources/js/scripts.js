var mapboxgl = require('mapbox-gl/dist/mapbox-gl.js');
 
mapboxgl.accessToken = 'pk.eyJ1IjoiZ2luZXR0bzk1IiwiYSI6ImNra2JhdmRqeDA0bmkyb2xjZDc2Nzlic20ifQ.xk7zY21lCz4hFJNJTgvN9w';
var map = new mapboxgl.Map({
container: 'YOUR_CONTAINER_ELEMENT_ID',
style: 'mapbox://styles/mapbox/streets-v11'
});