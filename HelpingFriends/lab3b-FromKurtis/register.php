<?php 
	include("settings.php");

	$con = mysqli_connect($host, $name, $pass, $base);

	$name = $_POST["Name"];
	$email = $_POST["Email"];
	$username = $_POST["Username"];
	$passwd = SHA1($_POST["Password"]);
	$passwdcfm = SHA1($_POST["passConfirm"]);

	if($passwd != $passwdcfm)
	{
		echo "These passwords did not match!  Go back and try again";
	}
	else
	{
		$query = "SELECT * FROM Users WHERE Username='$username'";
		$result = mysqli_query($con, $query);

		$count = mysqli_num_rows($result);

		if($count == 1)
		{
			echo "This username already exists. Please choose another one.";
		}
		else
		{
			$query = "INSERT INTO Users (`UserId`, `Name`, `Username`, `Password`, `Email`, `Logged_in`) VALUES (NULL, '$name', '$username', '$passwd', '$email', '0')";
			$result = mysqli_query($con, $query);

			if(!$result){
				echo $name . $username . $passwd . $email;
				die("Sorry, Try Again" . mysqli_error($con));
			}
			else
			{
				header("location:contact_me.php");
			}
		}


	}

?>
