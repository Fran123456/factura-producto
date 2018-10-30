

function reset(){
  $('#nombre').val("");
   $('#descripcion').val("");
}


function success(mensaje){
                swal({
                  type: 'success',
                 title: mensaje,
          });
 }


 function warning(mensaje){
                swal({
                  type: 'warning',
                  title: mensaje,
          });
 }


  function del_producto(comp){
      swal({
      title: '¿Seguro que desea eliminar el producto?',
      text: "",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Eliminar'
           }).then((result) => {
                   if (result.value) {
                   // var href = $(this).attr('href');
                   var id = comp.id
                   var direccion = $('#'+id + '-data').val();
                   location.href = direccion;
                }
            })
        }



    function del_categoria(comp){
      swal({
      title: '¿Seguro que desea eliminar la categoria?',
      text: "",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Eliminar'
           }).then((result) => {
                   if (result.value) {
                   // var href = $(this).attr('href');
                   var id = comp.id
                   var direccion = $('#'+id + '-data').val();
                   location.href = direccion;
                }
            })
  }


  function return_nuevo(){
               $('#si_no').val('0');
               $('#codeCliente').val(codigoAntiguo);
               $('#nombreClienteNuevo').val('');
               $('#direccionClienteNuevo').val('');
               $('#fechaClienteNuevo').val('');
               $('#numeroClienteNuevo').val('');
               $('#correoClienteNuevo').val('');
               $('#tituloR').remove();
               $('#nu').append('<div id="tituloR" class="card-title"><h3 class="text-center title-2">Registrar cliente</h3></div>');




               $('#nombreClienteNuevo').attr('readonly', false);
               $('#direccionClienteNuevo').attr('readonly', false);
               $('#fechaClienteNuevo').attr('readonly', false);
               $('#numeroClienteNuevo').attr('readonly', false);
               $('#correoClienteNuevo').attr('readonly', false);
 }


var cont = 11;



function delete_software(){

  if( $('#softwareCONT').val() == 0 ){
     

  }else{

     $("#elementoTR tr").last().remove();
     cont--;
     $("#softwareCONT").val(cont-11);
  }
 
}

function delete_(){
  $("#elementoTR").remove();
  var data = '<tbody id="elementoTR"></tbody>';
  $('#tab').append(data);
  cont = 0;
  $("#softwareCONT").val(cont);
  $('#suma').val('0');
}





     function add_software(){

           var data = '<tr>'+
                  '<td width="200"><select onchange="seleccion(this);" id="'+cont+'-producto" name="'+cont+'-producto" class="form-control">'+datos2+'</select></td>'+
                  '<td width="50"><input type="number" onchange="multiplicacion(this);" min="1"  id="'+cont+'-cantidad" value="1" name="'+cont+'-cantidad"  class="form-control"></td>'+
                  '<td width="100"><input type="text" readonly  id="'+cont+'-precio" name="'+cont+'-precio" class="form-control"></td>'+
                '</tr>';
           $("#elementoTR").append(data);
           cont++;

           $("#softwareCONT").val(cont-11);
 
            var od = '#' + (cont-1)+ '-producto';
            var ood = '#' + (cont-1)+ '-precio';
            var cantidadd = '#' + (cont-1)+ '-cantidad';
            var elemento = $(od).val();
            
            for (var i = 0; i < preciosProducto.length; i++) {
                 if(preciosProducto[i].id_producto  == elemento){
                    var datoSeleccionado  =  preciosProducto[i];
                 }    
                 
            }
            $(ood).val(datoSeleccionado.precio);
            

            $(cantidadd).attr({"max" : datoSeleccionado.stock});

            total1();

     }


     function multiplicacion(val){     

         
            var num =  val.id.substr(0,2);
            var id = '#'+ num + '-precio';
            var id2 = '#'+ num + '-producto';
            var valor = $(id).val();
            var selectvalor = $(id2).val();
         


           for (var i = 0; i < preciosProducto.length; i++) {
                 if(preciosProducto[i].id_producto  == selectvalor){
                    var datoSeleccionado  =  preciosProducto[i];
                 }    
            }

 
        
         var total = parseFloat(datoSeleccionado.precio) * parseFloat(val.value);
         var redondeado = Math.round(total * 100) / 100;
         $(id).val(redondeado);
         total1();

         
     }






     function seleccion(val){     
          var idElemento = val.value;
         
           for (var i = 0; i < preciosProducto.length; i++) {
                 if(preciosProducto[i].id_producto  == idElemento){
                    var datoSeleccionado  =  preciosProducto[i];
                 }    
            }

            var num =  val.id.substr(0,2);
            var precioid = '#'+ num + '-precio';
            var cantidadid = '#'+ num + '-cantidad';


            $(cantidadid).val('1');
            $(precioid).val(datoSeleccionado.precio);
            $(cantidadid).attr({"max" : datoSeleccionado.stock});
            total1();

     }




    function total1(){

        $("#suma").val('0');
         var cantidad =  $('#softwareCONT').val();
        var acumulador = 0;
         for (var w = 11; w < (parseFloat(cantidad)+11); w++) {
             acumulador = acumulador + parseFloat($('#'+(w)+'-precio').val());
         }



         var redondeado = Math.round(acumulador * 100) / 100;
         $("#suma").val(redondeado);
     }




