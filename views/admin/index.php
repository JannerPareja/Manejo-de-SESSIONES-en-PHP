<?php 
if(isset($_GET['inicio'])){

		session_start();
	
}
if(isset($_SESSION['email'])){

	//Encabezado de la pagina
	include ('templates/head.php');

	//validar errores
	if(isset($_GET['error'])){

		include ('errors/errors.php');
	}

	?>

	<div class="container spacing-top">
		<div class="row">
			<div class="col-4 bg-dark">

				<center>
					
					<figure>
						<?php include('partials/genre.php') ?>
					</figure>

				</center>

			</div>
			<div class="col-8 bg-dark">

				<?php
					if(isset($_SESSION['usuario'])){
						echo '<h2 class="title-h1">Bienvenid@: <i>', $_SESSION['usuario'] . '</i></h2>';
					}
					?>	
			</div>
			<div class="col-12 bg-warning">
				<?php include('forms/form_msg.php'); ?>
			</div>
		</div>
	</div>

	<?php include ('templates/foot.php'); 

}else{
		header('Location: http://localhost/webmail/index.php');
	} 
?>