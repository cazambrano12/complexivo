<?php include '../template/header_admin.php';?>
<?php require_once ("../controller/editar_controller.php"); ?>

<!--Vista edición de usuario desde administrador-->
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card border-info mt-3 card-responsive">
                <div class="card-header"><h4 class="card-title text-center"><b>EDITAR USUARIO</b></h4></div>
                    <div class="card-body">

                        <form class="p-4" method="POST" action="../controller/editar_conf_controller.php">
                            <div class="mb-3">
                            <label class="form-label"><b>Cédula:</b></label>
                                <input type="text" class="form-control" name="txtCedula" readonly 
                                value="<?php echo $persona_editar->ci; ?>">
                            </div>

                            <div class="mb-3">
                                <label class="form-label"><b>Contraseña:</b></label>
                                <input type="password" class="form-control" name="txtPass" required
                                value="<?php echo $persona_editar->contrasena; ?>">
                            </div>

                            <div class="mb-3">
                                <label class="form-label"><b>Nombre:</b></label>
                                <input type="text" class="form-control" name="txtNombre" required 
                                value="<?php echo $persona_editar->nombre; ?>">
                            </div>

                            <div class="mb-3">
                                <label class="form-label"><b>Apellidos:</b></label>
                                <input type="text" class="form-control" name="txtApellido" required
                                value="<?php echo $persona_editar->apellido; ?>">
                            </div>

                            <div class="mb-3">
                                <label class="form-label"><b>Correo electrónico:</b></label>
                                <input type="email" class="form-control" name="txtEmail" required
                                value="<?php echo $persona_editar->email; ?>">
                            </div>   

                            <div class="mb-3">
                                <label class="form-label"><b>Teléfono:</b></label>
                                <input type="text" class="form-control" name="txtTelefono" required
                                value="<?php echo $persona_editar->telefono; ?>">
                            </div>

                            <div class="mb-3">
                                <label class="form-label"><b>Ciudad de residencia:</b></label>
                                <input type="text" class="form-control" name="txtCiudad" required
                                value="<?php echo $persona_editar->ciudad; ?>">
                            </div>

                            <div class="mb-3">
                                <label class="form-label"><b>Dirección:</b></label>
                                <input type="text" class="form-control" name="txtDireccion" required
                                value="<?php echo $persona_editar->direccion; ?>">
                            </div>

                            <div class="mb-3">
                                <label class="form-label"><b>Fecha de nacimiento:</b></label>
                                <input type="text" class="form-control" name="txtFecha" required
                                value="<?php echo $persona_editar->fecha_nacimiento; ?>">
                            </div>

                            <div class="mb-3">
                                <label class="form-label"><b>Género:</b></label>
                                <input type="text" class="form-control" name="radioOpcion" required
                                value="<?php echo $persona_editar->genero; ?>" placeholder="Hombre/Mujer">
                            </div>

                            <div class="mb-3">
                                <label class="form-label"><b>Rol:</b></label><br>
                                <div class="form-check">
                                    <label class="form-check-label">Administrador</label>
                                    <input class="form-check-input" type="radio" name="radioRol" value="Administrador" autofocus required>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">Médico</label>
                                    <input class="form-check-input" type="radio" name="radioRol" value="Médico" autofocus required>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">Paciente</label>
                                    <input class="form-check-input" type="radio" name="radioRol" value="Paciente" autofocus required>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">Secretaria</label>
                                    <input class="form-check-input" type="radio" name="radioRol" value="Secretaria" autofocus required>
                                </div>
                            </div>

                            <div class="d-grid">
                                <input type="hidden" name="ci" value="<?php echo $persona_editar->ci; ?>">
                                <input type="submit" class="btn btn-primary" value="Editar">
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>

    <?php include '../template/footer_admin.php';?>