<?php

/**
* 
*/
class LoginController extends MainControllers
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function validar(){
		if (isset($_POST['enviado'])) {
			if (!empty($_POST['email']) and !empty($_POST['password'])) {
				$response = $this->model->validar('*', "email = '". $_POST['email']."'");
				$row = $response[0];
				if ($row['password'] == $_POST['password']) {
					print_r($row);
					 $this->createSession($row['email']);
					 header('location:'.PATH_U.'Usuarios/index');
				}else{
					 header('location:'.PATH_U.'?message=Credenciales no encontrados');
				}
			}
		}else{
			header('location:'.PATH_U.'?message=No intentes saltar el formulario');
		}
	}
	// /*creo session*/
	 public function createSession($email){
		Session::setSession('email', $email);
	}
	// /*destruyo session*/
	 public function destroySession(){
	 	Session::destroy();
		
	 }
}