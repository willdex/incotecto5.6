<!-- Modal -->
<div data-backdrop="static" class="modal fade" role="dialog" id="modal-acceso-<?php echo e($pro->id); ?>">
  	<div class="modal-dialog modal-md">
    	
		    <div class="modal-content">

		      <div class="modal-header" style="background: #3c8dbc; color: white">
		        <h3 class="modal-title"><b>Eliminar Proveedor</b></h3>
		      </div> 


		       <div class="modal-body">
		        	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">


		      			<?php echo e(Form::Open(array('action'=>array('EnvioController@store',$pro->id),'method'=>'delete'))); ?>

		         
		              	<div class="form-group">
							<p>Confirme si desea Eliminar al Proveedor: <?php echo e($pro->proveedor); ?> </p>
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
	<?php echo e(Form::Close()); ?>

    </div>
</div>

