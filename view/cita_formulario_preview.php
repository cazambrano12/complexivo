<?php include '../template/header_view.php';?>
<?php require_once ("../controller/cita_editar_controller.php"); ?>
<?php require_once ("../controller/cita_especialidad_controller.php"); ?>
<?php require_once ("../controller/cita_seleccionar_medico_controller.php"); ?>

<!--primera vista de atención de cita-->
<section class="background_view">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card border-info mt-3 card-responsive">
                <div class="card-header"><h4 class="card-title text-center"><b>REGISTRAR CITA</b></h4></div>
                    <div class="card-body">

                        <form class="p-4" method="POST">  

                            <div class="mb-3">
                                <label class="form-label">Especialidad:</label><br>
                                <select class="form-select" name="txtEspecialidad_a" autofocus required>
                                    <option selected disabled>Seleccione especialidad disponible</option>
                                        <?php $dato=""; foreach($especialidad as $dato): ?>
                                            <option value="<?= $dato['nombre_especialidad'] ?>"><?= $dato['nombre_especialidad'] ?></option>
                                                    
                                        <?php endforeach ?>
                                </select>
                            </div>
                                
                            <div class="mb-3">
                                <input type="hidden" name="confirmar_especialidad">
                                <input type="submit" class="btn btn-info" value="Confirmar Especialidad">
                            </div>

                        </form>

                        <form class="p-4" method="POST" action="../view/cita_formulario_b_preview.php?ci=<?php echo $persona->ci; ?>">
                            
                            <div class="mb-3">
                                <label class="form-label">Especialidad seleccionada:</label>
                                <input type="text" class="form-control" name="txtEspecialidad_b" readonly 
                                value="<?php if(isset($_POST['txtEspecialidad_a'])===TRUE){echo $_POST['txtEspecialidad_a']; 
                                    }else{
                                        echo "Seleccione especialidad disponible";
                                    }    
                                ?>">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Médico en turno:</label><br>
                                <select class="form-select" name="txtMedico_a" autofocus required>
                                    <option selected disabled>Seleccione médico</option>
                                        <?php $dato=""; foreach($medicos_turno as $dato): ?>
                                            <option value="<?= $dato['medico'] ?>"><?= $dato['medico'] ?></option>
                                        <?php endforeach ?>
                                </select>
                            </div>
                          
                            <div class="mb-3">
                                <label class="form-label">Cédula:</label>
                                <input type="text" class="form-control" name="txtCedula" readonly 
                                value="<?php echo $persona->ci; ?>">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Paciente:</label>
                                <input type="text" class="form-control" name="txtPaciente" readonly
                                value="<?php echo $persona->paciente; ?>">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Síntomas:</label>
                                <textarea class="form-control" name="txtSintomas" rows="3" autofocus required></textarea>
                            </div>


                            <div class="d-grid">
                                <input type="submit" class="btn btn-primary" value="Siguiente"/>
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
</section>
<?php //include '../template/footer.php';?>