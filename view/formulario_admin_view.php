<?php include '../template/header_admin.php';?>
<?php require_once ("../controller/formulario_admin_controller.php"); ?>

<!--Formulario de registro de usuario desde administrador-->
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card border-info mt-3 card-responsive">
                <div class="card-header"><h4 class="card-title text-center"><b>REGISTRAR DATOS</b></h4></div>
                    <div class="card-body">
                        <form class="p-4" method="POST" action="../controller/registrar_admin_controller.php">
                    
                            <div class="mb-3">
                                <label class="form-label"><b>Cédula:</b></label>
                                <input type="text" class="form-control" name="txtCedula" autofocus required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label"><b>Contraseña:</b></label>
                                <input type="password" class="form-control" name="txtPass" autofocus required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label"><b>Nombres:</b></label>
                                <input type="text" class="form-control" name="txtNombre" autofocus required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label"><b>Apellidos:</b></label>
                                <input type="text" class="form-control" name="txtApellido" autofocus required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label"><b>Correo electrónico:</b></label>
                                <input type="email" class="form-control" name="txtEmail" autofocus required>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label"><b>Teléfono:</b></label>
                                <input type="text" class="form-control" name="txtTelefono" autofocus required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label"><b>Ciudad de residencia:</b></label>
                                <input type="text" class="form-control" name="txtCiudad" autofocus required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label"><b>Dirección:</b></label>
                                <input type="text" class="form-control" name="txtDireccion" autofocus required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label"><b>Fecha de nacimiento:</b></label>
                                <input type="date" class="form-control" name="txtFecha" autofocus required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label"><b>Género:</b></label><br>
                                <div class="form-check">
                                    <label class="form-check-label">Hombre</label>
                                    <input class="form-check-input" type="radio" name="radioOpcion" value="Hombre" autofocus required>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">Mujer</label>
                                    <input class="form-check-input" type="radio" name="radioOpcion" value="Mujer" autofocus required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <input type="hidden" name="txtRol" value="Usuario">
                            </div>

                            <div class="d-grid">
                                <input type="hidden" name="oculto" value="1">
                                <input type="submit" class="btn btn-primary" value="Registrar"><br>
                                <a href="http://localhost/app/view/usuarios_view.php" class="btn btn-info">Volver</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include '../template/footer_admin.php';?>