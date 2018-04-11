<?php
        include ('navbar.php');
?>

<?php  
//Start the Session
session_start();
 require('settings.php');

//3. If the form is submitted or not.
//3.1 If the form is submitted
if (isset($_POST['username']) and isset($_POST['password']))
{
	//3.1.1 Assigning posted values to variables.
	$name = $_POST['name'];
	$username = $_POST['username'];
	$password = sha1($_POST['password']);
	$email = $_POST['email'];

	echo $name;

	//3.1.2 Checking the values are existing in the database or not
	$query = "SELECT * FROM `Users` WHERE UserName='$username'";

	$result = mysql_query($query) or die(mysql_error());
	$count = mysql_num_rows($result);


	//3.1.2 If the username is already in the database, then no user will be created.
	if ($count == 1)
	{

		echo "That Username has already been taken. Please Try Again.<br></br>";
		echo "<a role=\"button\" class=\"btn btn-default\" href=\"register.php\">Go Back to Registration</a>";
		#header("Location: register.php");
	
	}

	//3.1.3 If the username is not taken, a user will be created. A session variable with the user will be made, and he will be logged in.
	else
	{
		$createQuery = "INSERT INTO `Users`(`UserID`, `Name`, `UserName`, `Password`, `Email`, `Logged_in`) VALUES (NULL, '$name', '$username','$password','$email',0)";
		mysql_query($createQuery) or die(mysql_error());

		$_SESSION['username'] = $username;

		mysql_query("UPDATE $table SET Logged_in = '1' WHERE UserName='$username' and Password='$password';");
	}
}

//3.1.4 if the user is logged in Greets the user with message
if (isset($_SESSION['username'])){
$username = $_SESSION['username'];
echo "Hai " . $username . "
";
echo "This is the Members Area
";
echo "<a href='logout.php'>Logout</a>";


header("Location: contact.php");
}
?>


