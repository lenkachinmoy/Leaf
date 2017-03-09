<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Effection</title>
	<link rel="stylesheet" href="h1.css">
</head>

<body>
	<div id="inwrap">
		<div id="logo">
			<img src="logo.png"/>
		</div>
		<div id="icon1">
			<img src="homecon.jpg">
		</div>
		<div id="icon2">
			<img src="cart.jpg">
		</div>
		<div id="icon3">
			<img src="o.jpg">
		</div>		
	</div>
		<div id="title">
			<ul>
			  <li class="dropdown">
				<a href="javascript:void(0)" class="dropbtn">More</a>
				<div class="dropdown-content">
				  <a href="">CONTACT</a>
				  <a href="">BLOG</a>
				  <a href="">SHOP</a>
				</div>
			  </li>
			  <li><a href="">ABOUT</a></li>
			  <li><a href="">CREDITS</a></li>
			  <li><a href="">PHOTOGRAPHY</a></li>
			  <li><a href="">TALE</a></li>
			  <li><a class="active" href="">HOME</a></li>
			</ul>
		</div>
	<div class="wrap"></div>
	<div id="check">
		<div class="banner">		
			 <div class="transbox">
				<p>When you sample something, you're using the crutch of borrowing chords and melodies from a song that's already great, that's already stood the test of time, that's already special. When you're trying to do it all from scratch, you're writing something brand new that has to stand on its own.Heal your soul with the calmness of scribble and the serenity of captures.</p>				
			</div>
			<button class="button"><span>Tell your Tale </span></button>
		</div>
		<div class="wrap">
			<div id="pho">
				<div id="pho1">
					<img src="pho1.jpg">
				</div>
				<div id="pho2">
					<img src="pho2.jpg">
				</div>
				<div id="pho3">
					<img src="pho3.jpg">
				</div>
				<div id="pho4">
					<img src="pho4.jpg">
				</div>
				<a href="">
					<div id="pho5">
						<img src="pho5.jpg" height="750" width="300">
					</div>
				</a>
				<a href="">
					<div id="pho6">
						<img src="pho6.jpg" >
					</div>
				</a>
				<a href="">
					<div id="pho7">
						<img src="pho7.jpg" >
					</div>
				</a>
				<a href="">
					<div id="pho8">
						<img src="pho8.jpg" >
					</div>
				</a>
				<div id="map"></div>
				<script>
				  function initMap() {
					var uluru = {lat: 26.544751, lng: 88.7024889};
					var map = new google.maps.Map(document.getElementById('map'), {
					  zoom: 4,
					  center: uluru
					});
					var marker = new google.maps.Marker({
					  position: uluru,
					  map: map
					});
				  }
				</script>
				<script async defer
				src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC7oW8rfuju1q9r2thIfNNUY79fOOCj57w&callback=initMap">
				</script>				
			</div>
		</div>
	</div>
	<div class="wrap"></div>

</body>
</html>