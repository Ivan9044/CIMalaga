<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registrar cuenta</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

<div class="container">
    <div class="card card-register mx-auto mt-5">
        <div class="card-header">Registrar Cuenta</div>
        <div class="card-body">
            
            <?php
            
            $nombre   = '';
            $apellido = '';
            $email    = '';
            if ($_POST) {
                
                require 'conf/db.php';
                $nombre           = trim(stripslashes($_POST['first_name']));
                $apellido         = trim(stripslashes($_POST['last_name']));
                $email            = trim(stripslashes($_POST['email']));
                $password         = trim(stripslashes($_POST['password']));
                $password_confirm = trim(stripslashes($_POST['password_confirm']));
                
                // 1 == "1" true
                // 1 === "1" false
                if ($password === $password_confirm) {
                    try {
                        $consulta = $db->prepare('INSERT INTO usuarios (nombre, apellido, email, password) VALUES (:nombre, :apellido, :email, :password)');
                        
                        $consulta->bindParam(':nombre', $nombre);
                        $consulta->bindParam(':apellido', $apellido);
                        $consulta->bindParam(':email', $email);
                        $consulta->bindParam(':password', $password);
                        
                        $consulta->execute();
                        
                        $db = null;
                        
                        header('Location: aviso.php');
                        echo 'hola';
                    } catch (\Exception $e) {
                        
                        echo '<div class="alert alert-danger alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>Error!</strong> ' . $e->getMessage() . ' </div>';
                    
                    }
                } else {
                    echo '<div class="alert alert-danger alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>Error!</strong> Las contrase&ntilde;as no coinciden.</div>';
                }
            }
            
            
            ?>
            <form method="post" action="register.php">
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="text" id="firstName" name="first_name" class="form-control"
                                       placeholder="First name" required="required" autofocus="autofocus"
                                value="<?php echo $nombre?>">
                                <label for="firstName">Primer Nombre</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="text" id="lastName" class="form-control" name="last_name"
                                       placeholder="Last name" required="required"
                                       value="<?php echo $apellido?>">
                                <label for="lastName">Apellido</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="email" id="inputEmail" class="form-control" name="email"
                               placeholder="Email address" required="required"
                               value="<?php echo $email?>">
                        <label for="inputEmail">Email</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="password" id="inputPassword" name="password" class="form-control"
                                       placeholder="Password" required="required">
                                <label for="inputPassword">Password</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="password" id="confirmPassword" name="password_confirm" class="form-control"
                                       placeholder="Confirm password" required="required">
                                <label for="confirmPassword">Confirmar password</label>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary btn-block" type="submit">Registrar</button>
            </form>
            <div class="text-center">
                <a class="d-block small mt-3" href="login.html">Login</a>
                <a class="d-block small" href="forgot-password.html">Olvido su Password?</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
