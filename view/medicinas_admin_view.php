<?php include '../template/header_admin.php';?>
<?php require_once ("../controller/medicinas_controller.php"); ?>

<!--Vista medicinas desde administrador-->
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card border-info mt-3 card-responsive">
                <div class="card-header"><h4 class="card-title"><b>MEDICAMENTOS</b></h4></div>
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
                                    <th scope="col">ID Medicina</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Estado</th>
                                    <th scope="col" colspan="1">Editar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($busca_medicinas as $dato){    
                                ?>
                                <tr>
                                    <td scope="col"><?php echo $dato->id_medicina;?></td>
                                    <td><?php echo $dato->medicina; ?></td>
                                    <td><?php echo $dato->estado_medicina; ?></td>
                                    <td><a class="text-info" href="editar_medicina_admin_view.php?id_medicina=<?php echo $dato->id_medicina; ?>">
                                    <button type="button" class="btn btn-outline-primary"><i class="bi bi-pen"></i></button></a></td>
                                       
                                </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <a href="http://localhost/app/view/formulario_medicina_admin_view.php" class="btn btn-primary">Registrar medicamento</a>
                </div>
            </div>
        </div>
    </div>

<?php include '../template/footer_admin.php';?>