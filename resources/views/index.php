<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TV Welschenrohr</title>

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
    <?php
            $err = Session::get('error');
            if(strlen($err) > 0){
                echo '<script type="text/javascript">';
                echo 'alert("' . $err . '");';
                echo '</script>';
                Session::forget('error');
            }
        ?>
    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('http://www.tvwelschenrohr.ch/wordpress/wp-content/uploads/2011/07/1.jpg');"></div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');"></div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Wilkommen beim Turnverein Welschenrohr
                </h1>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw"></i> Leichtathletik</h4>
                    </div>
                    <div class="panel-body">
                        <?php
                            $content = DB::table('departments')->where('id', '2')->first();
                            $text = $content->description;
                            if(strlen($text) > 200){
                                $text = substr($text, 0, 200);
                                $text = $text . '...';
                            }
                            echo sprintf("<p>%s</p>", $text);
                        ?>
                        <a href="/department/2" class="btn btn-default">Mehr...</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw"></i> Korbball</h4>
                    </div>
                    <div class="panel-body">
                        <?php
                            $content = DB::table('departments')->where('id', '1')->first();
                            $text = $content->description;
                            if(strlen($text) > 200){
                                $counter = 200;
                                while($text[$counter] != ' '){
                                    $counter++;
                                }
                                $text = substr($text, 0, $counter);
                                $text = $text . '...';
                            }
                            echo sprintf("<p>%s</p>", $text);
                        ?>
                        <a href="/department/1" class="btn btn-default">Mehr...</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw"></i> Aerobic</h4>
                    </div>
                    <div class="panel-body">
                        <?php
                            $content = DB::table('departments')->where('id', '3')->first();
                            $text = $content->description;
                            if(strlen($text) > 200){
                                $counter = 200;
                                while($text[$counter] != ' '){
                                    $counter++;
                                }
                                $text = substr($text, 0, $counter);
                                $text = $text . '...';
                            }
                            echo sprintf("<p>%s</p>", $text);
                        ?>
                        <a href="/department/3" class="btn btn-default">Mehr...</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Sponsor Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Sponsoren</h2>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive customer-img" src="/sponsors/bimbosan.bmp" alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive customer-img" src="/sponsors/ford_fluri.jpg" alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive customer-img" src="/sponsors/image0011.gif" alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive customer-img" src="/sponsors/Inserat_Grico_Beamer-e1263890315294.jpg" alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive customer-img" src="/sponsors/marti_speda.jpg" alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive customer-img" src="/sponsors/raiffeisen.jpg" alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive customer-img" src="/sponsors/zimmerei_meier.jpg" alt="">
            </div>
        </div>
        <!-- /.row -->

        <!-- Features Section -->
        
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

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
