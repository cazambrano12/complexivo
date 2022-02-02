<?php include '../template/header_view.php';?>
<?php require_once ("../controller/editar_user_controller.php"); ?>

<!--Vista edición de usuario desde usuario-->
<section class="background_view">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card border-info mt-3 card-responsive">
                <div class="card-header"><h4 class="card-title text-center"><b>EDITAR DATOS</b></h4></div>
                    <div class="card-body">

                        <form class="p-4" method="POST" action="../controller/editar_user_conf_controller.php">
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
                                <input type="text" class="form-control" name="radioOpcion" placeholder="Hombre/Mujer" required
                                value="<?php echo $persona_editar->genero; ?>">
                            </div>

                            <div class="d-grid">
                                <input type="hidden" name="ci" value="<?php echo $persona_editar->ci; ?>">
                                <input type="submit" class="btn btn-primary" value="Editar">
                            </div>
                            <br>
                            <div class="mb-3">
                                <input type="button" class="btn btn-info" onclick="history.back()" value="Volver">
                            </div>                   
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include '../template/footer_admin.php';?>