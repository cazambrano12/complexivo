<?php include '../template/header_admin.php';?>
<?php require_once ("../controller/estadisticas_controller.php"); ?>

<!--Vista estadísticas desde administrador-->
    <div class="container-fluid px-4">
        <div class="row g-3 my-2">
            <div class="col-md-3">
                <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                    <div>
                        <h3 class="fs-2">
                            <?php
                                 foreach($total_usuarios as $dato){    
                            ?>
                            <tr>
                                <td scope="col"><?php echo $dato->registros;?></td>
                            <?php
                                        }
                            ?>
                            </h3><p class="fs-5">TOTAL DE USUARIOS REGISTRADOS</p>
                    </div>
                        <i class="fas fa-users fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                </div>
                
            </div>

            <div class="col-md-3">
                <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                    <div>
                        <h3 class="fs-2">
                            <?php
                                 foreach($total_medicos as $dato){    
                            ?>
                            <tr>
                                <td scope="col"><?php echo $dato->medicos;?></td>
                            <?php
                                        }
                            ?>
                            </h3><p class="fs-5">TOTAL DE MÉDICOS REGISTRADOS</p>
                    </div>
                        <i class="fas fa-user-md fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                </div> 
            </div>

            <div class="col-md-3">
                <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                    <div>
                        <h3 class="fs-2">
                            <?php
                                 foreach($total_citas as $dato){    
                            ?>
                            <tr>
                                <td scope="col"><?php echo $dato->citas;?></td>
                            <?php
                                        }
                            ?>
                            </h3><p class="fs-5">TOTAL DE CITAS REGISTRADAS</p>
                    </div>
                        <i class="fas fa-calendar-check fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                </div> 
            </div>

		</div>
    </div>

<?php include '../template/footer_admin.php';?>