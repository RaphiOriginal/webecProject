<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Regristrieren</title>

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
                        <a href="/Leichtathletik">Leichtathletik</a>
                    </li>
                    <li>
                        <a href="/Korbball">Korbball</a>
                    </li>
                    <li>
                        <a href="/Aerobic">Aerobic</a>
                    </li>
                    <li>
                        <a href="/Events">Events</a>
                    </li>
                    <li>
                        <a href="/Profile">Profile</a>
                    </li>
                    <li>
                        <form class="navbar-form navbar-left" role="search">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">SignIn</button>
                        </form>
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
                    <form class="form" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" placeholder="Benutzername">
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
                <h1 class="page-header">Neuen Account erstellen
                </h1>
                <ol class="breadcrumb">
                    <li><a href="/">TV Welschenrohr</a>
                    </li>
                    <li class="active">Regristrieren</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <form class="form-horizontal form-group" role="form">
                <div class="form-group">
                    <label for="prename" class="col-sm-2 control-label">Vornamen</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="prename" placeholder="Vornamen" />
                        </div>
                </div>
                <div class="form-group">
                    <label for="lastname" class="col-sm-2 control-label">Nachname</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="lastname" placeholder="Nachnamen" />
                        </div>
                </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="email" placeholder="E-Mail"/>
                        </div>
                    </div>
                <div class="form-group">
                    <label for="type" class="col-sm-2 control-label">Mitglied</label>
                    <div class="col-sm-10 btn-group" name="type" data-toggle="buttons-checkbox">
                        <button type="button" class="btn btn-primary">Korbball</button>
                        <button type="button" class="btn btn-primary">Leichtathletik</button>
                        <button type="button" class="btn btn-primary">Aerobic</button>
                        <button type="button" class="btn btn-primary">Passiv</button>
                    </div>
                </div>
                <div class="form-group">
                    <label for="picture" class="col-sm-2 control-label">Profilbild</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="picture" placeholder="Bild URL">
                        </div>
                </div>

                </form>
            <a class="btn btn-success pull-right" href="/Regrister">Speichern</i></a>
            </div>
        </div>
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
