<?php include '../template/header.php';?>
<?php require_once ("../controller/login_controller.php"); ?>

<!--Formulario de login-->
<section class="background">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card border-info mt-3 card-responsive">
                <div class="card-header"><h4 class="card-title text-center"><b>INGRESAR:</b></h4></div>
                    <div class="card-body">
                       <form method="POST" action="perfil_usuarios_view.php">

							<div class="mb-3">
								<label class="form-label"><b>Cédula:</b></label>
								<input type="text" class="form-control" name="txtCedula" maxlength="10" minlength="10" autofocus required>
							</div>

							<div class="mb-3">
								<label class="form-label">Contraseña:</label>
								<input type="password" class="form-control" name="txtPass" autofocus required>
							</div>

							<div class="mb-3">
								<label class="form-label">Rol:</label><br>
								<select class="form-select" name="txtRol" autofocus required>
								<option>Seleccione su rol:</option>
								<option>Paciente</option>
								<option>Médico</option>
								<option>Secretaria</option>
								<option>Administrador</option>
								</select>
							</div>

							<div class="d-grid">
								<input type="hidden" name="oculto" value="1">
								<input type="hidden" name="ci" value="txtCedula">
								<input type="submit" class="btn btn-primary" value="Login"><br>
								 <p class="regtext">¿Ya te registraste? <a href="http://localhost/pruebaPOO/view/formulario_view.php" >Entra Aquí</a>!</p>
							</div>
							</form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include '../template/footer.php';?>