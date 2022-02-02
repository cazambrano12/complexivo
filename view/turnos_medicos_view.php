<?php include '../template/header_admin.php';?>
<?php require_once ("../controller/turnos_medicos_controller.php"); ?>

<!--Vista de turnos médicos, controlador conecta con BBDD y muestra información-->
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card border-info mt-3 card-responsive">
                <div class="card-header"><h4 class="card-title"><b>TURNOS MÉDICOS</b></h4></div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">CI</th>
                                        <th scope="col">Médico</th>
                                        <th scope="col">Especialidades</th>
                                        <th scope="col">Inicio de Turno</th>
                                        <th scope="col">Fin de Turno</th>
                                        <th scope="col">Inicio de Horario</th>
                                        <th scope="col">Fin de Horario</th>
                                        <th scope="col">Disponibilidad</th>
                                        <th scope="col" colspan="1">Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach($turno_medico as $dato){    
                                    ?>
                                    <tr>
                                        <td scope="col"><?php echo $dato->ci_mesp;?></td>
                                        <td><?php echo $dato->medico; ?></td>
                                        <td><?php echo $dato->especialidad; ?></td>
                                        <td><?php echo $dato->turno_inicio; ?></td>
                                        <td><?php echo $dato->turno_fin; ?></td>
                                        <td><?php echo $dato->hora_inicio; ?></td>
                                        <td><?php echo $dato->hora_fin; ?></td>
                                        <td><?php echo $dato->disponibilidad; ?></td>
                                        <td><a class="text-info" href="editar_user_admin_view.php?ci=<?php echo $dato->ci; ?>">
                                        <button type="button" class="btn btn-outline-primary"><i class="bi bi-pen"></i></button></a></td> 
                                    </tr>
                                    <?php
                                        }
                                    ?>
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include '../template/footer_admin.php';?>