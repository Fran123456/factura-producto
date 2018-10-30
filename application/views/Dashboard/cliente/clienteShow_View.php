<!DOCTYPE html>
<html>
<head>
	<title>Cliente</title>
	<!--CARGAN ESTILOS Y BOOTSTRAP-->
	<?php require 'application/views/templates/autoload_bootstrap.php'; ?>
	<!--CARGAN ESTILOS Y BOOTSTRAP-->
</head>
<body>
      <div class="page-wrapper">
      <?php require 'application/views/templates/nav.php'; ?>
       <?php require 'application/views/templates/panel.php'; ?>
       <!-- MAIN CONTENT-->
         <div class="main-content">
           <div class="section__content section__content--p30">
             <div class="container-fluid">
       


             <!--CODIGO DE LA APLICACION-->
             <div class="row">
               <div class="col-md-12">
                     <div class="card">
                                    <div class="card-header">
                                        <strong><?php echo $data[0]['nombre'] ?></strong>
                                    </div>
                                    <div class="card-body card-block">
                                      <div class="row">
                                            <div class="form-group col-6 col-md-6">
                                                  <label>Nombre:</label>
                                                    <input readonly="" value="<?php echo $data[0]['nombre'] ?>"  class="form-control"  type="text"> 
                                            </div>

                                            <div class=" form-group col-3 col-md-3">
                                                  <label>Fecha nacimiento:</label>
                                                    <input readonly="" value="<?php echo $data[0]['fecha_nacimiento'] ?>"  class="form-control" id="hf-email" type="text"> 
                                            </div>

                                            <div class=" form-group col-3 col-md-3">
                                                  <label>Telefono:</label>
                                                    <input readonly="" value="<?php echo $data[0]['telefono'] ?>"  class="form-control" id="hf-email" type="text"> 
                                            </div>

                                            <div class=" form-group col-4 col-md-4">
                                                  <label>Correo:</label>
                                                    <input readonly="" value="<?php echo $data[0]['email'] ?>"  class="form-control" id="hf-email" type="text"> 
                                            </div>
                                            <div class="form-group col-8 col-md-8">
                                                     <label>Dirección</label>
                                                    <textarea readonly="" rows="2"  class="form-control"><?php echo $data[0]['direccion'] ?></textarea>
                                            </div>
                                       </div>
 
                                    </div>

                                </div>
                 
                    </div>
             </div>
             <hr>
                <div class="row">
                  
                    <div class="col-md-12">
                      <h4>Facturas del cliente <?php echo $data[0]['nombre'] ?></h4>
                           <div class="table-responsive m-b-40">
                                    <table id="tabla"  class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                               <th>N°</th>
                                                <th>Nº factura</th>
                                                <th>Fecha</th>
                                                <th>Ver</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tb">
                                          <?php for($i=0; $i < count($facturas); $i++):?>
                                           <tr>
                                             <td><?php echo ($i+1) ?></td>
                                            <td><?php echo $facturas[$i]['num_factura'] ?></td>
                                            <td><?php echo $facturas[$i]['fecha'] ?></td>
                                            <td><a class="btn btn-warning btn-lg" href="<?php echo base_url()?>show-factura/<?php echo $facturas[$i]['num_factura']  ?>"><i class="fas fa-eye"></i></a></td>
                                          
                                           </tr>
                                         <?php endfor; ?>
                                        </tbody>
                                    </table>
                                </div>
                    </div>
                </div>
             <!--CODIGO DE LA APLICACION-->

   
          
		  </div>
		</div>
	   </div>
     </div>
     <!--CARGAN LOS SCRIPTS-->
	<?php require 'application/views/templates/autoload_scripts.php'; ?>


     <script type="text/javascript" src="../assets/DataTables/datatables.min.js"></script>
  <script type="text/javascript">
       $(document).ready(function(){
          $("#tabla").dataTable({
           responsive: true,  
            "language": {
              "url": "../assets/DataTables/lenguaje.js"
            }
          }); 
      });
  </script>

	<!--CARGAN LOS SCRIPTS-->

</body>
</html>