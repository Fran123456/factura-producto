<!DOCTYPE html>
<html>
<head>
	<title>Categorias</title>
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
                   <input type="hidden" id="<?php echo $i ?>-data" value="<?php echo base_url()?>delete_category/<?php echo $data[$i]['id_categoria'] ?>">
             <?php endfor; ?>


              <div class=" row ">
                            <div class="col-md-12">
                                    <?php if($this->session->flashdata('categoriaSuccess')): ?>
                                          <script> success('Categoria agregada correctamente'); </script>
                                   <?php endif; ?>

                                   <?php if($this->session->flashdata('categoriadelete')): ?>
                                          <script> success('Categoria eliminada correctamente'); </script>
                                   <?php endif; ?>


                                    <div class=" text-right">
                                       <a class="btn btn-success" href="<?php echo base_url()?>add_category">Agrega</a>
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
                                                <th>Descripción</th>
                                                <th>Eliminar</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tb">
                                          <?php for($i=0; $i < count($data); $i++):?>
                                           <tr>
                                             <td><?php echo ($i+1) ?></td>
                                            <td><?php echo $data[$i]['nombre'] ?></td>
                                            <td><?php echo $data[$i]['descripcion'] ?></td>
                                             <td><button id="<?php echo $i?>" type="button" class="btn btn-danger" onclick="del_categoria(this);"><i class="fas fa-trash-alt"></i></button></td>
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