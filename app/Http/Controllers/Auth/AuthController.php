<?php
	//area de usuarios registrados
	if(isset($_POST['btn-login'])){

		$genre = $_POST['genre'];
		$nombre = $_POST['nombre'];
		$correo = $_POST['correo'];
		$password = $_POST['password'];
		$correo_log = $_POST['correo_log'];
		$pass_log = $_POST['pass_log'];

		if($correo_log == $correo && $pass_log == $password){

			if(!isset($_GET['inicio'])){

				//Creamos sesión
				session_start();

				//Almacenamos el nombre de usuario en una variable de sesión usuario
				$_SESSION['usuario'] = $_POST["nombre"]; 
				$_SESSION['genero'] = $_POST["genre"];
				$_SESSION['email'] = $_POST["correo"];

				include ('../../../../views/admin/index.php');

			}
			
		}
		else{
			//error 2 = 'Los datos de acceso no coinciden!'
			header('Location: http://localhost/webmail/index.php?error=2');
		}
	}
	else{
			header('Location: http://localhost/webmail/index.php');
	}
?>