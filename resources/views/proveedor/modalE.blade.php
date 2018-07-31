<!-- Modal -->
<div data-backdrop="static" class="modal fade" role="dialog" id="modal-acceso-{{$pro->id}}">
  	<div class="modal-dialog modal-md">
    	
		    <div class="modal-content">

		      <div class="modal-header" style="background: #3c8dbc; color: white">
		        <h3 class="modal-title"><b>Enviar Acceso Proveedor</b></h3>
		      </div> 
  

		       <div class="modal-body">
		        	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">




		      			 {!!Form::open(['route'=>'envio.store', 'method'=>'POST','url'=>'mailing'])!!}
		         

		      			  {!!Form::label('proveedor','Proveedor:')!!}
		                   <input type="text" class="form-control" name="proveedor" id="proveedor" readonly="readonly" value="{{$pro->proveedor}}">
		                  <br>
		                  
		                  {!!Form::label('correo','Correo:')!!}
		                  <input type="text" class="form-control" name="correo" id="correo" readonly="readonly" value="{{$pro->correo}}">
		                  <br>

		                  
		                  <input type="hidden" class="form-control" name="id" id="id" readonly="readonly" value="{{$pro->id}}">
		                  

		                 
                  
		                   <input type="hidden" id="password" name="password" value="{{$pro->password}}">
		              	

		        	</div>
		      	</div>

 
      	<div class="modal-footer">
        	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
 				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				<button type="submit" class="btn btn-primary" id="btnAcceso" name="btnAcceso">Confirmar</button>
        	</div>
      	</div>
	{{Form::Close()}}
    </div>

    <script src="js/jquery.js"></script>

    {!!Html::script('js/myjs.js')!!}
    {!!Html::script('js/myjscargando.js')!!}
    
</div>
