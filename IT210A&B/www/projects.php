<!DOCTYPE HTML>
<!--
Created by:Tyler Bristow
This is an outline of a basic HTML page. Feel free to make any changes you would like.
-->
<html>

<head>

    <script>var id = "projects";</script>

    <link rel="shortcut icon" type="image/x-icon" href="assets/favicon-16x16.png">
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/projects.js"></script>
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
            Projects
        </h1>
        <p>
            I am not that lazy, I do stuff occationally.
        </p>
    </section>
    <section>
        <div>
        </div>
        <article>
            <div id="carousel-id" class="carousel slide projectcarousel" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-id" data-slide-to="0" class=""></li>
                    <li data-target="#carousel-id" data-slide-to="1" class=""></li>
                    <li data-target="#carousel-id" data-slide-to="2" class="active"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item">
                        <img alt="First slide" src="img/revan.jpg">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Darth Revan.</h1>
                                <p>Note: If .</p>
                                <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img alt="Second slide" src="img/deathbeam.jpg">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Starkiller base</h1>
                                <p>Cras justo odio, dapibus ac facil</p>
                                <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="item active">
                        <img alt="Third slide" src="img/sith.jpg">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Thug Life.</h1>
                                <p></p>
                                <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </article>
    </section>
    <section>
        
        <?php
            
            if (isset($_SESSION['username'])) 
            {?>
                <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="well well-sm">
                            <form class="form-horizontal" method="post" action="loadcomments.php">
                                <fieldset>
                                    <legend class="text-center header"> Leave a comment.</legend>
                                    
                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center">
                                            <i class="fa fa-pencil-square-o bigicon"></i>
                                        </span>
                                        <div class="col-md-8">
                                            <textarea class="form-control" id="comment" name="comment" placeholder="Enter your massage for us here." required rows="4" required></textarea>
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

                <?php
            }
        ?>

        <div id="commentTable">
        
        <?php
            require 'settings.php';

            $query = "SELECT Users.Name, Comments.Comment, Comments.Date FROM Users, Comments WHERE Users.UserID = Comments.UserID";

            $result = mysql_query($query) or die(mysql_error());

              echo "<table class=\"table table-striped\"><thead><tr id=\"rowhead\">
                        <th id=\"namehead\" class=\"active\" onclick=\"sortByName()\">Name</th>
                        <th id=\"companyhead\" onclick=\"sortCompany()\">Comment</th>
                        <th id=\"companyhead\" onclick=\"sortCompany()\">Date</th><tr>
                </thead>
                <tbody>";

            while ($row = mysql_fetch_array($result)) 
            {
                echo "<tr>";
                echo "<td>".$row['Name'];
                echo "<td>".$row['Comment'];
                echo "<td>".$row['Date'];
                echo "</tr>";
            }


        ?>
        </div>

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
        load_picture();
        $('.dropdown-toggle').dropdown();
    });
    </script>
    <script>
    loadProject();
    </script>
</body>

</html>
