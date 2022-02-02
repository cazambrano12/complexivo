<?php include '../template/header_view.php';?>
<?php require_once ("../controller/cita_seleccionar_medico_controller.php"); ?>

<!--Segunda vista de atención de cita-->
<div class="container mt-7">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card border-info mt-3 card-responsive">
                <div class="card-header"><h4 class="card-title text-center"><b>REGISTRAR CITA</b></h4></div>
                    <div class="card-body">

                        <form class="p-4" method="POST" action="../controller/cita_conf_controller.php">

                            <div class="mb-3">
                                <label class="form-label">Especialidad seleccionada:</label>
                                <input type="text" class="form-control" name="txtEspecialidad_b" readonly 
                                    value="<?php echo $_POST['txtEspecialidad_b']; ?>">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Médico en turno:</label><br>
                                <input type="text" class="form-control" name="txtMedico_a" readonly 
                                    value="<?php echo $_POST['txtMedico_a']; ?>">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Cédula:</label>
                                <input type="text" class="form-control" name="txtCedula" readonly 
                                value="<?php echo $_POST['txtCedula']; ?>">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Paciente:</label>
                                <input type="text" class="form-control" name="txtPaciente" readonly
                                value="<?php echo $_POST['txtPaciente']; ?>">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Síntomas:</label>
                                <input type="text" class="form-control" name="txtSintomas" cols="40" rows="5" readonly
                                value="<?php echo $_POST['txtSintomas']; ?>">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Día turno:</label><br>
                                <select class="form-select" name="txtFecha_a" autofocus required>
                                    <option selected>Seleccione día:</option>
                                       <?php foreach($rangoFechas as $fecha): ?>
                                            <option value="<?= $final=$fecha->format('Y-m-d') .'<br>'; ?>"><?=  $final=$fecha->format('Y-m-d') .'<br>'; ?></option>
                                        <?php endforeach ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Hora turno:</label><br>
                                <select class="form-select" name="txtHora_a" autofocus required>
                                    <option selected>Seleccione hora:</option>
                                       <?php foreach($rangoHoras as $Hora): ?>
                                            <option value="<?= $Hora->format("H:i:s") . PHP_EOL."<br>"; ?>"><?=  $Hora->format("H:i:s") . PHP_EOL."<br>"; ?></option>
                                        <?php endforeach ?>
                                </select>
                            </div>

                            <div class="d-grid">
                                <input type="hidden" name="ci" value="<?php echo $_POST['txtCedula']; ?>">
                                <input type="submit" class="btn btn-primary" value="Registrar">
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
</div>
<?php include '../template/footer.php';?>