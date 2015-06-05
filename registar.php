<html>
	<head>
		<title>	Formulario de registro </title>
	</head>
	
	<body>
		<h1> Formulario de registro </h1>
		<h5> Los campos con (*) son requeridos </h5>
		<form method="POST" action="">
			<table>
				<tr>
					<td>
						Nombre y apellidos:
					</td>
					<td>
						<input type="name" name="realname" />
					</td>
				</tr>
				<tr>
					<td>
						*Nick de usuario
					</td>
					<td>
						<input type="name" name="nick" />
					</td>
				</tr>
				<tr>
					<td>
						*Contraseña:
					</td>
					<td>
						<input type="password" name="pass" />
					</td>
				</tr>
				<tr>
					<td>
						*Repetir contraseña:
					</td>
					<td>
						<input type="password" name="rpass" />
					</td>
				</tr>
			</table>
			<input type="submit" name="registro" value="Registrarme" /> <input type="reset" />
		</form>
		<?php
			if (isset($_POST['registro'])) {
				require("registro.php");
			}
		?>
	</body>
</html>