<?php
	$user = 'root';
	$pwd = '';
	$dbname = 'testdb';
	$port = ':3306';
	$cdn = "mysql:host=localhost$port;dbname=$dbname";
	// preferably put it in a try block
	try {
		$dbh = new PDO($cdn, $user, $pwd);
		// define the sql statement
		// use named parameters placeholders
		$sql = "INSERT INTO symbols (country, animal) " .
			   "VALUES (:country, :name)";
		$statement = $dbh->prepare($sql);
		$country = "South Africa";
		$name = "Cheetah";
		$statement->bindParam(':country', $country, PDO::PARAM_STR);
		$statement->bindParam(':name', $name, PDO::PARAM_STR);
		$statement->execute();
	} (catch PDOException $e) {
		echo $e->getMessage();
	}
?>
