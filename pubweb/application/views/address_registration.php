<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	 #map {
		width: 500px;
		height: 400px;
	  }
	</style>

</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter!</h1>

	<div id="body">
		

		<div id="map"></div>
		<?=form_open('email/send')?>
			<?php echo form_label(lang("user_registration_firstname"),"street");?>
			<?php echo form_input("street","");?>
			<?php echo form_label(lang("user_registration_lastname"),"num_ext");?>
			<?php echo form_input("num_ext","");?>        
			<?php echo form_label(lang("user_registration_birthdate"),"num_int");?>
			<?php echo form_input("num_int","");?>
			<?php echo form_label(lang("user_registration_birthdate"),"postalCode");?>
			<?php echo form_input("postal_code","");?>
			<?php echo form_label(lang("user_registration_birthdate"),"colonia");?>
			<?php echo form_input("colonia","");?>
			<?php echo form_label(lang("user_registration_birthdate"),"municipio");?>
			<?php echo form_input("municipio","");?>
			<?php echo form_label(lang("user_registration_birthdate"),"state");?>
			<?php echo form_input("state","");?>
			<?php echo form_label(lang("user_registration_birthdate"),"phone");?>
			<?php echo form_input("phone","");?>
			<?php echo form_label(lang("user_registration_birthdate"),"cellPhone");?>
			<?php echo form_input("cellPhone","");?>
		<?=form_close()?>


	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<article>

	</article>
<script>
function success(position) {
  var mapcanvas = document.createElement('div');
  mapcanvas.id = 'map';
  mapcanvas.style.height = '400px';
  mapcanvas.style.width = '600px';

  document.querySelector('article').appendChild(mapcanvas);

  var coords = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
  
  var options = {
	zoom: 15,
	center: coords,
	mapTypeControl: true,
	draggable:true,
	navigationControlOptions: {
		style: google.maps.NavigationControlStyle.SMALL
	},
	mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  var map = new google.maps.Map(document.getElementById("map"), options);

  var marker = new google.maps.Marker({
	  position: coords,
	  map: map,
	  title:"You are here!"
  });
}

if (navigator.geolocation) {
  navigator.geolocation.getCurrentPosition(success);
} else {
  error('Geo Location is not supported');
}

</script>


</section>
</body>
</html>