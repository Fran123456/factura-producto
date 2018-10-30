<!DOCTYPE html>
<html>
<head>
	<title>agrega producto</title>
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
                <form class="form-horizontal" action="<?php echo base_url()?>Producto_Controller/add" method="post">
                <div class="col-md-12">
                  <div class="card">
                                    <div class="card-header">
                                        <strong>Agrega un producto</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        
                                            <div class="row form-group">
                                                <div class="col col-md-2 text-right">
                                                    <label class=" form-control-label" >Nombre producto:</label>
                                                </div>
                                                <div class="col-12 col-md-10 col-sm-12">
                                                    <input required="" name="nombre" id="nombreProducto"  class="form-control"  type="text"> 
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-1 col-sm-12 text-right">
                                                    <label class=" form-control-label" >Precio:</label>
                                                </div>
                                                <div class="col-6 col-md-2 col-sm-12">
                                                    <input required="" min="0.01" value="0.01" name="precio" i class="form-control"  type="number" step="0.01"> 
                                                </div>
                                                <div class="col col-md-1 col-sm-12 text-right">
                                                    <label class=" form-control-label" >Stock:</label>
                                                </div>
                                                <div class="col-6 col-sm-12 col-md-2">
                                                    <input required=""  name="stock" value="1" class="form-control" min="0" type="number"> 
                                                </div>

                                                <div class="col col-md-1 col-sm-12 text-right">
                                                    <label class=" form-control-label" >Categoria:</label>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-5">
                                                    <select class="form-control" name="categoria">
                                                        <?php for ($i=0; $i <count($data) ; $i++):?>
                                                        <option value="<?php echo $data[$i]['id_categoria'] ?>" ><?php echo $data[$i]['nombre'] ?></option>
                                                        <?php endfor; ?>
                                                    </select> 
                                                </div>
                                            </div>
                                            
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <button class="btn btn-primary btn-sm" type="submit">
                                            <i class="fa fa-dot-circle-o"></i> Agregar
                                        </button>
                                        <button class="btn btn-danger btn-sm" onclick="reset();" type="button">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                    </div>
                                </div>
                      </div>
               </form>
             <!--CODIGO DE LA APLICACION-->

   
           </div>
		  </div>
		</div>
	   </div>
     </div>
     <!--CARGAN LOS SCRIPTS-->
	<?php require 'application/views/templates/autoload_scripts.php'; ?>
	<!--CARGAN LOS SCRIPTS-->

</body>
</html>