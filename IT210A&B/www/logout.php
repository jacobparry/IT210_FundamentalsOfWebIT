<?php
session_start();
require ('settings.php');
$con = mysqli_connect("localhost", "myusername", "123456", "IT210");
	if(!$con)
	{
		die("Sorry, Try Again");
	}
	else
	{
		$username = $_SESSION['Username'];
		mysql_query("UPDATE $table SET Logged_in = '0';");		mysqli_query($con, $query);
	}

session_destroy();
header('Location: home.php');
?>