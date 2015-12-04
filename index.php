<?php $status = "ON"; ?>
<!DOCTYPE html>
<html>
<head>
	<link href="css/bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100' rel='stylesheet' type='text/css'>
	<title>Web Service WATER FLOW DETECTOR</title>
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
			</div>
		</div>
		<br>
		<div class="borderleft col-md-4">
			<br>
			<center><h3>Machine Status</h3></center>
			<hr>

			<center><button class="btn" id="onoff" onclick="onoff()"><img src="img/power-button.gif" height="100" width="100" ></button></center>
			<br>
			<center><p>Status : </p>
				<div id="status"><?php echo $status; ?></div>
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
		<h1 style="margin-left:15px;"> Progres Bar Still 70% :</h1>
		<div class="col-md-12">
			<div class="progress">
				<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
					<span class="sr-only">70% Complete (success)</span>
				</div>
			</div>
		</div>
		<br><br><br><br><br>
	</div>

	<script>
			function onoff() {

				 <?php
				 if($status == "OFF"){
				 	$status = "ON";
				 }else{
				 	$status = "OFF";
				 }

				 ?>
				

			}
		</script>

	</body>
	</html>