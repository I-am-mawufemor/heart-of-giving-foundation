$(document).ready(function() {
  // Initialize and display the map
  function initMap() {
    var options = {
      center: { lat: 37.7749, lng: -122.4194 }, // Set the initial map center coordinates
      zoom: 12 // Set the initial zoom level
    };

    var map = new google.maps.Map(document.getElementById('map'), options);
  }

  // Call the initMap function when the page has finished loading
  initMap();
});
