<!DOCTYPE html>
<html>
<head>
	<title>Registro de usuario</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
	<h2>Registro de usuario</h2>
	<form action="controler/RegistroController.php/registrar" method="POST">
		<div class="form-group">
			<label for="nombre">Nombre:</label>
			<input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre" name="nombre" required>
		</div>
		<div class="form-group">
			<label for="correo">Correo electrónico:</label>
			<input type="email" class="form-control" id="correo" placeholder="Ingrese su correo electrónico" name="correo" required>
		</div>
		<div class="form-group">
			<label for="contrasena">Contraseña:</label>
			<input type="password" class="form-control" id="contrasena" placeholder="Ingrese su contraseña" name="contrasena" required>
		</div>
		<div class="form-group">
			<label for="confirmar_contrasena">Confirmar contraseña:</label>
			<input type="password" class="form-control" id="confirmar_contrasena" placeholder="Ingrese nuevamente su contraseña" name="confirmar_contrasena" required>
		</div>
		<button type="submit" class="btn btn-primary">Registrarse</button>
	</form>
</div>

</body>
</html>
