<?php include '../template/header_view.php';?>
<?php require_once ("../controller/perfil_login_controller.php"); ?>

<!--Vista de citas médicas-->
<section class="background_view">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card border-info mt-3 card-responsive">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                <?php
                                    foreach((array) $login_user as $dato){ 
                                        $fecha_nacimiento = new DateTime($dato->fecha_nacimiento);
                                        $hoy = new DateTime();
                                        $edad = $hoy->diff($fecha_nacimiento);
                                ?>

                                    <th scope="col">CI</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Teléfono</th>
                                    <th scope="col">Ciudad</th>
                                    <th scope="col">Dirección</th>
                                    <?php
                                        if(($dato->rol)==="Paciente"){
                                    ?> 
                                    <th scope="col">Registrar Cita Médica</th>
                                    <th scope="col">Consultar Citas Médicas</th>
                                    <th scope="col">Editar Datos</th>
                                    <?php
                                        }
                                    ?>
                                    <?php
                                        if(($dato->rol)==="Médico"){
                                    ?> 
                                    <th scope="col">Citas Médicas Agendadas</th>
                                    <?php
                                        }
                                    ?>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <div class="card-body">
                                    <h4 class="card-title"><?php echo $dato->nombre; ?> <?php echo $dato->apellido; ?></h4>
                                    <h5 class="card-title">Rol: <?php echo $dato->rol; ?></h5> 
                                    <h5 class="card-title">Edad: <?php echo $edad->y; ?></h5>   
                                    </div>
                                    <td scope="col"><?php echo $dato->ci;?></td>
                                    <td><?php echo $dato->email; ?></td>
                                    <td><?php echo $dato->telefono; ?></td>
                                    <td><?php echo $dato->ciudad; ?></td>
                                    <td><?php echo $dato->direccion; ?></td>

                                    <?php
                                        if(($dato->rol)==="Paciente"){
                                    ?>                                 
                                    <td><a class="text-info" href="cita_formulario_preview.php?ci=<?php echo $dato->ci; ?>">
                                    <button type="button" class="btn btn-outline-primary"><i class="bi bi-plus-square"></i></i></button></a></td>  
                                    <td><a class="text-info" href="perfil_citas_view.php?ci=<?php echo $dato->ci; ?>">
                                    <button type="button" class="btn btn-outline-success"><i class="bi bi-search"></i></i></button></a></td>
                                    <td><a class="text-info" href="editar_view.php?ci=<?php echo $dato->ci; ?>">
                                    <button type="button" class="btn btn-outline-danger"><i class="bi bi-pencil-square"></i></button></a></td>
                                    <?php
                                        }
                                    ?>
                                    <?php
                                        if(($dato->rol)==="Médico"){
                                    ?>                                 
                                    <td><a class="text-info" href="doctor_citas_view.php?ci=<?php echo $dato->nombre; ?> <?php echo $dato->apellido; ?>">
                                    <button type="button" class="btn btn-outline-primary"><i class="bi bi-plus-square"></i></i></button></a></td>  
                                    <?php
                                        }
                                    ?>

                                </tr>
                                <?php     
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
</section>

<?php include '../template/footer.php';?>