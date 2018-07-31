function verificar(){
    var email=$('input[name=email]').val();
    var password=$('input[name=password]').val();
    var token=$('#token').val();
    $.ajax({
            url:"login",
                headers: {'X-CSRF-TOKEN': token},
                 type: 'POST',
                  dataType: 'json',
                   data: {email:email, password:password},
              });
    
}

function ocultar(){
  $("#btn_ingresar").hide();
}