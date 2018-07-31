
$('#ModalAdjudicar').on('show.bs.modal', function (event) {

      var button = $(event.relatedTarget) // Botón que activó el modal
      var idp = button.data('id') // Extraer la información de atributos de datos
      var titulo = button.data('t') // Extraer la información de atributos de datos
      var categoria = button.data('c') // Extraer la información de atributos de datos
      
      var modal = $(this)
      modal.find('.modal-body #txtidpublic').val(idp)
      modal.find('.modal-body #txttitulo2').val(titulo)
      modal.find('.modal-body #txtcat2').val(categoria)
      modal.find('.modal-body #txttitulo').val(titulo)
      modal.find('.modal-body #txtcat').val(categoria)

      $('.alert').hide();//Oculto alert


})

 
$('#ModalAdjudicarP').on('show.bs.modal', function (event) {

      var button = $(event.relatedTarget) // Botón que activó el modal
      var idp = button.data('id') // Extraer la información de atributos de datos
      var titulo = button.data('t') // Extraer la información de atributos de datos
      var categoria = button.data('c') // Extraer la información de atributos de datos
      
      var modal = $(this)
      modal.find('.modal-body #txtidpublic').val(idp)
      modal.find('.modal-body #txttitulo2').val(titulo)
      modal.find('.modal-body #txtcat2').val(categoria)
      modal.find('.modal-body #txttitulo').val(titulo)
      modal.find('.modal-body #txtcat').val(categoria)

      $('.alert').hide();//Oculto alert


})


$('#ModalAdjudicarC').on('show.bs.modal', function (event) {

      var button = $(event.relatedTarget) // Botón que activó el modal
      var idp = button.data('id') // Extraer la información de atributos de datos
      var titulo = button.data('t') // Extraer la información de atributos de datos
      var categoria = button.data('c') // Extraer la información de atributos de datos
      
      var modal = $(this)
      modal.find('.modal-body #txtidpublic').val(idp)
      modal.find('.modal-body #txttitulo2').val(titulo)
      modal.find('.modal-body #txtcat2').val(categoria)
      modal.find('.modal-body #txttitulo').val(titulo)
      modal.find('.modal-body #txtcat').val(categoria)

      $('.alert').hide();//Oculto alert


})


$('#ModalAdjuntarCat').on('show.bs.modal', function (event) {

      var button = $(event.relatedTarget) // Botón que activó el modal
      var id = button.data('id') // Extraer la información de atributos de datos
      var proveedor = button.data('p') // Extraer la información de atributos de datos
     
      
      var modal = $(this)
      modal.find('.modal-body #txtid').val(id)
      modal.find('.modal-body #txtproveedor').val(proveedor)
      
      
      

      $('.alert').hide();//Oculto alert


})



$('#ModalAdjuntar').on('show.bs.modal', function (event) {

      var button = $(event.relatedTarget) // Botón que activó el modal
      var titulo = button.data('t') // Extraer la información de atributos de datos
      
      var modal = $(this)
      modal.find('.modal-body #asunto').val(titulo)
     

      $('.alert').hide();//Oculto alert


})





$('#btnAdjudicarCancelar').click(function() {  

          $('#cboproveedor').val('');

});

$('#btnAdjudicarCancelarP').click(function() {  

          $('#cboproveedorP').val('');
          $("#mensajeAd").val('');

});



