<?php include '../template/header_admin.php';?>
    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-md-7">
                
                <?php
                    if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'editado') {
                ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Actualizado!</strong> Registro actualizado.
                    <button onclick="location.href='../view/estadisticas_view.php'" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    
                </div>
                <?php
                    }
                ?>

                <?php
                    if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'eliminado') {
                ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Eliminado!</strong> Registro eliminado.
                    <button onclick="location.href='../view/estadisticas_view.php'" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php
                    }
                ?>

                <?php

                    if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'acceso') {
                ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Acceso!</strong> Acceso de usuario.
                    <button onclick="location.href='../view/perfil_view.php'" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php
                    }
                ?>

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
                    <strong>Registrado!</strong> Usuario registrado.
                    <button onclick="location.href='../view/usuarios_view.php'" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php
                    }
                ?>

                <?php
                    if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'error') {
                ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> Vuelve a intentar.
                    <button onclick="location.href='../view/login_view.php'" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php
                    }
                ?>
            
            </div>
        </div>
	</div>

<?php include '../template/footer_admin.php';?>