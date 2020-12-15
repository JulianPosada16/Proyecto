<div class="modal fade" id="modalRegister" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      	<div class="modal-content modal-login">
        	<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">REGISTRARSE</h5>
			</div>
			
        	<div class="modal-body">
				<form action="modelo/registro.php" method="POST" id="form-registro">
					<div class="input-group mb-3">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" id="username" name="username" class="form-control input_user" placeholder="Nombre de Usuario">
                    </div>
                    
                    <div class="input-group mb-3">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-at"></i></span>
						</div>
						<input type="email" id="email" name="email" class="form-control input_user" placeholder="Correo Electrónico">
					</div>
				
            		<div class="input-group mb-3">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-lock"></i></span>
						</div>
						<input type="password" id="password" name="password" class="form-control input_pass" placeholder="Contraseña">
                    </div>
                    
                    <div class="input-group mb-3">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" id="confirmpass" name="confirmpass" class="form-control input_pass" placeholder="Confirmar Contraseña">
					</div>

            		<input type="submit" class="btn btn-primary ini-regis" id="btnRegistrar" name="register" value="Registrarse">
          		</form>
        	</div>
    
      	</div>
    </div>
</div>

<br>
  