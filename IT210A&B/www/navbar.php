<?PHP

session_start();

?>


<!--Navbar #1-->
<div>
    <nav class="navbar navbar-inverse" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="test.php">JP</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li id="home" class="">
                    <a href="home.php">
                        <span style="font-size: 18px" class="glyphicon glyphicon-home"></span>
                    </a>
                </li>
                <li id="about">
                    <a href="about.php">
                        About Me
                    </a>
                </li>
                <li id="endorse" class="">
                    <a href="endorse.php">
                        Endorsements
                    </a>
                </li>
                <li id="contact" class="">
                    <a href="contact.php">
                        <span style="font-size: 18px" class="glyphicon glyphicon-envelope"></span>
                    </a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-left">
                <li id="projects" class="dropdown">
                    <a href="projects.php" class="dropdown-toggle" data-toggle="dropdown">Projects 
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="projects.php">Projects Main Page</a>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li>
                            <a href="projects.php?start=0">Project 1</a>
                        </li>
                        <li>
                            <a href="projects.php?start=1">Project 2</a>
                        </li>
                        <li>
                            <a href="projects.php?start=2">Project 3</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <?php
                if (isset($_SESSION['username'])) 
                {
                   echo "<ul class=\"nav navbar-nav navbar-right\">
                             <li id=\"login\">
                                 <a href=\"logout.php\">Log Out</a>
                            </li>
                        </ul>";
                }
                else
                {
                   echo "<ul class=\"nav navbar-nav navbar-right\">
                            <li id=\"login\">
                                <a href=\"register.php\">Log In</a>
                            </li>
                        </ul>";
                }
            ?> 
        </div>
        <!-- /.navbar-collapse -->
    </nav>
</div>


<script>
    document.getElementById(id).className += " active";
</script>