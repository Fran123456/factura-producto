<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
                <form class="form-horizontal" action="<?php echo base_url()?>Categoria_Controller/add" method="post">
                <div class="col-md-12">
                  <div class="card">
                                    <div class="card-header">
                                        <strong>Agrega una categoria</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        
                                            <div class="row form-group">
                                                <div class="col col-md-2">
                                                    <label class=" form-control-label" >Nombre:</label>
                                                </div>
                                                <div class="col-12 col-md-10">
                                                    <input required="" name="nombre" id="nombre"  class="form-control" id="hf-email" type="text"> 
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-2">
                                                    <label class=" form-control-label" for="hf-password">Descripción:</label>
                                                </div>
                                                <div class="col-12 col-md-10">
                                                    <textarea required="" rows="6" id="descripcion" name="descripcion" class="form-control"></textarea>
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