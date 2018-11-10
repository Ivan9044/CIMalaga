<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Iglesia Evangelica El Puente</title>
    <link  href="img/favicon.ico" type="image/jpg" rel="shortcut icon" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/contacto.css" rel="stylesheet">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Caveat+Brush" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    <!--  
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>  -->


</head>
<body>

    <!-- Navigation -->
    <header>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Desplegar / Ocultar Menú</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
           <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.html">Inicio</a>
                    </li>
                    <li>
                        <a href="porque.html">Por que?</a>
                    </li>
                    <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Quienes Somos?<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="historia.html">Historia de la Iglesia</a></li>
                                    <li><a href="creemos.html">Qué creemos?</a></li>
                                    <li><a href="donde.html">Donde estamos</a></li>
                                    <li><a href="actividades.html">Actividades</a></li>
                                </ul>
                    </li>
                    <li>
                        <a href="calendario.html">Calendario del mes</a>
                    </li>
                    <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Áreas<span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="ninos.html">Niños</a></li>
                                <li><a href="jovenes.html">Jóvenes</a></li>
                                <li><a href="universitarios.html">Universitarios</a></li>                                
                                <li><a href="mujeres.html">Mujeres</a></li>
                                <li><a href="hombres.html">Hombres</a></li>
                                <li><a href="english.html">English Speakers</a></li>
                                <li><a href="misiones.html">Misiones</a></li>
                              </ul>
                    </li>
                    <li>
                        <a href="predicaciones.html">Predicaciones</a>
                    </li>
                    <li>
                        <a href="enlaces.html">Enlaces</a>
                    </li>
                    <li>
                        <a href="contacto.html">Contacto</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    </header>
    <section class="container">
        <div class="contenido">
            <div class="row">
                <div class="col-xs-12">
                    <h1>Contacto</h1>
                </div>
            </div>
            <?php
                    $name = @trim(stripslashes($_POST['name']));
                    $telefono = @trim(stripslashes($_POST['telefono'])); 
                    $email = @trim(stripslashes($_POST['email'])); 
                    $subject = @trim(stripslashes($_POST['subject'])); 
                    $message = @trim(stripslashes($_POST['message']));
                    // $condicion = @trim(stripslashes($_POST['condiciones']));

                    //Si se pulsa el botón de enviar
                    //Si el checkbox condiciones tiene valor y es igual a 1

                        if( isset( $_POST['condiciones'] ) && $_POST['condiciones'] == 'on' ) {
                            echo '<div class="row"><div class="col-xs-12 col-sm-2"></div>
                                    <div class="col-xs-12 col-sm-8"><div class="alert alert-info" role="alert">
                                    <h4 class="text-center">Su mensaje ha sido enviado</h4></div></div>
                                    <div class="col-xs-12 col-sm-2"></div></div>';
                            $email_from = $email;
                            $email_to = "ivanylorena@gmail.com";
                            $headers = "From: " . $email . "\r\n" . "CC: " . $email;
                            $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message .  "\n\n" . 'Este email ha sido enviado desde la pagina web y el remitente ha aceptado las Politicas de Privacidad.';
                            mail($email_to, $subject, $body);
                            
                            } 
                        else {
                            echo '<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Atención!</strong> Debes aceptar las Policitas de Privacidad. </div>';
                        include('contacto1.html');

                        }                   
            ?>

</html>

                
        </div>
    </section>
   <div class="separador"></div>
    <footer class="container-fluid">
        <div class="redes">
            <div class="row">
                <h4>Síguenos en</h4>
            </div>
            <div class="row">
                <div class="social">
                    <div class="hidden-xs col-sm-4"><hr class="intro-divider"></div>
                    <div class="col-xs-12 col-sm-4">
                        <a href="" class="icon"><span class="icon-facebook"></span></a>
                        <a href="" class="icon"><span class="icon-google-plus"></span></a>
                        <a href="" class="icon"><span class="icon-twitter"></span></a>
                        <a href="" class="icon"><span class="icon-flickr"></span></a>
                        <a href="" class="icon"><span class="icon-headphones"></span></a>
                    </div>
                    <div class="hidden-xs col-sm-4"><hr class="intro-divider"></div>
                </div>
            </div>
        </div>
        <div class="datos">
            <div class="row">
                <p><strong>Iglesia Cristiana Evangélica El Puente -  calle Picos de Europa 7, Bajo - CP(10.005) Caceres - Teléfono 661 906 872</strong></p>
                <p>Reg. Mº Justicia N4490-SE/A - CIF:R1000564C - Miembro de la F.E.R.E.D.E y el Consejo Evangélico de Extremadura</p>
                <p>Todos los Derechos Reservados © 2014</p>
            </div>
        </div>
        <div class="datos2">
            <div class="row"><hr class="intro-divider"></div>
            <div class="row">
                <div class="hidden-xs col-sm-5"></div>
                <div class="col-xs-12 col-sm-3">
                    <ul class="nav nav-pills nav-lopd">
                        <li role="presentation"><a href="politicas.html">Aviso Legal</a></li>
                        <li role="presentation"><a href="politicas1.html">Privacidad</a></li>
                        <li role="presentation"><a href="politicas2.html">Cookies</a></li>
                    </ul>
                </div>
                <div class="hidden-xs col-sm-4"></div>
            </div>
            <div class="row"><hr class="intro-divider"></div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
