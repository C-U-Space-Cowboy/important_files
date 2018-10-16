<?php
	$jObject = '[{
		"name" : "Will",
		"age" : 18,
		"phone" : "867-5309",
		"courses" : [
			"CSI-250",
			"CSI-254",
			"CSI-291"
		]
	}, {
		"name" : "Red",
		"age" : 0,
		"phone" : "000-0000",
		"courses" : [
			"CSI-250",
			"CSI-254",
			"CSI-291"
		]
	}]';

	// php object fromo the JSON data
	$pObject = file_get_contents("mydata.json");

	var_dump($pObject);

	echo "<pre>";
	print_r($pObject);
	echo "</pre>";
?>
