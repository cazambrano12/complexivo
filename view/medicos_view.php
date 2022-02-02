<?php include '../template/header_admin.php';?>
<?php require_once ("../controller/medicos_controller.php"); ?>

<!--Vista de médicos-->
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card border-info mt-3 card-responsive">
                <div class="card-header"><h4 class="card-title"><b>MÉDICOS</b></h4></div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">CI</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Apellido</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Teléfono</th>
                                        <th scope="col">Ciudad</th>
                                        <th scope="col">Dirección</th>
                                        <th scope="col">Fecha de Nacimiento</th>
                                        <th scope="col">Género</th>
                                        <th scope="col">Rol</th>
                                        <th scope="col" colspan="3">Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach($persona as $dato){    
                                    ?>
                                    <tr>
                                        <td scope="col"><?php echo $dato->ci;?></td>
                                        <td><?php echo $dato->nombre; ?></td>
                                        <td><?php echo $dato->apellido; ?></td>
                                        <td><?php echo $dato->email; ?></td>
                                        <td><?php echo $dato->telefono; ?></td>
                                        <td><?php echo $dato->ciudad; ?></td>
                                        <td><?php echo $dato->direccion; ?></td>
                                        <td><?php echo $dato->fecha_nacimiento; ?></td>
                                        <td><?php echo $dato->genero; ?></td>
                                        <td><?php echo $dato->rol; ?></td>
                                        <td><a class="text-info" href="editar_medico_especialidad_admin_view.php?ci=<?php echo $dato->ci; ?>">
                                        <button type="button" class="btn btn-outline-info"><i class="bi bi-plus-square"></i></button></a></td>
                                        <td><a class="text-info" href="editar_user_admin_view.php?ci=<?php echo $dato->ci; ?>">
                                        <button type="button" class="btn btn-outline-primary"><i class="bi bi-pen"></i></button></a></td>
                                        <td><a onclick="return confirm('¿Estas seguro de eliminar?')" class="text-danger" href="../controller/eliminar_controller.php?ci=<?php echo $dato->ci; ?>">
                                        <button type="button" class="btn btn-outline-danger"><i class="bi bi-trash"></i></button></a></td>
                                        
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