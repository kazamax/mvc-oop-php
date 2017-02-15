<a href="<?php echo PATH_U ?>Login/destroySession">Cerrar sesión</a><br><br>


<?php

$usuario = Session::getSession('email');

echo 'Bienvenido : '.$usuario;

?>	