<?php include '../template/header_view.php';?>
<?php require_once ("../controller/doctor_cita_controller.php"); ?>

<!--Vista atención de cita-->
<section class="background_view">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card border-info mt-3 card-responsive">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4 class="card-title">CITAS AGENDADAS</h4>
                            <div class="table-responsive">
                        <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ID Cita</th>
                                <th scope="col">CI</th>
                                <th scope="col">Paciente</th>
                                <th scope="col">Sintomas</th>
                                <th scope="col">Especialidad</th>
                                <th scope="col">Hora</th>
                                <th scope="col">Atender Cita</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($citas_doctor as $dato){ 
                            ?>
                            <tr>
                                <td scope="col"><?php echo $dato->id_cita;?></td>
                                <td><?php echo $dato->ci_cita; ?></td>
                                <td><?php echo $dato->paciente; ?></td>
                                <td><?php echo $dato->sintomas; ?></td>
                                <td><?php echo $dato->especialidad_a; ?></td>
                                <td><?php echo $dato->hora_a; ?></td>     
                                <td><a class="text-info" href="editar_cita_doctor_view.php?id_cita=<?php echo $dato->id_cita; ?>">
                                <button type="button" class="btn btn-outline-warning"><i class="bi bi-bandaid-fill"></i></button></a></td>                             
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
</section>
<?php include '../template/footer.php';?>