<!DOCTYPE html>
<html>
<head>
	<title><?php echo $data[0]['nombreP'] ?></title>
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
                <form class="form-horizontal" action="<?php echo base_url()?>Producto_Controller/edit" method="post">
                <div class="col-md-12">
                  <div class="card">
                                    <div class="card-header">
                                        <strong>Edita el producto: <?php echo $data[0]['nombreP'] ?></strong>
                                    </div>
                                    <div class="card-body card-block">
                                      <input type="text" name="id" hidden="" value="<?php echo $data[0]['id_producto'] ?>">
                                        
                                            <div class="row form-group">
                                                <div class="col col-md-2 text-right">
                                                    <label class=" form-control-label" >Nombre producto:</label>
                                                </div>
                                                <div class="col-12 col-md-10 col-sm-12">
                                                    <input required="" value="<?php echo $data[0]['nombreP'] ?>" name="nombre" id="nombreProducto"  class="form-control"  type="text"> 
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-1 col-sm-12 text-right">
                                                    <label class=" form-control-label" >Precio:</label>
                                                </div>
                                                <div class="col-6 col-md-2 col-sm-12">
                                                    <input required="" min="0.01" value="<?php echo $data[0]['precio'] ?>" name="precio"  class="form-control"  type="number" step="0.01"> 
                                                </div>
                                                <div class="col col-md-1 col-sm-12 text-right">
                                                    <label class=" form-control-label" >Stock:</label>
                                                </div>
                                                <div class="col-6 col-sm-12 col-md-2">
                                                    <input required=""  name="stock" value="<?php echo $data[0]['stock'] ?>" class="form-control" min="1" type="number"> 
                                                </div>

                                                <div class="col col-md-1 col-sm-12 text-right">
                                                    <label class=" form-control-label" >Categoria:</label>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-5">
                                                    <select class="form-control" name="categoria">
                                                        <?php for ($i=0; $i <count($categoriasData) ; $i++):?>
                                                        <?php if($data[0]['categoria_id'] == $categoriasData[$i]['id_categoria']): ?>
                                                        <option selected="" value="<?php echo $categoriasData[$i]['id_categoria'] ?>" ><?php echo $categoriasData[$i]['nombre'] ?></option>
                                                        <?php else: ?>
                                                           <option  value="<?php echo $categoriasData[$i]['id_categoria'] ?>" ><?php echo $categoriasData[$i]['nombre'] ?></option>
                                                        <?php endif; ?>


                                                        <?php endfor; ?>
                                                    </select> 
                                                </div>
                                            </div>
                                            
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <button class="btn btn-primary btn-sm" type="submit">
                                            <i class="fa fa-dot-circle-o"></i> Editar
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