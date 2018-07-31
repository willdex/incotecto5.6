<!-- Modal -->
<div data-backdrop="static" class="modal fade" role="dialog" id="modal-delete-{{$pro->id}}">
  	<div class="modal-dialog modal-md">
    	
		    <div class="modal-content">

		      <div class="modal-header" style="background: #3c8dbc; color: white">
		        <h3 class="modal-title"><b>Eliminar Proveedor</b></h3>
		      </div> 


		       <div class="modal-body">
		        	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">


		      			{{Form::Open(array('action'=>array('RegistrosProveedorController@destroy',$pro->id),'method'=>'delete'))}}
		         
		              	<div class="form-group">
							<p>Confirme si desea Eliminar al Proveedor: {{$pro->proveedor}} </p>
		                  <img src="images/cargando.gif" width="175" height="50" id="cargandoAd" style="display: none;">

		              	</div>    

		        	</div>
		      	</div>


      	<div class="modal-footer">
        	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
 				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				<button type="submit" class="btn btn-primary">Confirmar</button>
        	</div>
      	</div>
	{{Form::Close()}}
    </div>
</div>
