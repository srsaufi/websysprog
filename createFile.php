<?php 


if(isset($_POST['data']) && !empty($_POST['data'])) {
	
	$data = json_decode(stripslashes($_POST['data']));
	$myfile = fopen("status.json", "w") or die("Unable to open file!");
	fwrite($myfile, $_POST['data']);
	fclose($myfile);
}


?>