<?php include '../template/header_admin.php';?>

<!--Formulario de registro de examen desde administrador-->
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-info mt-3 card-responsive">
                <div class="card-header"><h4 class="card-title"><b>REGISTRO DE EXÁMENES</b></h4></div>
                    <div class="card-body">
                    
                        <form class="p-4" method="POST" action="../controller/examen_registrar_controller.php">
                        
                        <div class="mb-3">
                            <label class="form-label"><b>Examen:</b></label>
                            <input type="text" class="form-control" name="txtExamen">
                        </div>
                  
                        <div class="mb-3">
                            <label class="form-label"><b>Estado:</b></label><br>
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
                            <a href="http://localhost/app/view/examenes_admin_view.php?consulta=afr&enviar=" class="btn btn-info">Volver</a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include '../template/footer_admin.php';?>