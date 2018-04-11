<!DOCTYPE HTML>
<?PHP

session_start();

if (!isset($_SESSION['username'])) 
{
header ("Location: register.php");
}

?>
    <html>

    <head>
        <script> var id = "contact"; </script>

        <link rel="shortcut icon" type="image/x-icon" href="assets/favicon-16x16.png">

        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script src="js/bootstrap.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <title>Contact</title>
    </head>

    <body>
        <header>
            <?php
                include ('navbar.php');
            ?>

            <?php
                require 'settings.php';
                $popuser = $_SESSION['username'];
                $popquery = "SELECT Name, Email From Users WHERE UserName = '$popuser'";

                $reslt = mysql_query($popquery) or die(mysql_error());
                $rows = mysql_fetch_array($reslt);
            ?>
        </header>
        <section class="topsection">
            <h1>
            Contact Me
        </h1>
            <p>
                You know you want to know me.
            </p>
        </section>
        <section>
            <!-- http://www.prepbootstrap.com/bootstrap-template/contact-form -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="well well-sm">
                            <form class="form-horizontal" method="post" action="sendmail.php">
                                <fieldset>
                                    <legend class="text-center header"></legend>
                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center">
                                            <i class="fa fa-user bigicon"></i>
                                        </span>
                                        <div class="col-md-8">
                                            <input id="fname" name="name" type="text" placeholder="First and Last Name" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center">
                                            <i class="fa fa-envelope-o bigicon"></i>
                                        </span>
                                        <div class="col-md-8">
                                            <input id="email" name="email" type="text" placeholder="Email Address" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center">
                                            <i class="fa fa-pencil-square-o bigicon"></i>
                                        </span>
                                        <div class="col-md-8">
                                            <textarea class="form-control" id="message" name="message" placeholder="Enter your massage for us here." required rows="7"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12 text-center">
                                            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
        </section>
        <footer>
            <div class="row-fluid">
                <div id="right" class="span4 float-right"></div>
                <div id="left" class="span4 float-left"></div>
                <div id="center" class="span4">
                    <span>
                        <i class="fa fa-twitter fa-2x"></i>
                    </span>
                    <span>
                        <i class="fa fa-facebook-square fa-2x"></i>
                    </span>
                    <span>
                        <i class="fa fa-rebel fa-2x"></i>
                    </span>
                    <span>
                        <i class="fa fa-empire fa-2x"></i>
                    </span>
                </div>
            </div>
        </footer>
        <style>
        .header {
            font-size: 27px;
            padding: 10px;
        }
        
        .bigicon {
            font-size: 35px;
            color: #36A0FF;
        }
        </style>
        <script>
        $(document).ready(funtion() {
            $('.dropdown-toggle').dropdown();
        });
        </script>

        <script type="text/javascript">
            document.getElementById("fname").value = "<?php echo $rows['Name'];?>";
            document.getElementById("email").value = "<?php echo $rows['Email'];?>";
        </script>
    </body>

    </html>
