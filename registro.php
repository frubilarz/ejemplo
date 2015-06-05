<?php
	$realname = $_POST['realname'];
	$nick     = $_POST['nick'];
	$pass     = $_POST['clave'];
	$rpass    = $_POST['rclave'];
	$reqlen   = strlen($nick) * strlen($pass) * strlen($rpass);
	if ($reqlen > 0) {
		if ($pass === $rpass) {
                    include './conexiondb.php';
                    $con=  conectar();
			$pass = md5($pass);
			mysql_query("INSERT INTO registro VALUES('','$realname','$nick','$pass')");
			desconectar();
			echo 'Se ha registrado exitosamente.';
		} else {
			echo 'Por favor, introduzca dos contraseñas identicas.';
		}
	} else {
		echo 'Por favor, rellene todos los campos requeridos.';
	}
?>
