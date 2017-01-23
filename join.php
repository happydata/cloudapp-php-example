<?php
	// Allow Cors
	include('cors.php');
	cors();
	// Read Cloud App JOIN Config and output as json
	$data = file_get_contents ('./join.json');
	header('ContentType:application/json');
	echo $data;
?>
