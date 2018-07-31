$(document).ready(function() { 

 	$('#btnsesion').click(function() {  

         if( ($("#email").val() != '') && ($("#pass").val() != '') ) {

            var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;

            if ( regex.test($('#email').val().trim()) ) {

                $("#btnsesion").css("display","none");
                $("#cargando").show();

            }
        }

 	});




    $('#btnPass').click(function() {  

        var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;

        if ( regex.test($('#emails').val().trim()) ) {

            $("#btnPass").css("display","none");
            $("#btnCancelarPass").css("display","none");
            $("#cargandoR").show();

        }
       
    });




    $('#btnR').click(function() {  

        var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;

        if ( regex.test($('#emailR').val().trim()) ) {

            $("#btnR").css("display","none");
            $("#cargandoR").show();

        }
       
    });



    $('#btnCrear').click(function() {  

        if ( ($("#txttitulo").val() != '') && ($("#txtlink").val() != '') && ($("#cbocategorias").val() != '') ) {

            $("#btnCrear").css("display","none");
            $("#btnCrearCancelar").css("display","none");
            
            $("#cargandoR").show();

        }
       
    });


    $('#btnAdjudicar').click(function() {  

        if ( $("#cboproveedor").val() != '' ) {

            $("#btnAdjudicar").css("display","none");
            $("#btnAdjudicarCancelar").css("display","none");

            $("#cargandoAd").show();

        }

    });


    $('#btnAdjudicarP').click(function() {  

        if ( ($("#cboproveedorP").val() != '') && ($("#mensajeAd").val() != '') ) {

            $("#btnAdjudicarP").css("display","none");
            $("#btnAdjudicarCancelarP").css("display","none");

            $("#cargandoAdP").show();

        }

    });


    $('#btnAdjudicarC').click(function() {  

        $("#btnAdjudicarC").css("display","none");
        $("#btnAdjudicarCancelarC").css("display","none");

        $("#cargandoAdC").show(); 

    });
  

    $('#btnc').click(function() {  

        if ( ($("#asunto").val() != '') && ($("#mensaje").val() != '') ) {

            $("#btnc").css("display","none");

            $("#cargandoc").show();

        }
       
    });

    $('#btnAcceso').click(function() {  

        if ( ($("#correo").val() != '') && ($("#password").val() != '') ) {

            $("#btnAcceso").css("display","none");

            $("#cargandoc").show();

        }
        
    });


    $('#btnAyuda').click(function() {  

        if ( ($("#asunto").val() != '') && ($("#mensaje").val() != '') ) {

            $("#btnAyuda").css("display","none");

            $("#cargandoAyuda").show();

        }
       
    });


 });