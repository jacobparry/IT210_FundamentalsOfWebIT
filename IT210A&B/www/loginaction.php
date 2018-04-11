<?php  
//Start the Session
session_start();
 require('settings.php');

//3. If the form is submitted or not.
//3.1 If the form is submitted
if (isset($_POST['username']) and isset($_POST['password'])){
//3.1.1 Assigning posted values to variables.
$username = $_POST['username'];
$password = sha1($_POST['password']);
//3.1.2 Checking the values are existing in the database or not
$query = "SELECT * FROM `Users` WHERE UserName='$username' and Password='$password'";

$result = mysql_query($query) or die(mysql_error());
$count = mysql_num_rows($result);
//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
if ($count == 1){
$_SESSION['username'] = $username;

mysql_query("UPDATE $table SET Logged_in = '1' WHERE UserName='$username' and Password='$password';");

}
else{
//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
echo "Invalid Login Credentials.";
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


