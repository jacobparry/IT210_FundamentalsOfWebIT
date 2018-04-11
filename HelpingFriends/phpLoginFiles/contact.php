<?PHP

session_start();

if (!isset($_SESSION['username'])) {

header ("Location: login.php");

}

?>

<html>
	<head>
		<title></title>
		<link rel = "Stylesheet" href="/css/bootstrap.css" type = "text/css" />
		<link rel = "Stylesheet" href="style.css" type = "text/css" />
		<script  src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="/js/bootstrap.js"></script>
	</head>

	<body>

		<nav class="navbar navbar-default navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home.html">BG</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
				<li><a href="About.html"> About Me</a></li>
				<li><a href="Skills.html"> Skills</a></li>
				<!--drop down menu -->
				<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Projects <span class="caret"></span></a>
          <ul class="dropdown-menu">
						<li><a href="Projects.html?slide=1" >FreeRide Academy</a></li>
						<li><a href="Projects.html?slide=2" >CampHappy.co</a></li>
						<li><a href="Projects.html?slide=3" >Resume Site</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="Projects.html">View All Projects</a></li>
          </ul>
        </li>
				<li><a href="Endorsements.html"> Endorsements</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
		<section>
    	<header>
				<h2>CONTACTS</h2>
			</header>

			  <button type="button" class="btn btn-info btn-lg"><a href="logout.php">Sign out</a></button>
		</section>


		</section>
		<script>
$(document).ready(function () {
$('.dropdown-toggle').dropdown();
});
</script>
	</body>
</html>
