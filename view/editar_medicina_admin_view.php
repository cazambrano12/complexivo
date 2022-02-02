<?php include '../template/header_admin.php';?>
<?php require_once ("../controller/editar_medicinas_controller.php"); ?>

<!--Vista edición de medidicna-->
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card border-info mt-3 card-responsive">
                <div class="card-header"><h4 class="card-title text-center"><b>EDITAR MEDICINA</b></h4></div>
                    <div class="card-body">

                        <form class="p-4" method="POST" action="../controller/editar_medicina_conf_controller.php">
                            <div class="mb-3">
                            <label class="form-label"><b>ID Medicina:</b></label>
                                <input type="text" class="form-control" name="txtIDmed" readonly 
                                value="<?php echo $medicina->id_medicina; ?>">
                            </div>

                            <div class="mb-3">
                                <label class="form-label"><b>Medicina:</b></label>
                                <input type="text" class="form-control" name="txtMedicina" required
                                value="<?php echo $medicina->medicina; ?>">
                            </div>

                            <div class="mb-3">
                                <label class="form-label"><b>Estado:</b></label>
                                <input type="text" class="form-control" name="txtEstado" placeholder="Disponible/Terminado" required
                                value="<?php echo $medicina->estado_medicina; ?>">
                            </div>

                            <div class="d-grid">
                                <input type="hidden" name="id_medicina" value="<?php echo $medicina->id_medicina; ?>">
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