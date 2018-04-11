
<!DOCTYPE HTML>


<html>
	<head>

	<script>var id = "login";</script>

		<title>Jacob Parry</title>
		<link rel = "Stylesheet" href="/css/bootstrap.css" type = "text/css" />
		<link rel = "Stylesheet" href="style.css" type = "text/css" />
		<script  src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="/js/bootstrap.js"></script>
	</head>

	<body>

		<?php
        	include ('navbar.php');
    	?>


<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Please sign in to use this page</h1>
            <div class="account-wall">
                <form class="form-signin" action="loginaction.php" method="post">
                <input type="text" name='username' class="form-control" placeholder="Username" id='username'>
                <input type="password" name='password'class="form-control" id='password' placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit" name='submit'>Sign in</button>
								<a href=register.php>Register to see the contacts page</a>
        </div>
    </div>
</div>



		</section>
		<script>
$(document).ready(function () {
$('.dropdown-toggle').dropdown();
});
</script>
	</body>
</html>
