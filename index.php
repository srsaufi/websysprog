<?php $status = "ON"; ?>
<!DOCTYPE html>
<html>
<head>
	<link href="css/bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100' rel='stylesheet' type='text/css'>
	<title>Web Service WATER FLOW DETECTOR</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<body>

	<div class="container">
		<div class="col-md-4">
			<br>
			<center><h3>Welcome To WATER FLOW DETECTOR</h3></center>
			<hr>
			<div class="list-group">
				<a href="#" class="list-group-item disabled">
					RABBIS MEMBER :
				</a>
				<a href="#" class="list-group-item">Rahadyan Awinda P.</a>
				<a href="#" class="list-group-item">Arianda</a>
				<a href="#" class="list-group-item">Bintang B.</a>
				<a href="#" class="list-group-item">Bintang W.</a>
				<a href="#" class="list-group-item">Saufi Rahman</a>
				<a href="#" class="list-group-item">Irvi Firqotul Aini</a>
			</div>
		</div>
		<br>
		<div class="borderleft col-md-4">
			<br>
			<center><h3>Machine Status</h3></center>
			<hr>

			<center><button class="btn" id="onoff" onclick="loadJSON()" ><img src="img/power-button.gif" height="100" width="100" ></button></center>
			<br>
			<center><p>Status : </p>
				<div id="status"></div>
			</center>
			<br><br><br><br>
		</div>


		<div class="borderleft col-md-4">
			<br><br><br><br>
			<div class="list-group">
				<a href="#" class="list-group-item disabled">
					DETAILS
				</a>
				<a href="#" class="list-group-item">KETINGGGIAN : ######</a>
				<a href="#" class="list-group-item">KECEPATAN : ######</a>
				
			</div>
		</div>
	</div>
	
	<div class=" background-grey container">
		<br><br>
		<h1 style="margin-left:15px;" id="levelText"></h1>
		<div class="col-md-12">
			<div class="progress">
				<div id="levelWater" class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
					<span id="leve" class="sr-only"></span>
				</div>
			</div>
		</div>
		<br><br><br><br><br>
	</div>

	<script>

		$(document ).ready(function(){
			var myVar = setInterval(levelWaterUpdate ,1000);
			function levelWaterUpdate(){
				var xmlhttp = new XMLHttpRequest();
				var url = "http://localhost/sysprogweb/data.json";

				xmlhttp.onreadystatechange=function() {
					if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
						myFunction(xmlhttp.responseText);
					}
				}
				xmlhttp.open("GET", url, true);
				xmlhttp.send();
				
				function myFunction(response) {
					var arr = JSON.parse(response);
					if(arr.Level >= 200){
						alert('FULL');
						clearTimeout(myVar);
					}
					var level = (arr.Level / 200) *100;
					document.getElementById("levelWater").setAttribute("aria-valuenow", level);
					document.getElementById("levelWater").setAttribute("style","width :" + level+  "%" );
					document.getElementById("levelText").innerHTML = level + "%";
				}

			}


		});



	</script>

</body>
</html>