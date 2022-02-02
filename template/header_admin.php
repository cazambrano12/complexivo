<!DOCTYPE html>
<html lang="es">

<head>  

    <meta charset="UTF-8" />
    <title>Complexivo</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/app/template/styles_admin.css">

    <!-- CDN font awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

    <!-- CDN Iconos -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-menu" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold border-bottom">
                <a href="http://localhost/app/index.php" class="enlace">
                <img src="http://localhost/app/template/logo.png" alt="" class="logo"></a>Administrador</div>
            <div class="list-group list-group-flush my-3">
                <a href="http://localhost/app/view/usuarios_view.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="bi bi-person-circle me-2"></i>Usuarios</a>
                <a href="http://localhost/app/view/pacientes_view.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="bi bi-people-fill me-2"></i>Pacientes</a>
                <a href="http://localhost/app/view/administradores_view.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-project-diagram me-2"></i>Administradores</a>
                <a href="http://localhost/app/view/medicos_view.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="bi bi-file-medical-fill me-2"></i>Médicos</a>
                <a href="http://localhost/app/view/especialidad_view.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="bi bi-layers-half me-2"></i>Especialidades</a>
                <a href="http://localhost/app/view/turnos_medicos_view.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="bi bi-calendar-check me-2"></i>Turnos Médicos</a>
                <a href="http://localhost/app/view/medicinas_admin_view.php?consulta=&enviar=" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-pills me-2"></i>Medicamentos</a>          
                <a href="http://localhost/app/view/examenes_admin_view.php?consulta=&enviar=" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-diagnoses me-2"></i>Exámenes Médicos</a> 
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="bi bi-building me-2"></i>Citas Médicas</a>
                <a href="http://localhost/app/view/estadisticas_view.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="bi bi-graph-up-arrow me-2"></i>Estadísticas</a>
                <a href="http://localhost/app/index.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h3 class="fs-20 m-0">HOSPITAL ZONA EL ORO</h3>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>Administrador
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Perfil</a></li>
                                <li><a class="dropdown-item" href="http://localhost/app/index.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

