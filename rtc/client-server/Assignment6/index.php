<html>
    <head>
        <title>Assignment 6</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
		<?php
			$message = "";
			if (isset($_POST["phone"])) {
				$valid = preg_match('/^((\(\d{3}\) ?)|(\d{3} ?(\.|-)? ?))\d{3} ?(\.|-)? ?\d{4}$/', $_POST["phone"]);
				$message = $valid ? "Valid Phone Number" : "Invalid Phone Number";
			}
		?>

		<form method="post" >
			<label for="phone">Phone Number:</label>
			<input type="text" id="phone" name="phone" />
			<?php echo $message; ?>
			<br/>
			<br/>
			<input type="submit" value="go!" />
		</form>
    </body>
</html>
