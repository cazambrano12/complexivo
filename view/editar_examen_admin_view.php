<?php include '../template/header_admin.php';?>
<?php require_once ("../controller/editar_examenes_controller.php"); ?>

<!--Vista edición de examen médico-->
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card border-info mt-3 card-responsive">
                <div class="card-header"><h4 class="card-title text-center"><b>EDITAR EXAMEN</b></h4></div>
                    <div class="card-body">

                        <form class="p-4" method="POST" action="../controller/editar_examen_conf_controller.php">
                            <div class="mb-3">
                            <label class="form-label"><b>ID Examen:</b></label>
                                <input type="text" class="form-control" name="txtIDex" readonly 
                                value="<?php echo $examen->id_examen; ?>">
                            </div>

                            <div class="mb-3">
                                <label class="form-label"><b>Examen:</b></label>
                                <input type="text" class="form-control" name="txtExamen" required
                                value="<?php echo $examen->examen; ?>">
                            </div>

                            <div class="mb-3">
                                <label class="form-label"><b>Estado:</b></label>
                                <input type="text" class="form-control" name="txtEstado" placeholder="Activado/Desactivado" required
                                value="<?php echo $examen->estado_examen; ?>">
                            </div>

                            <div class="d-grid">
                                <input type="hidden" name="id_examen" value="<?php echo $examen->id_examen; ?>">
                                <input type="submit" class="btn btn-primary" value="Actualizar">
                            </div>

                            <br>
                            <div class="mb-3">
                                <input type="button" class="btn btn-info" onclick="history.back()" value="Volver">
                            </div> 

                        </form>
                </div>
            </div>
        </div>
    </div>

    <?php include '../template/footer_admin.php';?>