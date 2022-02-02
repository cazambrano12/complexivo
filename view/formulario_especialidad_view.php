<?php include '../template/header_admin.php';?>
<?php require_once ("../controller/formulario_especialidad_controller.php"); ?>

<!--Formulario de registro de especialidades desde administrador-->
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-info mt-3 card-responsive">
                <div class="card-header"><h4 class="card-title"><b>REGISTRO DE ESPECIALIDADES MÉDICAS</b></h4></div>
                    <div class="card-body">
                    
                        <form class="p-4" method="POST" action="../controller/especialidad_registrar_controller.php">
                        
                        <div class="mb-3">
                            <label class="form-label">Especialidad:</label>
                            <input type="text" class="form-control" name="txtEspecialidad" >
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Descripción:</label>
                            <textarea class="form-control" name="txtDescripcion" rows="3" autofocus required></textarea>
                        </div>
                    
                        <div class="mb-3">
                            <label class="form-label">Disponibilidad:</label><br>
                            <div class="form-check">
                                <label class="form-check-label">Activado</label>
                                <input class="form-check-input" type="radio" name="radioOpcion" value="Activado" autofocus required>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">Desactivado</label>
                                <input class="form-check-input" type="radio" name="radioOpcion" value="Desactivado" autofocus required>
                            </div>
                        </div>

                        <div class="d-grid">
                            <input type="hidden" name="oculto" value="1">
                            <input type="submit" class="btn btn-primary" value="Registrar"><br>
                            <a href="http://localhost/app/view/especialidad_view.php" class="btn btn-info">Volver</a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include '../template/footer_admin.php';?>