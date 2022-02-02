<?php include '../template/header_view.php';?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
        <?php
        if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'falta') {
        ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> Rellena todos los campos.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
        }
        ?>

        <?php
        if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'registrado') {
        ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Registrado!</strong> Especialidad registrada.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
        }
        ?>

        <?php
        if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'error') {
        ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> Vuelve a intentar.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
        }
        ?>

        <?php
                if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'editado') {
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Actualizado!</strong> Registro actualizado.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
                }
        ?>

        <?php
                if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'registrado') {
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Actualizado!</strong> Registro actualizado.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
                }
        ?>
            
        </div>
    </div>
</div>
<?php include '../template/footer.php';?>