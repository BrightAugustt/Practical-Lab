<?php
require "databasecredentials.php";


// Create connection
$con = new mysqli($servername,$username,$password,$dbname);


//Check Connection
if ($con -> connect_error) {
	// code
	die("Connection failed: " .$con -> connect_error)
}

echo "Connected Succesfully";




?>