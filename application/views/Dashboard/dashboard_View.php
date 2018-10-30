<!DOCTYPE html>
<html>
<head>
	<title>Dasboard</title>
   
	<!--CARGAN ESTILOS Y BOOTSTRAP-->
	<?php require 'application/views/templates/autoload_bootstrap.php'; ?>
	<!--CARGAN ESTILOS Y BOOTSTRAP-->
</head>
<body class="animsition">
      <div class="page-wrapper">
      <?php require 'application/views/templates/nav.php'; ?>
       <?php require 'application/views/templates/panel.php'; ?>
       <!-- MAIN CONTENT-->
         <div class="main-content">
           <div class="section__content section__content--p30">
             <div class="container-fluid">
       


             <!--CODIGO DE LA APLICACION-->
             <div class="row">
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title">N° clientes <i class="fas fa-users"></i></strong>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text"><h3><?php echo $dataNumber['n_clientes'] ?></h3>
                                        </p>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title">N° categorias <i class="fas fa-clipboard"></i></strong>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text"><h3><?php echo $dataNumber['n_categorias'] ?></h3>
                                        </p>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title">N° productos <i class="far fa-lemon"></i></strong>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text"><h3><?php echo $dataNumber['n_productos'] ?></h3>
                                        </p>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title">N° facturas <i class="fas fa-money-bill-alt"></i></strong>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text"><h3><?php echo $dataNumber['n_facturas'] ?></h3>
                                        </p>
                                    </div>
                                </div>
                            </div>
             </div>

                <div class="row">
                  <div class="col-md-12">
                    <h4>Productos sin existencias</h4>
                                  <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th width="100">N°</th>
                                                <th>Producto</th>
                                                <th width="100">Precio</th>
                                                <th width="100">Editar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php for ($i=0; $i <count($productosCero) ; $i++): ?>
                                            <tr>
                                                <td><?php echo ($i+1) ?></td>
                                                <td><?php echo $productosCero[$i]['nombreP'] ?></td>
                                                <td><?php echo $productosCero[$i]['precio'] . " $"?></td>
                                               <td > <a  href="<?php echo base_url()?>edit-product/<?php echo $productosCero[$i]['id_producto'] ?>" class="btn btn-info"> <i class="fas fa-pencil-alt"></i></a></td>
                                            </tr>
                                          <?php endfor; ?>
                                            
                                        </tbody>
                                    </table>
                       </div>
               </div>

        


             <!--CODIGO DE LA APLICACION-->


     
   
           </div>
		  </div>
		</div>
	   </div>
     </div>

    
     
     <!--CARGAN LOS SCRIPTS-->
    <script src="<?php echo base_url()?>assets/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?php echo base_url()?>assets/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?php echo base_url()?>assets/vendor/slick/slick.min.js">
    </script>
    <script src="<?php echo base_url()?>assets/vendor/wow/wow.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/animsition/animsition.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?php echo base_url()?>assets/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?php echo base_url()?>assets/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    




  <script src="<?php echo base_url()?>assets/js/main.js"></script>

</body>
</html>