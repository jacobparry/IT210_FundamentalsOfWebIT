<!DOCTYPE HTML>
<!--
Created by:Tyler Bristow
This is an outline of a basic HTML page. Feel free to make any changes you would like.
-->
<html>

<head>

    <script>var id = "home";</script>

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
        <div>
        </div>
        <article>
            <h2>Short Bio</h2>
            <div class="row-fluid">
                <div id="right" class="span4 float-right">Span4</div>
                <div id="left" class="span4 float-left">span4</div>
                <div id="center" class="span4">
                    <img src="http://me.byu.edu/sites/default/files/byu_logo.gif" /> I go to BYU. I was a 210 student and I can't seem to think of what to write here. Here is random text: Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed dia m nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                </div>
            </div>
        </article>
    </section>
    <section>
    </section>
    <footer>
        <div class="row-fluid">
            <div id="right" class="span4 float-right">Span4</div>
            <div id="left" class="span4 float-left">span4</div>
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
