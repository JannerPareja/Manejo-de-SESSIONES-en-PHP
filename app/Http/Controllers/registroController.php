<?php

//seccion de login
	if(isset($_POST['btn-register'])){

		$genre = $_POST['genre'];
		$nombre = $_POST['nombre'];
		$correo = $_POST['correo'];
		$password = $_POST['password'];
		$conf_pass = $_POST['conf_pass'];

		//Validar el genero
		if ($genre == 'genero') {
			//error 3 = 'Debe seleccionar un genero!'
			header('Location: http://localhost/webmail/index.php?error=3');
		}

		if($conf_pass == $password){

			include ('../../../views/front/login.php');
		}
		else{
			//error 1 = 'Las contraseñas no coinciden!'
			header('Location: http://localhost/webmail/index.php?error=1');
		}
	}
	else{
			header('Location: http://localhost/webmail/index.php');
	}
?>