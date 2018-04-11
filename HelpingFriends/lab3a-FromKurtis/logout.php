<?php
session_start();
$con = mysqli_connect("localhost", "kurtiscc", "Movies123", "IT210");
	if(!$con)
	{
		die("Sorry, Try Again");
	}
	else
	{
		$username = $_SESSION['Username'];
		$query = "UPDATE Users SET Logged_in = 0 WHERE Username = '$username'";
		mysqli_query($con, $query);
	}

session_destroy();
header('Location: home.html');
?>