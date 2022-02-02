<?php include '../template/header_admin.php';?>
<?php require_once ("../controller/editar_medico_especialidad_controller.php"); ?>

<!--Vista editar turno y especialidad de médico-->
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card border-info mt-3 card-responsive">
                <div class="card-header"><h4 class="card-title text-center"><b>TURNOS-ESPECIALIDADES MÉDICOS</b></h4></div>
                    <div class="card-body">

                        <form class="p-4" method="POST" action="../controller/editar_conf_medico_especialista_controller.php">
                            <div class="mb-3">
                            <label class="form-label"><b>Cédula:</b></label>
                                <input type="text" class="form-control" name="txtCedula" readonly 
                                value="<?php echo $medico_especialidad_editar->ci; ?>">
                            </div>

                            <div class="mb-3">
                                <label class="form-label"><b>Médico:</b></label>
                                <input type="text" class="form-control" name="txtMedico" required 
                                value="<?php echo $medico_especialidad_editar->medico; ?>">
                            </div>
                          
                            <div class="mb-3">
                                <label class="form-label"><b>Especialidad:</b></label><br>
                                    <?php foreach($especialidad as $dato): ?>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox"  value="<?php echo $dato["nombre_especialidad"] ?>" name="txtEspecialidad[]">
                                            <label class="form-check-label" for="flexCheckIndeterminate">
                                            <?php echo $dato["nombre_especialidad"]; ?>
                                            </label>
                                        </div>
                                        
                                    <?php endforeach ?>
                            </div>

                            <div class="mb-3">
                                <label class="form-label"><b>Inicio de turno:</b></label>
                                <input type="date" class="form-control" name="txtTurno_inicio" autofocus required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label"><b>Fin de turno:</b></label>
                                <input type="date" class="form-control" name="txtTurno_fin" autofocus required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label"><b>Inicio de horario:</b></label>
                                <input type="time" class="form-control" name="txtHora_inicio" autofocus required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label"><b>Fin de horario:</b></label>
                                <input type="time" class="form-control" name="txtHora_fin" autofocus required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label"><b>Disponibilidad:</b></label><br>
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
                                <input type="hidden" name="ci" value="<?php echo $medico_especialidad_editar->ci; ?>">
                                <input type="submit" class="btn btn-primary" value="Editar">
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>

    <?php include '../template/footer_admin.php';?>