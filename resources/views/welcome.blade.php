<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

    <!-- My Custom CSS -->
    <link href="css/customCSS.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<div id="wrapper">
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a href="#">
                    TGamer
                </a>
            </li>
            <li>
                <a href="#">Top Stream</a>
            </li>
            <li>
                <a href="#">Popular Stream</a>
            </li>
            <li>
                <a href="#">Newest Stream</a>
            </li>
            <li>
                <a href="#">Search</a>
            </li>
            <li>
                <a href="#">Login</a>
            </li>
            <li>
                <a href="#">Register</a>
            </li>
            <li>
                <a href="#">About</a>
            </li>
        </ul>
        <button type="button" id="menuButton1"><span class="glyphicon glyphicon-minus"></span></button>
    </div>
    <!-- /#sidebar-wrapper -->
    <nav class="navbar navbar-default myNav">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">TGamer "Everyone is watching"
                </a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#smallLinks" aria-expanded="false"><span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="smallLinks">
                <ul class="nav navbar-nav">
                    <li class="sidebar-brand">
                        <a href="#">
                            TGamer
                        </a>
                    </li>
                    <li>
                        <a href="#">Top Stream</a>
                    </li>
                    <li>
                        <a href="#">Popular Stream</a>
                    </li>
                    <li>
                        <a href="#">Newest Stream</a>
                    </li>
                    <li>
                        <a href="#">Search</a>
                    </li>
                    <li>
                        <a href="#">Login</a>
                    </li>
                    <li>
                        <a href="#">Register</a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page Content -->
    <div id="videoTron" class="jumbotron embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/IvN5h9BE444?list=RDEM0zq8VzKErUxra0JFwEyQ3g"></iframe>
    </div>
    <button type="button" id="MenuButton"><span class="glyphicon glyphicon-plus"></span></button>
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Top Stream</h1>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Comments
                        </div>
                        <div class="panel-body">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="http://orig01.deviantart.net/4924/f/2014/194/d/6/dbz__kid_buu_skype_avatar_by_mikedarko-d7j8nan.png" style="width: 64px; height: 64px;">
                                    </a>
                                </div>
                                <div class="media-body well">
                                    <h4 class="media-heading">kidBuu2117</h4>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Menu Toggle Script -->
<script>
    $("#menuButton1").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    $("#MenuButton").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

</body>

</html>