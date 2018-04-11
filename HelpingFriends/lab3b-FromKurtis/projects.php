<!DOCTYPE HTML>

<html>
	<head>
		<meta name="author" content="Kurtis Christensen">
		
		<title>Kurtis Christensen's Website</title>

		<link href = "bootstrap/css/bootstrap.css" rel = "stylesheet" >
		<link href = "bootstrap/css/bootstrap.min.css"rel="stylesheet" >
		<link href = "bootstrap/css/bootstrap.min.css">
		<link rel = "stylesheet" type = "text/css" href = "my_css/my_stylesheet.css" >

		<link href="img/favicon.ico" rel="icon" type="image/x-icon" />

		<script type = "text/javascript" src="js/bootstrap.min.js"></script>

		<script type="text/javascript" src="myjs/myjs.js"></script>

		
	
	</head>
	
	<body onload = "beginCarousel();">

		<section>

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

							<a onclick = "$('#Carousel').carousel(0);"></i> 

							Project 1</a></li>

							<li>

					 	    <a onclick = "$('#Carousel').carousel(1);"></i> 

							Project 2</a></li>

							<li>

							<a onclick = "$('#Carousel').carousel(2);"></i> 

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

				
			<article>
				<h2 class="about_me"> My Projects </h2>
			
			     <!-- Carousel -->
				 
				  <div class ="span9 offset1"> 
					<div id="Carousel" class="carousel slide"> 
		  			<ol class="carousel-indicators">
		  			  <li data-target="#Carousel" data-slide-to="0" class="active"></li>
		   			 <li data-target="#Carousel" data-slide-to="1"></li>
		  			  <li data-target="#Carousel" data-slide-to="2"></li>
 					</ol>
		  <!-- Carousel items -->
		 		 <div class="carousel-inner">
		   		 <div class="active item"><img src = "my_images/Waterfall.jpg"/></div>
		  		 <div class="item"><img src = "my_images/Beach.jpg"/></div>
		  		 <div class="item"><img src = "my_images/Sun.jpg"/></div>
		  		 </div>
		  <!-- Carousel nav -->
		  <a class="carousel-control left" href="#Carousel" data-slide="prev">&lsaquo;</a>
		  <a class="carousel-control right" href="#Carousel" data-slide="next">&rsaquo;</a>
					</div>
				
					
			<!-- End of Carousel -->

			<div id = "Comments">
															
			</div>
				<form name="Comments" action="comments.php" method="POST">
					<p>
						Please leave your comments below.
					</p>
						<div class='input'>
							<textarea id="comments" name="comments" rows=5 cols=50 maxlength=250 required ></textarea><br>
								<button name="submit" class = "btn btn-success" type="Submit"> Submit </button>
								
						</div>
				</form>

			<?php
			include "settings.php";

			$query = "SELECT Name, Comment, `Time Stamp` FROM Users, Comments WHERE (Users.UserId = Comments.UserId);";
			$res = mysqli_query($con, $query);

			echo "<table><thead>
			<th>Name</th>
			<th>Comments</th>
			<th>Date</th>
			</thead><tbody>";

			while($row = mysqli_fetch_array($res)){
				echo "<tr><td>" . $row['Name'] . "</td><td>" . $row['Comment'] . "</td><td>" . $row['Time Stamp'] . "</td></tr>";
			}

			echo "</tbody><table>";

			?>

			</div>
			</article>
			
		
			</section>



		
		  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

			<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>

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


</html>