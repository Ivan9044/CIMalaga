<!DOCTYPE html>
<html lang="en">
<body>
	<?php
	$usuario = @trim(stripslashes($_POST['inputEmail']));
    $pass = @trim(stripslashes($_POST['inputPassword'])); 

    echo '<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Atención!</strong> Debes aceptar las Policitas de Privacidad. </div>';
  echo "usuario" . '$usuario';
  echo "Password" . '$pass';
?>

</body>

