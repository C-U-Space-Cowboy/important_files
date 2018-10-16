<html>
	<head>
		<title>Assignment 4</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<?php
			$message = "";
			function validateField() {
				return $_POST["search"] != "";
			}
			if (isset($_POST["search"]))
				$message = validateField() ? "" : "Error: Field must not be empty";
		?>
		<h1>Enter the Product's Name</h1>
		<form method="post">
			<input type="text" name="search"/>
			<input type="submit" value="Search"/>
			<?php echo $message; ?>
		</form>
		<?php
			function loadProducts() {
				$filetext = fread(fopen("products.txt", "r"), filesize("products.txt"));
				return preg_split("/\n/", $filetext);
			}
			$products = loadProducts();
			function findProduct($search) {
				global $products;
				foreach ($products as $key => $product){
					if (preg_match('/^' . $search . '/', $product)) {
						return str_replace(";", "<br/>", $product);
					}
				}
				return "No product found.";
			}
			if (isset($_POST["search"]) && validateField($_POST["search"]))
				echo findProduct($_POST["search"]);
		?>
	</body>
</html>
