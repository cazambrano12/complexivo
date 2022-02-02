<?php include '../template/header_view.php';?>
<?php require_once ("../controller/perfil_cita_controller.php"); ?>

<!--Vista de citas registradas-->
<section class="background_view">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card border-info mt-3 card-responsive">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4 class="card-title">CITAS REGISTRADAS</h4>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID Cita</th>
                                            <th scope="col">Síntomas</th>
                                            <th scope="col">Especialidad:</th>
                                            <th scope="col">Médico</th>
                                            <th scope="col">Fecha</th>
                                            <th scope="col">Hora</th>
                                            <th scope="col">Estado</th>
                                            <th scope="col">Cita Atendida</th>
                                            <th scope="col">Cancelar Cita</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            foreach($citas as $dato){ 
                                        ?>
                                        <tr>
                                            <td scope="col"><?php echo $dato->id_cita;?></td>
                                            <td><?php echo $dato->sintomas; ?></td>
                                            <td><?php echo $dato->especialidad_a; ?></td>
                                            <td><?php echo $dato->medico_a; ?></td>
                                            <td><?php echo $dato->fecha_a; ?></td>
                                            <td><?php echo $dato->hora_a; ?></td>
                                            <td><?php echo $dato->estado; ?></td>                                
                                        
                                            <td><?php
                                            if(($dato->estado)==="Atendido"){
                                                ?>                                 
                                                <a class="text-info" href="perfil_citas_total_view.php?id_cita=<?php echo $dato->id_cita;?>">
                                                <button type="button" class="btn btn-outline-primary"><i class="bi bi-check-square-fill"></i></i></button></a>  
                                            <?php
                                                }
                                            ?></td>
                                            <td><?php
                                            if(($dato->estado)==="Pendiente"){
                                                ?>
                                                <a onclick="return confirm('¿Estas seguro de cancelar la cita?')" class="text-danger" href="../controller/cancelar_cita_total_controller.php?id_cita=<?php echo $dato->id_cita; ?>">
                                                <button type="button" class="btn btn-outline-danger"><i class="bi bi-trash2-fill"></i></button></a>                                 
 
                                            <?php
                                                }
                                            ?></td>
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