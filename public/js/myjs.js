$(document).ready(function() { 

	 $("#btnR").attr("disabled","disabled");

	var image = ['jcvt synb', 'dstq klpx', 'cmne pivp', 'fdtu ynjf', 'piny fhxf', 'serp cqrf', 'yzds izvc'];
	var img = image[Math.floor(Math.random() * image.length)];
	$("#image").attr("src",'images/captcha/' + img + '.png');

	$("#txtcaptcha").keyup(function(e){
        var x = $(this).val();
        if(x==img){
            $("#btnR").removeAttr("disabled");
        }
        else{
          $("#btnR").attr("disabled","disabled");
        }
    });


 	$('#btn').click(function() {  
 		$("#btnR").attr("disabled","disabled");
 		$('#txtcaptcha').val('')
		var image = ['jcvt synb', 'dstq klpx', 'cmne pivp', 'fdtu ynjf', 'piny fhxf', 'serp cqrf', 'yzds izvc'];
		var img = image[Math.floor(Math.random() * image.length)];
		$("#image").attr("src",'images/captcha/' + img + '.png');

		$("#txtcaptcha").keyup(function(e){
        	var x = $(this).val();
        	if(x==img){
            	$("#btnR").removeAttr("disabled");
        	}
        	else{
          		$("#btnR").attr("disabled","disabled");
        	}
    	});
 	});


 });