<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="bootstrap/favicon.ico">

    <title>Mini Framework POO - PHP</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron-narrow.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="bootstrap/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="bootstrap/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div class="container">
        <div class="header clearfix">
            <nav>
                <ul class="nav nav-pills pull-right">
                    <li role="presentation" class="active"><a href="home">Home</a></li>
                    <li role="presentation"><a href="about">About</a></li>
                    <li role="presentation"><a href="Contactos">Contactos</a></li>
                    <li role="presentation"><a href="help">Ayuda</a></li>
                </ul>
            </nav>
            <h3 class="text-muted">Mini FrameWork PHP - POO</h3>
        </div>

        <div class="jumbotron">
            <h1>Area 1</h1>
            <p class="lead">Contenido del area 1</p>
            <p><a class="btn btn-lg btn-success" href="#" role="button">Sign up today</a></p>
        </div>
    </div>

    <div class="container">
        <div class="row marketing">
            <div class="col-lg-6">
                <h4>
                <?= $tpl_content; ?>
                </h4>
            </div>

            <div class="col-lg-6">

                <h4>Titulo de la nueva variable</h4>
                <p>Contenido del valor de la otra variable</p>

                <h4>Subheading</h4>
                <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

                <h4><?= $tpl_content1; ?></h4>
                <p><?= $tpl_content2; ?></p>

            </div>
        </div>

        <footer class="footer">
            <p>&copy; Company 2015</p>
        </footer>
    </div> <!-- /container -->
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="bootstrap/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>