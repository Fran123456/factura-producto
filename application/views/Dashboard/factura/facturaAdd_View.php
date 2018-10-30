<!DOCTYPE html>
<html>
<head>
	<title>Factura</title>
	<!--CARGAN ESTILOS Y BOOTSTRAP-->
	<?php require 'application/views/templates/autoload_bootstrap.php'; ?>
	<!--CARGAN ESTILOS Y BOOTSTRAP-->

    <script src="<?php echo base_url()?>assets/js/validacion_factura.js"></script>
    <style type="text/css">
         .validateRED{
            border: 1px solid red;
         }
         .colorRED{
            color: red;
         }
    </style>
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
                <form id="send"  action="<?php echo base_url()?>Factura_Controller/add" method="post">

                    <!--INPUTS IMPORTANTES QUE DETERMINAN EL FLUJO ALV >:v prro -->
                     <input type="hidden" name="si_no" id="si_no" value="0">
                     <!--INPUTS IMPORTANTES QUE DETERMINAN EL FLUJO ALV >:v prro -->
                     <div class="card-header text-center"> <h3>FORMULARIO PARA AGREGAR UNA FACTURA Y SUS PRODUCTOS</h3> <br> </div><br>
                      <div class="row">

                          <div class="col-lg-7 col-md-7 col-sm-12">
                                <div class="card">
                                    <div class="card-header">Cliente</div>
                                    <div class="card-body">
                                            <div class="card-title" >
                                            <h3 class="text-center title-2">Buscar cliente</h3>
                                            </div>
                                        
                                        <hr> 
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <label class="control-label mb-1" for="cc-payment">Buscar cliente</label>
                                                        <input id="buscarCliente"  name="buscarCliente " class="form-control"   type="text">
                                                        <div id="antesbuscarCliente">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <br>
                                                    <button onclick="get_clientes();" type="button" class="btn btn-success"><i class="fas fa-search"></i></button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="form-group" id="cont">
                                                        <label  class="control-label mb-1" for="cc-payment">Clientes encontrados</label>
                                                        <select class="form-control" id="clientesBuscados"  name="clientesBuscados"></select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <br>
                                                    <button id="enviarcliente" disabled=""  onclick="get_cliente();" type="button" class="btn btn-warning"><i class="fas fa-check"></i></button>
                                                </div>
                                            </div>

                                    </div>
                                </div>


                                <div class="card">
                                    <div class="card-header">Productos</div>
                                    <div class="card-body">
                                        <div class="row">
                                                    <div class="col-md-12">
                                                          <span>N° de productos: </span> <input type="text" value="0" id="softwareCONT" name="softwareCONT">
                                                         <div id="antessoftwareCONT">
                                                             
                                                         </div>
                                                         <table id="tab" class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>producto</th>
                                                                    <th>Cantidad</th>
                                                                    <th>Precio $</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="elementoTR">
                                                                
                                                            </tbody>
                                                         </table>
                                                         <button type="button" class="btn btn-danger" onclick="add_software();"><i class="fa fa-plus-circle" aria-hidden="true"></i></button>

                                                         <button type="button" class="btn btn-success" onclick="delete_software();"><i class="fa fa-trash" aria-hidden="true"></i></button>

                                                      <!--   <button type="button" class="btn btn-info" onclick="delete_();">ALL<i class="fa fa-ban" aria-hidden="true"></i></button>-->

                                                         <div class="form-group row">
                                                          <div class="col-md-6 text-right">
                                                            <br>
                                                            <label>Total a pagar $:</label>
                                                          </div>

                                                          <div class="col-md-6">
                                                            <br>
                                                           <input class="form-control" readonly="" id="suma"  type="text" name="suma"> 
                                                          </div>
                                                          </div>

                                                      </div>    
                                        </div>
                                    </div>
                                </div>



                                 <div class="card">
                                    <div class="card-header">Guardar datos</div>
                                    <div class="card-body">
                                        <div class="row">
                                             <div class="col-md-12">
                                                         <button onclick="successButton();"  type="button" class="btn btn-success">Guardar</button>
                                             </div>
                                            
                                        </div>
                                    </div>
                                </div>


                         </div>

                            


                         <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-md-6">Cliente </div>
                                            <div class="col-md-6 text-right"> <button type="button" onclick="return_nuevo();" class="btn btn-sm btn-danger"><i class="fas fa-undo-alt"></i></button> </div>
                                        </div>

                                    </div>

                                    <div class="card-body">
                                        <div id="nu">
                                              <div class="card-title" id="tituloR">
                                                 <h3 class="text-center title-2">Registrar cliente</h3>
                                              </div>
                                        </div>

                                        <hr> 
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label mb-1" >Codigo cliente:</label>
                                                        <input id="codeCliente" readonly=""   name="CodeCliente" value="<?php echo $code ?>" class="form-control"   type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group" >
                                                        <label  class="control-label mb-1">Nombre completo:</label>
                                                        <input  id="nombreClienteNuevo" name="nombreClienteNuevo"  class="form-control"   type="text">
                                                        <div id="antesnombreClienteNuevo">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group" >
                                                        <label  class="control-label mb-1">Dirección:</label>
                                                        <input  name="direccionClienteNuevo"  id="direccionClienteNuevo" class="form-control"   type="text">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group" >
                                                        <label  class="control-label mb-1">Fecha nacimiento:</label>
                                                        <input  id="fechaClienteNuevo" name="fechaClienteNuevo"   class="form-control"   type="date">
                                                        <div id="antesfechaClienteNuevo">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group" >
                                                        <label  class="control-label mb-1">Telefono:</label>
                                                        <input  id="numeroClienteNuevo"   name="numeroClienteNuevo"   class="form-control"   type="text">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group" >
                                                        <label  class="control-label mb-1">Correo electronico:</label>
                                                        <input   name="correoClienteNuevo"  id="correoClienteNuevo" class="form-control"   type="text">
                                                         <div id="antescorreoClienteNuevo">

                                                         </div>
                                                    </div>

                                                </div>
                                            </div>
                                    </div>
                                </div>





                                <div class="card">
                                    <div class="card-header">
                                        <div class="row">
                                            Factura
                                        </div>

                                    </div>
                                    <div class="card-body">
                                        <div id="nu">
                                              <div class="card-title" id="tituloR">
                                                 <h3 class="text-center title-2">Registrar factura</h3>
                                              </div>
                                        </div>

                                        <hr> 


                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group" >
                                                        <label  class="control-label mb-1">N° de factura:</label>
                                                        <input  value="<?php echo $factura ?>" name="facturaClienteNuevo"  id="facturaClienteNuevo" class="form-control"   type="text">
                                                        <div id="antesfacturaClienteNuevo">

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group" >
                                                        <label  class="control-label mb-1">Tipo de pago:</label>
                                                        <select id="selectpago" name="tipopago" class="form-control"></select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                     <div class="form-group" >
                                                        <label  class="control-label mb-1">Fecha:</label>
                                                        <input   id="fechafactura" name="fechafactura"   class="form-control"   type="date">
                                                         <div id="antesfechafactura">

                                                         </div>
                                                     </div>
                                                     
                                                </div>
                                            </div>

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
    <script>
        var codigoAntiguo = $("#codeCliente").val();
         let datos2 = "";
         let preciosProducto ="";

         $.ajax({
             type: 'ajax',
             method: 'post',
             url: '<?php echo base_url() ?>Factura_Controller/get_products',
             dataType: 'json',
             success: function(data){
                preciosProducto = data;
                for (var i = 0; i < data.length; i++) {
                     datos2 +='<option value="'+data[i].id_producto+'" >'+data[i].nombreP+'</option>';
                }
             },
             error: function(){
                 alert("error");
             }
          });

    function get_clientes(){
      var html = "";
      var dato1 = $('#buscarCliente').val();


      if(dato1 == ''){
               $('#spanbuscarCliente').remove();
               $('#buscarCliente').addClass('validateRED');
               $('#antesbuscarCliente').append('<span id="spanbuscarCliente" class="colorRED"><small>El campo no debe estar vacio</small></span>');
       // warning('Debe digitar un nombre');
      }
      else{
              var dato = dato1;
              $('#buscarCliente').removeClass('validateRED');
              $('#spanbuscarCliente').remove();
        $.ajax({
             type: 'ajax',
             method: 'post',
             url: '<?php echo base_url() ?>Factura_Controller/search_cliente',
             data: {dato: dato},
             async: false,
             dataType: 'json',
             success: function(data){
              $('#clientesBuscados').remove();
              for (var i = 0; i < data.length; i++) {
                  html += "<option value='"+data[i].id_cliente+"'>"+data[i].nombre+" - "+data[i].email+"  </option>";
              }

                if(html == ""){
                    $('#busquedaerror').remove();
                   $('#cont').append('<select class="form-control" id="clientesBuscados"  name="clientesBuscados"></select><span id="busquedaerror" class="colorRED"><smal>No hay datos que coincidan con la busqueda</smal></span>');
                   $('#clientesBuscados').addClass('validateRED');
                }else{
                     $('#busquedaerror').remove();
                     $('#cont').append('<select class="form-control" id="clientesBuscados"  name="clientesBuscados"></select>');
                     $('#enviarcliente').attr("disabled", false);
                     $('#clientesBuscados').append(html);
                }
                 
     

             },
             error: function(){
                 alert("error");
             }
          });
        }
      }


      function get_cliente(){
          dato =  $('#clientesBuscados').val();
          $('#si_no').val('1'); // cambiamos el estado de no encontrado a encontrando siendo 1 = encontrado :v
          $.ajax({
             type: 'ajax',
             method: 'post',
             url: '<?php echo base_url() ?>Factura_Controller/get_cliente',
             data: {dato: dato},
             async: false,
             dataType: 'json',
             success: function(data){
               $('#codeCliente').val(data[0].id_cliente);
               $('#nombreClienteNuevo').val(data[0].nombre);
               $('#direccionClienteNuevo').val(data[0].direccion);
               $('#fechaClienteNuevo').val(data[0].fecha_nacimiento);
               $('#numeroClienteNuevo').val(data[0].telefono);
               $('#correoClienteNuevo').val(data[0].email);

               $('#codeCliente').attr('readonly', true);
               $('#nombreClienteNuevo').attr('readonly', true);
               $('#direccionClienteNuevo').attr('readonly', true);
               $('#fechaClienteNuevo').attr('readonly', true);
               $('#numeroClienteNuevo').attr('readonly', true);
               $('#correoClienteNuevo').attr('readonly', true);
               $('#tituloR').remove();
               $('#nu').append('<div id="tituloR" class="card-title"><h3 class="text-center title-2">Cliente</h3></div>');
             },
             error: function(){
                 alert("error");
             }
          });
      }


      

   html = "";
   $.ajax({
     dataType: 'json',
     url: '<?php echo base_url()?>Factura_Controller/get_tipoPago',
     success: function(data){
        for (var i = 0; i < data.length; i++) {
           html +='<option value="'+data[i].num_pago+'" >'+data[i].nombreE+'</option>' 
        }

        $('#selectpago').append(html);
     },
     error: function(){
      alert('error');
     }
   });


    </script>
</body>
</html>