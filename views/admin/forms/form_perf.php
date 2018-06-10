<fieldset>
					<legend>Mis Datos </legend>
						<?php

							if(isset($_SESSION['email'])){ $email = $_SESSION['email'];}
							if(isset($_SESSION['usuario'])){ $nombre = $_SESSION['usuario'];}
							if(isset($_SESSION['genero'])){ $genero = $_SESSION['genero'];}

						?>
							
					
						<form name="" method="" action="">
							<p>
								<label>Nombre: </label>
								<input type="text" value="<?php echo $nombre; ?>" readonly>
							</p>
							<p>
								<label>Genero: </label>
								<input type="text" value="<?php echo $genero; ?>" readonly>
							</p>
							<p>
								<label>Correo: </label>
								<input type="email" value="<?php echo $email; ?>" readonly>
							</p>
						</form>
					</fieldset>