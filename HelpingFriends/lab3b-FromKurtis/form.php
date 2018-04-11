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

							<a href = "projects.html#0"></i> 

							Project 1</a></li>

							<li>

					 	    <a href = "projects.html#1"></i> 

							Project 2</a></li>

							<li>

							<a href = "projects.html#2"></i> 

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
			<form class="form" name ="register" action="register.php" method="POST">
				<H2> Please Register Below: </H2>
				
			
				<div  style="margin-top:20px;">Name:
					
						<input type="text" name="Name" class="input-block-level" title="Name" value="" size="30" required>
					
				</div>
			
				<div  style="margin-top:20px;">Username:
					
						<input type="text" name="Username" class="input-block-level" title="Username" value="" size="30" required>
					
				</div>
				
				<div  style="margin-top:20px;">Email:
					
						<input type="email" name="Email" class="input-block-level" title="Email" value="" size="30"  required>
				
				</div>
				
				<div style="margin-top:20px;">Password:
					
						<input type="password" name="Password" class="input-block-level" title="Password" value="" size="30" required>
					
				</div>
				
				<div style="margin-top:20px;">Re-enter Password:
					
						<input type="password" name="passConfirm" class="input-block-level" title="Password" value="" size="30"  required>
					
				</div>
	
				<button class="btn btn-success" type ="submit" name="submit" class="input-block-level" value="Submit" action="register.php">Register </button>
				<form name = "back">
					<button type ="button" value="<--" class="btn btn-success" onClick="window.location.href='contact_me.php'">Back </button>
				</form>	
			</form>
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