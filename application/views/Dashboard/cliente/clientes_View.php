<!DOCTYPE html>
<html>
<head>
	<title>Clientes</title>
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

              <div class=" row ">
                            <div class="col-md-12">
                                   <h3>Clientes registrados</h3>
                                    
                                   <br>
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table id="tabla"  class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                               <th>N°</th>
                                                <th>Nombre</th>
                                                <th>Correo</th>
                                                <th>Ver</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tb">
                                          <?php for($i=0; $i < count($data); $i++):?>
                                           <tr>
                                             <td><?php echo ($i+1) ?></td>
                                            <td><?php echo $data[$i]['nombre'] ?></td>
                                            <td><?php echo $data[$i]['email'] ?></td>
                                             <td><a class="btn btn-success" href="<?php echo base_url()?>cliente/<?php echo $data[$i]['id_cliente'] ?>"><i class="fas fa-eye"></i></a></td>
                                           </tr>
                                         <?php endfor; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>

             <!--CODIGO DE LA APLICACION-->
           </div>
		  </div>
		</div>
	   </div>
     </div>
     <!--CARGAN LOS SCRIPTS-->
	<?php require 'application/views/templates/autoload_scripts.php'; ?>
	<!--CARGAN LOS SCRIPTS-->
   <script  src="assets/DataTables/datatables.min.js"></script>
  <script type="text/javascript">
       $(document).ready(function(){
          $("#tabla").dataTable({
           responsive: true,  
            "language": {
              "url": "assets/DataTables/lenguaje.js"
            }
          }); 
      });
  </script>
  
  
</body>
</html>