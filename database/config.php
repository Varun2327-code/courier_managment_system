<?php 
    
	$host="localhost";
	$username="root";
	$password="";
	$db="courier_managment_system-master";
	$conn=mysqli_connect($host, $username, $password);
	$config = mysqli_select_db($conn,$db);

	// if($config)
	// {

	// 	echo "Database Connected";
	// }

	// else
	// {

	// 	echo "Database Connection Faied";

	// }
?>