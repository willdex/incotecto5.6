<!-- Modal -->
<div data-backdrop="static" class="modal fade" role="dialog" id="modal-acceso-<?php echo e($pro->id); ?>">
  	<div class="modal-dialog modal-md">
    	
		    <div class="modal-content">

		      <div class="modal-header" style="background: #3c8dbc; color: white">
		        <h3 class="modal-title"><b>Enviar Acceso Proveedor</b></h3>
		      </div> 
  

		       <div class="modal-body">
		        	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">




		      			 <?php echo Form::open(['route'=>'envio.store', 'method'=>'POST','url'=>'mailing']); ?>

		         

		      			  <?php echo Form::label('proveedor','Proveedor:'); ?>

		                   <input type="text" class="form-control" name="proveedor" id="proveedor" readonly="readonly" value="<?php echo e($pro->proveedor); ?>">
		                  <br>
		                  
		                  <?php echo Form::label('correo','Correo:'); ?>

		                  <input type="text" class="form-control" name="correo" id="correo" readonly="readonly" value="<?php echo e($pro->correo); ?>">
		                  <br>

		                  
		                  <input type="hidden" class="form-control" name="id" id="id" readonly="readonly" value="<?php echo e($pro->id); ?>">
		                  

		                 
                  
		                   <input type="hidden" id="password" name="password" value="<?php echo e($pro->password); ?>">
		              	

		        	</div>
		      	</div>

 
      	<div class="modal-footer">
        	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
 				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				<button type="submit" class="btn btn-primary" id="btnAcceso" name="btnAcceso">Confirmar</button>
        	</div>
      	</div>
	<?php echo e(Form::Close()); ?>

    </div>

    <script src="js/jquery.js"></script>

    <?php echo Html::script('js/myjs.js'); ?>

    <?php echo Html::script('js/myjscargando.js'); ?>

    
</div>
