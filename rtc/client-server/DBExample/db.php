<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Product Titles</title>
	<meta http-equiv="content-type" 
		content="text/html;charset=utf-8" />
	<meta http-equiv="Content-Style-Type" content="text/css" />
</head>

<body>
	<?php
	
		//Connect to database server
		$cnxn = mysql_connect("localhost", $userid, $pwd)
			or die("Error connecting to database.");
		//if($cnxn)
		//	echo "Connected.<br />";
		
		//Select database
		define("DB_NAME", "choose one");
		mysql_select_db(DB_NAME);
		
		//Query the database
		$sql = "SELECT * FROM products_tbl";
		$result = mysql_query($sql, $cnxn);
		
		//Process the results
		while($row = mysql_fetch_array($result))
		{
			echo $row['productID'] . ": " .
				 $row['productName'] . "<br />";	
		}
		
		//Close the connection
		mysql_close($cnxn);
		
		
	?>      
</body>

</html>