<?php
	$jObject = file_get_contents("phones.json");
	$pObject = json_decode($jObject);

	$list = $pObject->phones;

	foreach ($list as $phone) {
		echo "<h3>" . $phone->name . "</h3>";
		echo '<img src="' . $phone->imageUrl . '"/><br/>';
		echo "Carrier: " . $phone->carrier . "<br/>";
		echo "Age: " . $phone->age . "<br/>";
		echo "Snippet: " . $phone->snippet . "<br/>";
		echo "<br/>";
		echo "<br/>";
	}
?>
