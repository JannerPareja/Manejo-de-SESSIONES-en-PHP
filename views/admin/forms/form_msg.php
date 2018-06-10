<fieldset>
					<legend>Redactar nuevo mensaje</legend>
						<form name="register" method="post" action="http://localhost/webmail/app/Http/Controllers/Controller.php">
							<p>
								<input type="email" name="dest_msg" placeholder="Para: " required>
							</p>
							<p>
								<input type="text" name="asunto_msg" placeholder="Asunto: " required>
							</p>
							<p>
								<textarea name="msg" rows="5" cols="100" required></textarea>
							</p>
							<p>
								<input type="submit" name="btn-msg" value="Enviar mensaje">
								<input type="reset" value="Limpiar datos">
							</p>
						</form>
					</fieldset>