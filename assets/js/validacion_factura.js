function successButton(){
    var determinarRegistroCliente = $('#si_no').val(); //determinamos si es 0 entonces es un nuevo registro si no entonces no lo es.

    //en el input ponemos la clase validateRED  y en el span colorRED

   // <div id="antes"><span class="colorRED"><small>Error</small></span></div>
    var contador = 0;
    
          
           if($('#nombreClienteNuevo').val() == ""){
                $('#spanClienteNuevo').remove();
               $('#nombreClienteNuevo').addClass('validateRED');
               $('#antesnombreClienteNuevo').append('<span id="spanClienteNuevo" class="colorRED"><small>Debe ingresar el nombre completo</small></span>');
               contador++;
           }
           else if($('#nombreClienteNuevo').val() != "")
           {
              $('#nombreClienteNuevo').removeClass('validateRED');
              $('#spanClienteNuevo').remove();
              if(contador >0){
              //  contador--;
              }

           }



           if($('#fechaClienteNuevo').val() == ""){
               $('#spanfechaClienteNuevo').remove();
               $('#fechaClienteNuevo').addClass('validateRED');
               $('#antesfechaClienteNuevo').append('<span id="spanfechaClienteNuevo" class="colorRED"><small>Debe seleccionar una fecha</small></span>');
               contador++;
           }
           else if($('#fechaClienteNuevo').val() != "")
           {
              $('#fechaClienteNuevo').removeClass('validateRED');
              $('#spanfechaClienteNuevo').remove();
              if(contador >0){
                //contador--;
              }
           }



            if($('#correoClienteNuevo').val() == ""){
               $('#spancorreoClienteNuevo').remove();
               $('#correoClienteNuevo').addClass('validateRED');
               $('#antescorreoClienteNuevo').append('<span id="spancorreoClienteNuevo" class="colorRED"><small>Campo no debe estar vacio</small></span>');
               contador++;
           }
           else if($('#correoClienteNuevo').val() != "")
           {
              $('#correoClienteNuevo').removeClass('validateRED');
              $('#spancorreoClienteNuevo').remove();
              if(contador >0){
                //contador--;
              }
           }



          if($('#facturaClienteNuevo').val() == ""){
               $('#spanfacturaClienteNuevo').remove();
               $('#facturaClienteNuevo').addClass('validateRED');
               $('#antesfacturaClienteNuevo').append('<span id="spanfacturaClienteNuevo" class="colorRED"><small>Campo no debe estar vacio</small></span>');
               contador++;
           }
           else if($('#facturaClienteNuevo').val() != "")
           {
              var factura = "";
              $('#facturaClienteNuevo').removeClass('validateRED');
              $('#spanfacturaClienteNuevo').remove();
              dato =  $('#facturaClienteNuevo').val();

                 $.ajax({
                 type: 'ajax',
                 method: 'post',
                 url: 'Factura_Controller/search_factura',
                 data: {dato: dato},
                 async: false,
                 dataType: 'json',
                 success: function(data){
                   factura = data;
                 },
                 error: function(){
                     alert("error");
                 }
                });

                 if(factura.length > 0){
                       $('#spanfacturaClienteNuevo').remove();
                       $('#facturaClienteNuevo').addClass('validateRED');
                       $('#antesfacturaClienteNuevo').append('<span id="spanfacturaClienteNuevo" class="colorRED"><small>Esta factura ya esta en uso</small></span>');
                       contador++;
                 }else{
                      $('#facturaClienteNuevo').removeClass('validateRED');
                      $('#spanfacturaClienteNuevo').remove();
                        if(contador >0){
                 //          contador--;
                        }
                 }
           }



           if($('#fechafactura').val() == ""){
               $('#spanfechafactura').remove();
               $('#fechafactura').addClass('validateRED');
               $('#antesfechafactura').append('<span id="spanfechafactura" class="colorRED"><small>Debe ingresar una fecha</small></span>');
               contador++;
 
           }
           else if($('#fechafactura').val() != "")
           {
              $('#fechafactura').removeClass('validateRED');
              $('#spanfechafactura').remove();

              if(contador >0){
                //contador--;
               }
           }



           if($('#softwareCONT').val() == 0){
               $('#spansoftwareCONT').remove();
               $('#antessoftwareCONT').append('<span id="spansoftwareCONT" class="colorRED">Debe agregar al menos un producto</small>');
               contador++;
 
           }
           else if($('#softwareCONT').val() > 0)
           {
              $('#spansoftwareCONT').remove();
               if(contador >0){
                
               }
           }


           if(contador == 0){
            $( "#send" ).submit();
           }

    //$( "#send" ).submit();
}