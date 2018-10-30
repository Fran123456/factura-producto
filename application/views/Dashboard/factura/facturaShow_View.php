<!DOCTYPE html>
<html>
<head>
	<title>Factura</title>
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
                                 <?php if($this->session->flashdata('facturaSuccess')): ?>
                                          <script> success('Factura agreda correctamente'); </script>
                                   <?php endif; ?>

                     <div class=" row ">
                            <div class="col-md-12">
                                  
                               <div class="card">

                                    <div class="card-header">
                                        <div class="row">
                                           Factura de: <?php echo $data[0]['nombre'] ?>
                                        </div>

                                    </div>
                                    <div class="card-body">
                                      <div class="row">
                                        
                                        <div style="margin-right: 20px; margin-left: 15px; margin-bottom: 15px"  class="text-right">
                                            <a target="_blank" href="<?php echo base_url()?>PDF/<?php echo $facturaId ?>" class="btn btn-secondary">&nbsp;&nbsp;<i class="far fa-file-pdf"></i>&nbsp;&nbsp;</a>
                                         </div>

                                         <br>
                                           <div style="margin-right: 40px" class="text-right">
                                            <a target="_blank" href="<?php echo base_url()?>PDF-download/<?php echo $facturaId ?>" class="btn btn-info">&nbsp;&nbsp;<i class="fas fa-download"></i>&nbsp;&nbsp;</a>
                                          </div>
                                      
                                      </div>
                                      
                                      
                                      
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group" >
                                                        <label  class="control-label mb-1">N° de factura:</label>
                                                        <input readonly="" value="<?php echo $data[0]['num_factura'] ?>"  class="form-control"   type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group" >
                                                        <label  class="control-label mb-1">Nombre:</label>
                                                        <input readonly="" value="<?php echo $data[0]['nombre'] ?>"  class="form-control"   type="text">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group" >
                                                        <label  class="control-label mb-1">Fecha de factura:</label>
                                                        <input readonly="" value="<?php echo $data[0]['fecha'] ?>"  class="form-control"   type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group" >
                                                        <label  class="control-label mb-1">Tipo de pago:</label>
                                                        <input readonly="" value="<?php echo $data[0]['nombreE'] ?>"  class="form-control"   type="text">
                                                    </div>
                                                </div>
                                                 <div class="col-md-4">
                                                    <div class="form-group" >
                                                        <label  class="control-label mb-1">Fecha nacimiento:</label>
                                                        <input readonly="" value="<?php echo $data[0]['fecha_nacimiento'] ?>"  class="form-control"   type="text">
                                                    </div>
                                                 </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group" >
                                                        <label  class="control-label mb-1">Correo:</label>
                                                        <input readonly="" value="<?php echo $data[0]['email'] ?>"  class="form-control"   type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group" >
                                                        <label  class="control-label mb-1">Dirección:</label>
                                                        <input readonly="" value="<?php echo $data[0]['direccion'] ?>"  class="form-control"   type="text">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                              <div class="col-md-12">
                                                      <div class="table-responsive m-b-40">
                                                             <table id="tabla"  class="table table-borderless table-data3">
                                                                <thead>
                                                                    <tr>
                                                                       <th>N°</th>
                                                                        <th>Producto:</th>
                                                                        <th>cantidad</th>
                                                                        <th>Precio unidad</th>
                                                                        <th>Precio total</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="tb">
                                                                 
                                                                  <?php for($i=0; $i < count($detalle); $i++):?>

                                                                   <tr>
                                                                     <td><?php echo ($i+1) ?></td>
                                                                    <td><?php echo $detalle[$i]['nombreP'] ?></td>
                                                                    <td><?php echo $detalle[$i]['cantidad'] ?></td>
                                                                    
                                                                    <td><?php echo  "USD ".   $detalle[$i]['precio'] ?></td>
                                                                    <td><?php echo "USD ". $detalle[$i]['precioD'] ?></td>
                                                                   </tr>
                                                                 <?php endfor; ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <!-- END DATA TABLE-->

                                                    </div>
                                              </div>

                                              <div class="row">
                                                <div class="col-md-5 text-right">
                                                   <label>Total a pagar:</label>
                                                </div>
                                                <div class="col-md-2">
                                                  <input class="form-control" readonly="" type="text" value="USD <?php echo $varTotal ?>" name="">
                                                </div>
                                              </div>

                                              <div class="row">
                                                <div class="col-md-5 text-right">
                                                   <label>cantidad de productos:</label>
                                                </div>
                                                <div class="col-md-2">
                                                  <input class="form-control" readonly="" type="text" value="<?php echo $varCantidad ?>" name="">
                                                </div>
                                              </div>
                                            </div>  


                                      </div>
                                 </div>
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

  
  <script type="text/javascript" src="<?php base_url()?>assets/DataTables/datatables.min.js"></script>
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