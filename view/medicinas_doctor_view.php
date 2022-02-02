<?php include '../template/header_view.php';?>
<?php require_once ("../controller/medicinas_cita_controller.php"); ?>

<!--Vista medicina desde médico-->
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card border-info mt-3 card-responsive">
                <div class="card-header"><h4 class="card-title"><b>MEDICAMENTOS</b></h4></div>
                    <div class="card-body">

                    <?php $url= $_SERVER["REQUEST_URI"];
                    $resultado = substr($url, 62);
                    //echo $resultado;
                    ?>

                    <form action="" method="GET">
                        
                        <input type="text" class="form-control-lg"  name="consulta">&nbsp;&nbsp;
                        <button type="submit" class="btn btn-outline-success" name="enviar"><i class="bi bi-search"></i></button></a></td>&nbsp;&nbsp;
                        <button type="submit" class="btn btn-outline-info" name="enviar"><i class="bi bi-list-ol"></i></button></a></td>
                        <button type="submit" class="btn btn-outline-info" name="llenar"><i class="bi bi-list-ol"></i></button></a></td>
                    

                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Seleccionar</th>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                    foreach($busca_medicinas as $dato){    
                                ?>
                                <tr>
                                    <td scope="col"><input class="form-check-input" type="checkbox" value="<?php echo $dato->medicina ?>" name="txtMedicina[]"></td>
                                    <td><?php echo $dato->id_medicina; ?></td>
                                    <td><?php echo $dato->medicina; ?></td>   
                                    <td><?php echo $dato->estado_medicina; ?></td>  

                                       
                                </tr>
                                <?php
                                    }
 
                                ?>
                            </tbody>
                        </table>

                    </div>
                    <a onclick="" class="text-danger" href="../controller/registra_receta_controller.php?id_medicina=<?php echo $dato->id_medicina; ?>">
                                        <button type="button" class="btn btn-outline-danger"><i class="bi bi-trash"></i></button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php include '../template/footer_admin.php';?>