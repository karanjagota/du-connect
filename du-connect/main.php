<?php
   	echo "<html>
<title>DU CONNECT</title>
<meta name='viewport' content='initial-scale=1.0, user-scalable=no'>
<meta charset='utf-8'>
<head>
<style>
*{
margin:0px;
padding:0px;
}
#wrapper{
width:100%;
height:auto;

}
#header{
background-color:rgba(0,0,0,.05);
width:100%;
height:12%;
-webkit-transition-property:color , background-color;
-webkit-transition-duration:1s;
-webkit-transition-timing-function:linear;

}
#header:hover{
background-color:black;
color:white;
}
 #directions-panel {
 background-color:rgba(0,0,0,0.008);
 margin-top:5%;
 height:70%;
 float: right;
 width: 28%;
 overflow: auto;
}
#h{
padding-left:5%;
padding-top:.5%;
}
#input{
width:auto;
height:auto;
margin-top:2%;
}

#map-canvas{

width:72%;
height:70%;
margin-top:5%;
background-color:rgba(0,0,0,.05);
float:left;

}
#control {
        background: rgba(0,0,0,.002);
        padding: 5px;
		margin:0%;
		position:absolute;
		z-index:5;
		color:black;
        font-size: 14px;
        font-family: Arial;
        border: 1px solid #ccc;
        box-shadow: 0 2px 2px rgba(33, 33, 33, 0.4);
        display: none;
      }
	  #start ,#end {
	 padding:5px;
	  }
	  #mode{
	  padding:5px;
	  }
	 
	 
</style>
<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
    <script>
var directionsDisplay;
var directionsService = new google.maps.DirectionsService();
var map;

function initialize() {
  directionsDisplay = new google.maps.DirectionsRenderer();
  var university = new google.maps.LatLng(28.688788, 77.210975);
  var mapOptions = {
    zoom:17,
	center: university
   
  };
  map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
  directionsDisplay.setMap(map);
  directionsDisplay.setPanel(document.getElementById('directions-panel'));

  var control = document.getElementById('control');
  control.style.display = 'block';
  map.controls[google.maps.ControlPosition.TOP_CENTER].push(control);

}

function calcRoute() {
  var start = document.getElementById('start').value;
  var end = document.getElementById('end').value;
  var selectedMode = document.getElementById('mode').value;
  var request = {
      origin:start,
      destination:end,
      travelMode: google.maps.TravelMode[selectedMode]
  };
  directionsService.route(request, function(response, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      directionsDisplay.setDirections(response);
    }
  });
   
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>
</head>
<body><div id='wrapper'>
<div id ='header'>
<h1 id='h'> DU-CONNECT </H1>
<p id = 'h'>    NOW STAY CONNECTED  </p> 
</div>

<div id='control'>
    <b>  START :  </b>
    <select id='start' onchange='calcRoute();'>
	  <option value='#'>------------- SELECT ----------- </option>
      <option value='Khalsa College, The Mall Road, Sarup Nagar, New Delhi, Delhi'>KHALSA COLLEGE </option>
      <option value='Daulat Ram College, Roop Nagar, New Delhi, Delhi'>DRC</option>
      <option value='Aditi Mahavidyalaya'>ADMVB</option>
      <option value='Hansraj College, Mahatma Hans Raj Marg, University Enclave, New Delhi, Delhi'>HANSRAJ COLLEGE</option>
      <option value='Hindu College, Sudhir Bose Marg, University Enclave, New Delhi, Delhi'>HINDU COLLEGE</option>
      <option value='Indraprastha College for Women'>IP COLLEGE FOR WOMEN </option>
      <option value='Kirorimal College, New Delhi, Delhi'>KIRRORI MAL COLLEGE</option>
      <option value='Miranda House, Chhatra Marg, University Enclave, New Delhi, Delhi'>MIRANDA HOUSE</option>
      <option value=' Ramjas College, University Enclave'>RAMJAS</option>
      <option value='St Stephens College, New Delhi, Delhi'>ST STEFENS</option>
      <option value=' SRCC Front Lawn, Guru Tegh Bahadur Road, New Delhi, Delhi'>SRCC</option>
	  <option value=' Swami Shraddhanand College, Nangli Ibrahimpur Road, New Delhi, Delhi'>SSCA</option>
	  <option value='Faculty of Management Studies Malka Ganj Rd, University Enclave, New Delhi, Delhi '>FMS</option>
    </select>
    <b>  END :  </b>
    <select id='end' onchange='calcRoute();'>
     <option value='#'>------------- SELECT ----------- </option>
      <option value='Khalsa College, The Mall Road, Sarup Nagar, New Delhi, Delhi'>KHALSA COLLEGE </option>
      <option value='Daulat Ram College, Roop Nagar, New Delhi, Delhi'>DRC</option>
      <option value='Aditi Mahavidyalaya'>ADMVB</option>
      <option value='Hansraj College, Mahatma Hans Raj Marg, University Enclave, New Delhi, Delhi'>HANSRAJ COLLEGE</option>
      <option value='Hindu College, Sudhir Bose Marg, University Enclave, New Delhi, Delhi'>HINDU COLLEGE</option>
      <option value='Indraprastha College for Women'>IP COLLEGE FOR WOMEN </option>
      <option value='Kirorimal College, New Delhi, Delhi'>KIRRORI MAL COLLEGE</option>
      <option value='Miranda House, Chhatra Marg, University Enclave, New Delhi, Delhi'>MIRANDA HOUSE</option>
      <option value=' Ramjas College, University Enclave'>RAMJAS</option>
      <option value='St Stephens College, New Delhi, Delhi'>ST STEFENS</option>
      <option value=' SRCC Front Lawn, Guru Tegh Bahadur Road, New Delhi, Delhi'>SRCC</option>
	  <option value=' Swami Shraddhanand College, Nangli Ibrahimpur Road, New Delhi, Delhi'>SSCA</option>
	  <option value='Faculty of Management Studies Malka Ganj Rd, University Enclave, New Delhi, Delhi '>FMS</option>
    </select>
	
    <b>MODE OF TRAVEL : </b>
    <select id='mode' onchange='calcRoute();'>
	<option value='#'>--SELECT--</option>
      <option value='DRIVING'>DRIVING</option>
      <option value='WALKING'>WALKING</option>
      <option value='BICYCLING'>BICYCLING</option>
      <option value='TRANSIT'>TRANSIT</option>
    </select>
    </div>


<div id='map-canvas'>

</div>
<div id='directions-panel'></div>	
<br></br>Developed By : karan jagota
</div>



</body>


</html>
";
?>
