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
            <form id="createUser" class="form-horizontal form-group" method="POST" action="/Regrister" role="form">
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
                    <label for="password" class="col-sm-2 control-label">Passwort</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="password" placeholder="Passwort"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password2" class="col-sm-2 control-label">Passwort wiederholen</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="password2" placeholder="Passwort wiederholen"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="type" class="col-sm-2 control-label">Mitglied</label>
                    <?php
                        $departments = DB::table('departments')->get();
                        foreach($departments as $department){
                            echo '<div class="checkbox-inline">';
                            echo '<label><input type="checkbox" name="' . $department->id . '" value="' . $department->id . '">' . $department->name . '</label>';
                            echo '</div>';
                        }
                    ?>
                </div>
                <div class="form-group">
                    <label for="picture" class="col-sm-2 control-label">Profilbild</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="picture" placeholder="Bild URL">
                        </div>
                </div>
                <div class="form-group">
                    <label for="stv-nummer" class="col-sm-2 control-label">STV-Nummer</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="stv-number" placeholder="STV-Nummer">
                        </div>
                </div>
                <div class="form-group">
                    <label for="adress" class="col-sm-2 control-label">Adresse</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="adress" placeholder="Adresse">
                        </div>
                </div>
                <div class="form-group">
                    <label for="PLZ" class="col-sm-2 control-label">Postleitzahl</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="PLZ" placeholder="Postleitzahl">
                        </div>
                </div>
                <div class="form-group">
                    <label for="location" class="col-sm-2 control-label">Ort</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="location" placeholder="Ort">
                        </div>
                </div>
                <button class="btn btn-success pull-right" id="createUserSubmit">Speichern</button>
                </form>
            
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
