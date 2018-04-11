<!DOCTYPE HTML>
<!--
Created by:Tyler Bristow
This is an outline of a basic HTML page. Feel free to make any changes you would like.
-->
<html>

<head>


    <link rel="shortcut icon" type="image/x-icon" href="assets/favicon-16x16.png">
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <title>My Home Page</title>
</head>

<body>
    <header>

    <?php
        include ('navbar.php');
    ?>
        
    </header>
    <section class="topsection">
        <h1>
            Jacob Parry
        </h1>
        <p>
            Committed father, husband, employee, and friend.
        </p>
    </section>
    <section>
       

        <article>
             <!-- http://www.prepbootstrap.com/bootstrap-template/contact-form -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="well well-sm">
                            
                        </div>
                    </div>
                </div>
            </div>
        </article>

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
    <script>
    $(document).ready(funtion() {
        $('.dropdown-toggle').dropdown();
    });
    </script>
</body>

</html>
