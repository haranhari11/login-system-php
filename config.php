<?php 
	
	// Development Connection
// 	$dbhost="localhost";
// 	$dbuser="root";
// 	$dbpass="";
// 	$dbname="login_system";

	// Remote SQL Connection
	$dbhost="remotemysql.com";
	$dbuser="xFjWG1oTmb";
	$dbpass="vS2p3y1UbL";
	$dbname="xFjWG1oTmb";

	$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
	if($conn->connect_error) {
		die("Could not connect to the database".$conn->connect_error);
	}
	
?>
