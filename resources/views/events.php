<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Events</title>

    <!-- Own CSS -->
    <link href="css/style.css" rel="stylesheet" type="text/css">
    
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">TV Welschenrohr</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="/department/2">Leichtathletik</a>
                    </li>
                    <li>
                        <a href="/department/1">Korbball</a>
                    </li>
                    <li>
                        <a href="/department/3">Aerobic</a>
                    </li>
                    <li>
                        <a href="/Events">Events</a>
                    </li>
                    <?php
                        $user = Session::get('loggedInUser');
                        if($user != null){
                            echo '<li>';
                            echo '<a href="/Profile">Profile</a>';
                            echo '</li>';
                        }
                    ?>
                    <li>
                        <!--<form class="navbar-form navbar-left" role="search">-->
                            <?php
                                $user = Session::get('loggedInUser');
                                if($user == null){
                                    echo '<form class="navbar-form navbar-left" role="search">';
                                    echo '<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">SignIn</button>';
                                } else {
                                    echo '<form class="navbar-form navbar-left" method="GET" action="/Logout" role="form">';
                                    echo '<a type="button" class="btn btn-danger" href="/Logout">LogOut</a>';
                                }
                                echo '</form>';
                            ?>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- login modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Login</h4>
                </div>
                <div class="modal-body">
                    <form class="form" method="POST" action="/Login" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="E-Mail">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Passwort">
                        </div>
                            <button type="submit" class="btn btn-success">Login</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            <a href="/Regrister" class="navbar-text navbar-link pull-right">Regristrieren</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Events 
                <?php
                    use App\Member;

                    $user = Session::get('loggedInUser');
                    if($user != null ) {
                        $member = Member::find($user->id);
                        if($member->is_admin == 1){
                         echo '<a class="btn btn-success" href="/CreateEvent">Erstellen</i></a>';
                        }
                    }
                ?>
                
                </h1>
                <ol class="breadcrumb">
                    <li><a href="/">TV Welschenrohr</a>
                    </li>
                    <li class="active">Events</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Project One -->
        <?php
        use App\Event;

                $events = Event::all();
                foreach($events as $event){
                    echo '<div class="row">';
                        echo '<div class="col-md-7">';
                            echo '<a href="/Event">';
                                echo '<img class="img-responsive img-hover" src="' . $event->picture . ' " alt="">';
                            echo '</a>';
                        echo '</div>';
                        echo '<div class="col-md-5">';
                            echo '<h3>' . $event->name . '</h3>';
                            $datetime = explode(' ', $event->startdate);
                            echo '<h4 class="event-list"><i class="fa fa-fw fa-calendar-o"></i> ' . $datetime[0] . '</h4>';
                            echo '<h4 class="event-list"><i class="fa fa-fw fa-clock-o"></i> ' . $datetime[1] . '</h4>';
                            echo '<p>' . $event->description . '</p>';
                            echo '<a class="btn btn-primary" href="/Event/' . $event->id . '">Zeige Event</i></a>';
                        echo '</div>';
                    echo '</div>';
                }
            ?>
        <!-- /.row -->

        <hr>
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Raphael Brunner 2015</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
