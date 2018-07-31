function irarriba(){
$('html, body').animate({scrollTop:0}, 300);
}



  //leccion 8 y 9
$(document).on("submit",".formarchivo",function(e){

    
        e.preventDefault();
        var formu=$(this);
        var nombreform=$(this).attr("id");
        var rs=false; //leccion 10
        var seccion_sel=  $("#seccion_seleccionada").val();
        if(nombreform=="f_enviar_correo" ){ var miurl="enviar_correo";  var divresul="contenido_principal";   }

        //información del formulario
        var formData = new FormData($("#"+nombreform+"")[0]);



        

        //hacemos la petición ajax   
        $.ajax({
            url: miurl,  
            type: 'POST',
     
            // Form data
            //datos del formulario
            data: formData,
            //necesario para subir archivos via ajax
            cache: false,
            contentType: false,
            processData: false,
            //mientras enviamos el archivo
            beforeSend: function(){
              $("#"+divresul+"").html($("#cargador_empresa").html());                
            },
            //una vez finalizado correctamente
            success: function(data){
              $("#"+divresul+"").html(data);
              $("#fotografia_usuario").attr('src', $("#fotografia_usuario").attr('src') + '?' + Math.random() );  

                 if(rs ){
                         $('#'+nombreform+'').trigger("reset");
                         mostrarseccion(seccion_sel);
                        }             
            },
            //si ha ocurrido un error
            error: function(data){
               
                
            }
        });

irarriba();

});







//leccion 13

$(document).on("change",".email_archivo",function(e){
   
    var miurl="cargar_archivo_correo";
   // var fileup=$("#file").val();
    var divresul="texto_notificacion";

    var data = new FormData();
    data.append('file', $('#file')[0].files[0] );
 

   


  $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('#_token').val()
        }
    });


     $.ajax({
            url: miurl,  
            type: 'POST',
     
            // Form data
            //datos del formulario
            data: data,
            //necesario para subir archivos via ajax
            cache: false,
            contentType: false,
            processData: false,
            //mientras enviamos el archivo
            beforeSend: function(){
              $("#"+divresul+"").html($("#cargador_empresa").html());                
            },
            //una vez finalizado correctamente
            success: function(data){
              var codigo='<div class="mailbox-attachment-info"><a href="#" class="mailbox-attachment-name"><i class="fa fa-paperclip"></i>'+data+'</a><span class="mailbox-attachment-size"> </span></div>';
              $("#"+divresul+"").html(codigo);



                        
            },
            //si ha ocurrido un error
            error: function(data){
               $("#"+divresul+"").html(data);
                
            }
        });



})




