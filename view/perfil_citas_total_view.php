<?php include '../template/header_view.php';?>
<?php require_once ("../controller/perfil_cita_total_controller.php"); ?>

<!--Vista de citas-->
<section class="background_view">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card border-info mt-3 card-responsive">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4 class="card-title">CITA ATENDIDA</h4>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Síntomas</th>
                                            <th scope="col">Especialidad:</th>
                                            <th scope="col">Médico</th>
                                            <th scope="col">Fecha</th>
                                            <th scope="col">Hora</th>
                                            <th scope="col">Diagnóstico</th>
                                            <th scope="col">Receta</th>
                                            <th scope="col">Exámenes</th>
                                            <th scope="col">Generar Reporte</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            foreach($citas_total as $dato){ 
                                        ?>
                                        <tr>
                                            <td scope="col"><?php echo $dato->sintomas;?></td>
                                            <td><?php echo $dato->especialidad_a; ?></td>
                                            <td><?php echo $dato->medico_a; ?></td>
                                            <td><?php echo $dato->fecha_a; ?></td>
                                            <td><?php echo $dato->hora_a; ?></td>
                                            <td><?php echo $dato->diagnostico; ?></td> 
                                            <td><?php echo $dato->receta; ?></td>.
                                            <td><?php echo $dato->examenes; ?></td>
                                            <td><a class="text-info" href="reporte_cita_pdf_view.php?id_cita=<?php echo $dato->id_cita;?>">
                                            <button type="button" class="btn btn-outline-danger"><i class="fas fa-file-pdf"></i></i></button></a></td>                               
                                        </tr>
                                        <?php
                                            }
                                        ?>
                                    </tbody>
                                </table>
                                <div class="mb-3">
                                    <input type="button" class="btn btn-info" onclick="history.back()" value="Volver">
                                </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include '../template/footer.php';?>