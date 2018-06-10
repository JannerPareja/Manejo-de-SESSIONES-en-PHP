<?php
//Creamos sesión
session_start();

if(isset($_SESSION['email'])){
	//Mensaje enviado
	if(isset($_POST['btn-msg'])){

		$dest_msg = $_POST['dest_msg'];
		$asunto_msg = $_POST['asunto_msg'];
		$msg = $_POST['msg'];

		if(isset($dest_msg)){

			$_SESSION['dest'] = $_POST['dest_msg'];
			$_SESSION['asunto'] = $_POST['asunto_msg'];
			$_SESSION['msg'] = $_POST['msg'];

			include ('../../../views/admin/inbox.php');
		}
	}

	//Leer mensaje
	if(isset($_POST['btn-read'])){

		$dest_msg = $_POST['dest_msg'];
		$asunto_msg = $_POST['asunto_msg'];
		$msg = $_POST['msg'];

		if(isset($dest_msg)){
			
			include ('../../../views/admin/read.php');
		}
	}

}else{
		header('Location: http://localhost/webmail/index.php');
	} 
?>