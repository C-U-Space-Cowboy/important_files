<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
		<script src="../jquery-3.3.1.min.js"></script>
    </head>
    <body>
		<?php
			echo '<h3>' . $_GET['search'] . '</h3>';
			$products = json_decode(file_get_contents('ads.json'), true);
			$choice = "";
			foreach ($products as $product)
				if ($product['name'] == $_GET['search']) {
				  $choice = $product;
				  break;
				}
			
			echo '<p>Description: ' . $choice['description'] . '</p>';
			echo '<p>Price: $' . $choice['price'] . '</p>';
			echo '<img src="images/' . $choice['image'] . '"/>';
		?>
    </body>
</html>
