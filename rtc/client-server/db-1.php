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
		$stmt;
		$pdo;
		try{
			//Connect to database server
			$userid = "root";
			$pwd = "";
			//define("DB_NAME", "smallstore");
			$dbname = "smallstore";
			$host = "localhost";

			// connect string
			$dsn = "mysql=$host;db=$dbname;charset=utf8mb4";
//			$con = new mysqli($host, $userid, $pwd, $dbname);
	//        $cnxn = mysqli_connect($host, $userid, $pwd, $dbname)
	//                or die("Error connecting to database.");
			$opd = array( PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
						  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
						  PDO::ATTR_EMULATE_PREPARES => false, );
			$pdo = new PDO($dsn, $userid, $pwd, $opt);
			$pdo->setAttribute(PDO:ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
			if (mysqli_connect_errno()) {
				die ("Error connectig to the database");
			}
			//
			////if($cnxn)
			//	echo "Connected.<br />";
			//Select database
	//        define("DB_NAME", "smallstore");
	//        mysql_select_db(DB_NAME);

			//Query the database
			// sql comand
			$sql = "SELECT * FROM tblProduct";
			// PDO statement
			$stmt = $pdo->query($sql);

			if ($stmt->num_rows > 0) {
				//Process the results
				while ($row = $stmt->fetch_array()) {
					echo $row['productId'] . ": " .
					$row['name'] . "<br />";
				}
			}

			//Close the connection
			//mysqli_close($cnxn);
			$stmt->close();
			$pdo->close();
    	} catch (SQLException $ex) {
			die("Something went wrong:" . $ex->getMessage());
		} catch (Exception $ex) {

		} finally {
			$stmt = null;
			$pdo = null;
		}
        // create your favvorite table in MySQl server
        // use the object oriented MySQli interface to
        // display all the columns of the table to
        // a table in HTML
        ?>      
    </body>

</html>
