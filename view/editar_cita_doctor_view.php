<?php include '../template/header_view.php';?>
<?php  require_once ("../controller/medicinas_cita_controller.php");?>
<?php  require_once ("../controller/examen_cita_controller.php");?>
<?php  require_once ("../controller/editar_cita_doctor_controller.php");?>

<!--Vista datos de cita-->
<section class="background_view">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card border-info mt-3 card-responsive">
                <div class="card-header"><h4 class="card-title text-center"><b>DATOS CITA</b></h4></div>
                    <div class="card-body">

                        <form class="p-4" method="POST" action="../controller/editar_conf_cita_doctor_controller.php">
                            <div class="mb-3">
                            <label class="form-label"><b>ID Cita:</b></label>
                                <input type="text" class="form-control" name="txtIDCita" readonly 
                                value="<?php echo $cita_doctor_editar->id_cita; ?>">
                            </div>

                            <div class="mb-3">
                                <label class="form-label"><b>Doctor:</b></label>
                                <input type="text" class="form-control" name="txtDoctor" readonly
                                value="<?php echo $cita_doctor_editar->medico_a; ?>">
                            </div>


                            <div class="mb-3">
                                <label class="form-label"><b>CI Paciente:</b></label>
                                <input type="text" class="form-control" name="txtCedula" readonly
                                value="<?php echo $cita_doctor_editar->ci_cita; ?>">
                            </div>

                            <div class="mb-3">
                                <label class="form-label"><b>Paciente:</b></label>
                                <input type="text" class="form-control" name="txtPaciente" readonly 
                                value="<?php echo $cita_doctor_editar->paciente; ?>">
                            </div>

                            <div class="mb-3">
                                <label class="form-label"><b>Síntomas:</b></label>
                                <input type="text" class="form-control" name="txtSintomas" 
                                value="<?php echo $cita_doctor_editar->sintomas; ?>" style="height: 100px;" >
                            </div>

                            <div class="mb-3">
                            <label class="form-label"><b>Diagnóstico:</b></label>
                                <textarea class="form-control" name="txtDiagnostico" rows="3" ></textarea>
                            </div> 

                            <div class="mb-3">
                            <label class="form-label"><b>Receta:</b></label>                      

                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">Seleccionar</th>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Estado</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach($busca_medicinas as $dato){    
                                            ?>
                                            <tr>
                                                <td scope="col"><input class="form-check-input" type="checkbox" value="<?php echo $dato->medicina ?>" name="txtReceta[]"></td>
                                                <td><?php echo $dato->medicina; ?></td>   
                                                <td><?php echo $dato->estado_medicina; ?></td>                                  
                                            </tr>
                                            <?php
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="mb-3">
                            <label class="form-label"><b>Posología:</b></label>
                                <textarea class="form-control" name="txtposologia" rows="3" ></textarea>
                            </div> 

                            <div class="mb-3">
                            <label class="form-label"><b>Exámenes médicos:</b></label>                      

                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">Seleccionar</th>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Estado</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach($medicina_examen as $dato){    
                                            ?>
                                            <tr>
                                                <td scope="col"><input class="form-check-input" type="checkbox" value="<?php echo $dato->examen ?>" name="txtExamen[]"></td>
                                                <td><?php echo $dato->examen; ?></td>   
                                                <td><?php echo $dato->estado_examen; ?></td>                                  
                                            </tr>
                                            <?php
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label"><b>Estado:</b></label><br>
                                <div class="form-check">
                                    <label class="form-check-label">Atendido</label>
                                    <input class="form-check-input" type="radio" name="radioOpcion" value="Atendido" autofocus required>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">Pendiente</label>
                                    <input class="form-check-input" type="radio" name="radioOpcion" value="Pendiente" autofocus required>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">Ausente</label>
                                    <input class="form-check-input" type="radio" name="radioOpcion" value="Ausente" autofocus required>
                                </div>
                            </div>

                            <div class="d-grid">
                                <input type="hidden" name="id_cita" value="<?php echo $cita_doctor_editar->id_cita; ?>">
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
</section>

<?php include '../template/footer_admin.php';?>