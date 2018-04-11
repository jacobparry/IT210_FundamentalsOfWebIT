<!DOCTYPE HTML>
<!--
Created by:Tyler Bristow
This is an outline of a basic HTML page. Feel free to make any changes you would like.
-->
<html>

<head>

<script>var id = "endorse";</script>

    <link rel="shortcut icon" type="image/x-icon" href="assets/favicon-16x16.png">
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/endorse.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <title>My Home Page</title>
</head>

<body onload="loadFromLocalStorage()">
    <header>

        <?php
            include ('navbar.php');
        ?>

        
    </header>
    <section class="topsection">
        <h1>
            Endorsements
        </h1>
        <p>
            Come on, say something nice.
        </p>
    </section>
    <section class="middlesection">
        <div class="container">
        <form method="post" action="updatejson.php">
            <input id="currentName" onkeyup="recordNameStrokes()" placeholder="What is your name?" name="currentName">
            </input>
            <input id="currentEndorsement" onkeyup="recordEndorsementStrokes()" placeholder="Endorsements please?" name="currentEndorsement">
            </input>
            <button>Submit</button>
        </form>
            <!--
            <a class="btn btn-primary" data-toggle="modal" href='#modal-id'>Submit</a>
            <div class="modal fade" id="modal-id">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Are you sure you want to submit your endorsement?</h4>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" onclick="saveJSON()" data-dismiss="modal">Confirm</button>
                        </div>
                    </div>
                </div>
            </div>
            -->
            <button onclick="sortByName()">Sort by Name</button>
            <button onclick="sortByDate()">Sort by Date</button>
            <div id="endorsementTable">
            </div>
            <!--
                <table id="endorsementTable">
                    <tr>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Endorsement</th>
                    </tr>
                   
                </table>
                -->
        </div>
        <script>
        </script>
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
