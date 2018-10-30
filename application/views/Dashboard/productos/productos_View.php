<!DOCTYPE html>
<html>
<head>
	<title>Productos</title>
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

              <?php for($i=0; $i < count($data); $i++):?>
                   <input type="hidden" id="<?php echo $i ?>-data" value="<?php echo base_url()?>delete_product/<?php echo $data[$i]['id_producto'] ?>">
             <?php endfor; ?>


              <div class=" row ">

                            <div class="col-md-12">
                              <h3>Productos</h3>
                                    <?php if($this->session->flashdata('productoSuccess')): ?>
                                          <script> success('Producto agregado correctamente'); </script>
                                   <?php endif; ?>

                                   <?php if($this->session->flashdata('productodelete')): ?>
                                          <script> success('Producto eliminado correctamente'); </script>
                                   <?php endif; ?>

                                   <?php if($this->session->flashdata('productoupdate')): ?>
                                          <script> success('Producto actualizado correctamente'); </script>
                                   <?php endif; ?>


                                   
                                    <div class=" text-right">
                                       <a class="btn btn-success" href="<?php echo base_url()?>add_product">Agrega</a>
                                       <br>
                                    </div>
                                   <br>
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table id="tabla"  class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                               <th>N°</th>
                                                <th>Nombre</th>
                                                <th>precio</th>
                                                <th>stock</th>
                                                <th>categoria</th>
                                                <th>Editar</th>
                                                <th>eliminar</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tb">
                                          <?php for($i=0; $i < count($data); $i++):?>
                                           <tr>
                                              <?php if($data[$i]['stock'] == 0): ?>
                                                 <td style="background-color: #DF7B5F;color: white"><?php echo ($i+1) ?></td>
                                                 <td style="background-color: #DF7B5F;color: white"><?php echo $data[$i]['nombreP'] ?></td>
                                                 <td style="background-color: #DF7B5F;color: white">$ <?php echo $data[$i]['precio'] ?></td>
                                                  <td style="background-color: #DF7B5F;color: white"><?php echo $data[$i]['stock'] ?></td>
                                                  <td style="background-color: #DF7B5F;color: white"><?php echo $data[$i]['nombre'] ?></td>

                                                  <td style="background-color: #DF7B5F;color: white"> <a  href="<?php echo base_url()?>edit-product/<?php echo $data[$i]['id_producto'] ?>" class="btn btn-info"> <i class="fas fa-pencil-alt"></i></a></td>
                                                 <td style="background-color: #DF7B5F;color: white"><button id="<?php echo $i?>" type="button" class="btn btn-danger" onclick="del_producto(this);"><i class="fas fa-trash-alt"></i></button></td>
                                              <?php else: ?>
                                                 <td><?php echo ($i+1) ?></td>
                                                 <td><?php echo $data[$i]['nombreP'] ?></td>
                                                 <td>$ <?php echo $data[$i]['precio'] ?></td>
                                                 <td ><?php echo $data[$i]['stock'] ?></td>
                                                  <td><?php echo $data[$i]['nombre'] ?></td>


                                                  <td> <a  href="<?php echo base_url()?>edit-product/<?php echo $data[$i]['id_producto'] ?>" class="btn btn-info"> <i class="fas fa-pencil-alt"></i></a></td>
                                                 <td><button id="<?php echo $i?>" type="button" class="btn btn-danger" onclick="del_producto(this);"><i class="fas fa-trash-alt"></i></button></td>
                                              <?php endif; ?>
                                            
                                             
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

  <script type="text/javascript">
   
  </script>

  
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