<?php
        include ('navbar.php');
?>

<?php  
//Start the Session
session_start();
 require('settings.php');


//3. If the form is submitted or not.
//3.1 If the form is submitted
	if (isset($_SESSION['username']))
	{
		//3.1.1 Assigning posted values to variables.
		$username = $_SESSION['username'];
		$comment = $_POST['comment'];
		$date = date();


		//3.1.2 Queries the DB to get the wanted value. I had to use fetch_array to get the results, but it gives it back as an array, so I had to make a new variable to pull the value from it.
		$query = "SELECT `UserID` FROM `Users` WHERE UserName='$username'";

		$result = mysql_query($query) or die(mysql_error());
		$data = mysql_fetch_array($result);
		$useID = $data['UserID'];
		$count = mysql_num_rows($result);

		//3.1.2 If there is only one row, which there should be because I want a unique value..
		if ($count == 1)
		{

			$createQuery = "INSERT INTO `Comments`(`UserID`, `Comment`, `Date` ) VALUES ('$useID', '$comment', '$date')";
			mysql_query($createQuery) or die(mysql_error());
			$_SESSION['username'] = $username;	

		}

		//3.1.3 If there is not only 1 row, then there is some error. This would be that the user is not registered.
		else
		{

			echo "You have not registered. Please register to leave comments.<br></br>";
			echo "<a role=\"button\" class=\"btn btn-default\" href=\"register.php\">Go Back to Registration</a>";

		}
	}

//3.1.4 The user will be taken back to projects.
header("Location: projects.php");

?>
