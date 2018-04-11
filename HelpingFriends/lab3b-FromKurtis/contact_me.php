<!DOCTYPE HTML>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>

<?php
session_start();
include("settings.php");

ini_set("display_errors",1);
ini_set("track_errors",1);
ini_set("html_errors",1);
error_reporting(E_ALL);

$_SESSION["error"] = "";

if( isset($_POST["Username"]))
{

	$con = mysqli_connect($host, $name, $pass, $base);
	if(!$con)
	{
		
		die("Sorry, Try Again");
	}
	else
	{
		//echo "a;sldkfj";
		$password = sha1($_POST["Password"]);
		$username = $_POST["Username"];
		$query = "SELECT * FROM Users WHERE Username = '$username' AND Password = '$password' LIMIT 1";
		$results = mysqli_query($con, $query);
		$res = mysqli_fetch_object($results);
			if( isset($res->UserId))
			{
				
				$_SESSION["Logged_In"]=1;
				$_SESSION["Username"]=$res->Username;
				$_SESSION["Email"]=$res->Email;
				$_SESSION["Name"]=$res->Name;
				$_SESSION["UserId"]=$res->UserId;
				$_SESSION["error"]= "";
				$query = "UPDATE Users SET Logged_in = 1 WHERE Username = '$username'";
				mysqli_query($con, $query);
			}
			else
			{
				echo "a;sldkfj";
				$_SESSION["error"] = "Invalid Input.  Please Try Again.";
				include'login.php';
				request_log_in();


			}
	}
}
else
{
	
	include("login.php");
	request_log_in();
}

?>

<html>
	<head>
		<meta name="author" content="Kurtis Christensen">
		
		<title>Kurtis Christensen's Website</title>

		<link href = "bootstrap/css/bootstrap.css" rel = "stylesheet" >
		<link rel = "stylesheet" type = "text/css" href = "my_css/my_stylesheet.css" >

		<link href="img/favicon.ico" rel="icon" type="image/x-icon" />

		<script type = "text/javascript" src="js/bootstrap.min.js"></script>

		<script type="text/javascript" src="myjs/myjs.js"></script>

		  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

			<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>

		
	
	</head>
	
	<body>

		<section>

			<div id="Login_Modal" class="modal fade" data-keyboard="false" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header disableButton();">
		    		
		    		<h3>You are not logged in!</h3>
		  			</div>
		  				<div class="modal-body">
		  					<form action = localst>
		  						<label> Please enter your information: </label>
		    				
		    				  	<div class = "pull-right">
		    					<input id="FirstName" type="text" value = "" placeholder="[Enter first name here]":>
		  				    	</div>
		  					</form>
		  				</div>
		  				
  				<div class="modal-footer">
    			<button class="btn btn-success" onclick="storeName();">Save</button>
  				</div>
			</div>
			<a href = "logout.php"> Logout </a>
			<h1 class="intro"> Welcome to Kurtis Christensen's Website</h1>
			<h6 class id="welcome"> </h6>

			<div class="navbar navbar-inverse">
				 <div style = "height: auto;" class="navbar-inner">

				 	

					 <div class="container">

					 			

					 		<ul class="nav">

					 		<li class="active"><a href="home.html"><i class="icon-home"></i>
					 		Home</a></li>

					 		<!-- DROPDOWN CODE  -->

					 		<li class ="dropdown">


							<a href="#" class = "dropdown-toggle" data-toggle = "dropdown"><i class="icon-book"></i>


							Projects

							<b class ="caret"></b>


							</a>

							<ul class = "dropdown-menu">

							<li>

							<a href = "projects.php#0"></i> 

							Project 1</a></li>

							<li>

					 	    <a href = "projects.php#1"></i> 

							Project 2</a></li>

							<li>

							<a href = "projects.php#2"></i> 

							Project 3</a></li>

					 	    </ul>

					 	    <!-- END OF DROPDOWN CODE -->

							<li><a href="endorsements.html"><i class="icon-fire"></i>
							Endorsements</a></li>

							<li><a href="goals.html"><i class="icon-pencil"></i> 
							Goals</a></li>

							<li><a href="resume.html"><i class="icon-bookmark"></i>
							Resume</a></li>

							<li><a href="contact_me.php"><i class="icon-envelope"></i>
							Contact Me</a></li>
						 
						     
						      
						      <div class="nav-collapse collapse">
						        <!-- .nav, .navbar-search, .navbar-form, etc -->
						      </div>
						 
						    </div>
						  </div>
						</div>




				
		<div class="container">
			<form class="form" name ="sendEmail" action="sendEmail.php" method="POST">
				<H2> Feel Free to Email Me! </H2>

				<div style="margin-top:20px;">Subject:

					<input type="text" class = "input_text" name = "subject" id = "subject"/>



				<div class='input' style="margin-top:20px;">

							<textarea id="sendEmail" name="sendEmail" rows=5 cols=50 maxlength=500 required ></textarea><br>
							
							<button name="submit" class = "btn btn-success" type="Submit"> Send </button>
								
				</div>
		</div>
			
		
</section>

		 
		

			<script type="text/javascript"> 

			$(document).ready(function () {  

			$('.dropdown-toggle').dropdown();  

			});  

		</script>

		<script>
		  if (localStorage.UserName != "undefined" && localStorage.UserName != null)
			{
				displayUserName();
			}
			else
			{
				window.location="http://192.168.23.57/home.html";
			}
		</script>
	</body>

	<footer>
			<div class"container" >
				<div class="navbar navbar-fixed-bottom" >
					<p class="footer">
				  		 This site is currently under construction.
					</p>
					
				</div>
			</div>
	</footer>
</html>