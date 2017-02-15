<?php
	$message = $_GET['message'] ?? '';
?>

<div class="container">

	<h2>Hola mvc</h2>


	<form action="<?php echo PATH_U ?>Login/validar" class="form-signin" method="POST">
	<h2 class="form-signin-heading">Inicio de sesión</h2>
		<label for="inputEmail" class="sr-only">Email</label>
		<input type="email" name="email" class="form-control" placeholder="Correo electronico" required autofocus>
		<label for="inputPassword" class="sr-only">Password</label>
		<input type="password" name="password" class="form-control" placeholder="Contraseña" required>
		<div class="checkbox">
			<?php echo $message; ?>
		</div>
		<button name="enviado" class="btn btn-lg btn-primary btn-block" type="submit">Iniciar sesión</button>
	</form><br><br>

</div> 
<!-- /container -->


