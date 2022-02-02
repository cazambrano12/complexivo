<?php include '../template/header_admin.php';?>
<?php require_once ("../controller/examenes_controller.php"); ?>

<!--Vista examen desde administrador-->
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card border-info mt-3 card-responsive">
                <div class="card-header"><h4 class="card-title"><b>EXÁMENES MÉDICOS</b></h4></div>
                    <div class="card-body">

                    <form action="" method="GET">
                        
                        <input type="text" class="form-control-lg"  name="consulta">&nbsp;&nbsp;
                        <button type="submit" class="btn btn-outline-success" name="enviar"><i class="bi bi-search"></i></button></a></td>&nbsp;&nbsp;
                        <button type="submit" class="btn btn-outline-info" name="enviar"><i class="bi bi-list-ol"></i></button></a></td>

                    </form>

                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">ID Examen</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Estado</th>
                                    <th scope="col" colspan="1">Editar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($busca_examen as $dato){    
                                ?>
                                <tr>
                                    <td scope="col"><?php echo $dato->id_examen;?></td>
                                    <td><?php echo $dato->examen; ?></td>
                                    <td><?php echo $dato->estado_examen; ?></td>
                                    <td><a class="text-info" href="editar_examen_admin_view.php?id_examen=<?php echo $dato->id_examen; ?>">
                                    <button type="button" class="btn btn-outline-primary"><i class="bi bi-pen"></i></button></a></td>
                                       
                                </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <a href="http://localhost/app/view/formulario_examen_admin_view.php" class="btn btn-primary">Registrar examen</a>
                </div>
            </div>
        </div>
    </div>

<?php include '../template/footer_admin.php';?>