<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $database="sparks_bank";
// $conn = mysqli_connect($servername,$username,$password,$database);
$conn = mysqli_connect("localhost","root","","sparks_bank");
	

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}
//create a database

//check for database creation success


?>





