<?php include '../template/header_admin.php';?>
<?php require_once ("../controller/especialidad_controller.php"); ?>

<!--Vista especialidades-->
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card border-info mt-3 card-responsive">
                <div class="card-header"><h4 class="card-title"><b>ESPECIALIDADES MÉDICAS</b></h4></div>
                    <div class="card-body">
                                        
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Especialidad</th>
                                        <th scope="col">Descripción</th>
                                        <th scope="col">Disponibilidad</th>
                                        <th scope="col">Opciones</th>
                                        <!--<th scope="col" colspan="2">Opciones</th>-->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach($especialidad as $dato){
                                            //echo $dato;    
                                    ?>
                                    <tr>
                                        <td scope="col"><?php echo $dato->id_especialidad;?></td>
                                        <td><b><?php echo $dato->nombre_especialidad; ?></b></td>
                                        <td><?php echo $dato->descripcion_esp; ?></td>
                                        <td><?php echo $dato->disponibilidad; ?></td>
                                        <td><a class="text-info" href="especialidad_editar_view.php?id_especialidad=<?php echo $dato->id_especialidad; ?>">
                                        <button type="button" class="btn btn-outline-primary"><i class="bi bi-pencil-square"></i></button></a></td>

                                        <!--<td><a onclick="return confirm('¿Estas seguro de eliminar?')" class="text-danger" href="eliminar.php?ci=<?php echo $dato->ci; ?>"><i class="bi bi-trash"></i></a></td>-->
                                    </tr>
                                    <?php
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <a href="http://localhost/app/view/formulario_especialidad_view.php" class="btn btn-primary">Registrar especialidad</a>
                    </div>   
                </div>
            </div>
        </div>
        <div>
            
        </div>

<?php include '../template/footer_admin.php';?>