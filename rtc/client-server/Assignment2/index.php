<html>
    <head>
        <title>Assignment 2</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
		<?php
			for ($x = 0; $x <= 10; $x++){
				echo $x;
				if ($x != 10){
					echo ", ";
				}
			}	
		?>

		<h3>Shopping List</h3>
		<?php
			$list = array("Vacuum Cleaner",
						  "Slippers",
						  "Dishes with Flower Pattern",
						  "Wash Cloth",
						  "Dish Detergent");
			foreach ($list as $item){
				echo $item . "<br/>";
			}
		?>

		<h3>Shopping List</h3>
		<?php
			$list = array("Vacuum Cleaner" => 54.95,
						  "Slippers" => 7.99,
						  "Dishes with Flower Pattern" => 105.6,
						  "Wash Cloth" => 1.54,
						  "Dish Detergent" => 0.99);
			foreach ($list as $item => $price){
				echo $item . " for " . $price . "<br/>";
			}
		?>
    </body>
</html>
