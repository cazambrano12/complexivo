<?php include '../template/header_admin.php';?>
<?php require_once ("../controller/especialidad_editar_controller.php"); ?>

<!--Vista edición de especialidad-->
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-responsive">
                <div class="card-header">
                    Editar registros de Especialidades:
                </div>

                <form class="p-4" method="POST" action="../controller/especialidad_guardar_controller.php">
                    <div class="mb-3">
                        <label class="form-label">ID Especialidad:</label>
                        <input type="text" class="form-control" name="txtid_esp" readonly 
                        value="<?php echo $especialidad_editar->id_especialidad; ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Especialidad:</label>
                        <input type="text" class="form-control" name="txtEspecialidad" required 
                        value="<?php echo $especialidad_editar->nombre_especialidad; ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Descripción:</label>
                        <textarea class="form-control" name="txtDescripcion" rows="3" required
                        ><?=$especialidad_editar->descripcion_esp;?>"</textarea>

                    </div>

                    <div class="mb-3">
                        <label class="form-label">Disponibilidad:</label><br>
                        <div class="form-check">
                            <label class="form-check-label">Activado</label>
                            <input class="form-check-input" type="radio" name="radioOpcion" value="Activado" autofocus required>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">Desactivado</label>
                            <input class="form-check-input" type="radio" name="radioOpcion" value="Desactivado" autofocus required>
                        </div>
                    </div>
                 
                    <div class="d-grid">
                        <input type="hidden" name="id_especialidad" value="<?php echo $especialidad_editar->id_especialidad; ?>">
                        <input type="submit" class="btn btn-primary" value="Editar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include '../template/footer_admin.php';?>