
<?php $__env->startSection('contenido'); ?>

	<div class="row"> 
		<div class="col-lg-12 col-md-12 col-sm-8 col-xs-12">
			<h3>Listado de Proveedores</h3>
			<table width="100%" style="border-spacing:0" >
				<thead>
						
						<th><?php echo $__env->make('proveedor.search', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?></th>
						<th><?php echo $__env->make('proveedor.search2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?></th>
					
				</thead>
				
			</table>
			<?php echo $__env->make('alerts.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          <?php echo $__env->make('alerts.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		</div>
 
	</div> 
	
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-8 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						
						<th>Proveedor</th>
						<th>Correo</th>
						
					
						<th>Opciones</th>
					
					</thead>
					<?php foreach($proveedores as $pro): ?>
					<tr>
						
						<td><?php echo e($pro->proveedor); ?></td>
						<td><?php echo e($pro->correo); ?></td>
						
						 
						<td>
						
							<!--a href="" data-target="#modal-acceso-<?php echo e($pro->id); ?>" data-toggle="modal"><button class='btn btn-primary' style="font-size: 14px;" data-toggle="modal" data-target="#modalAcceso" >Enviar Acceso</button-->
							
							<a href="" data-target="#modal-acceso-<?php echo e($pro->id); ?>" data-toggle="modal"><button class='btn btn-primary' style="font-size: 14px;">Enviar Acceso</button>
						</td>
					
					</tr>
					<?php echo $__env->make('proveedor.modalE', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
					<?php endforeach; ?>
				</table>
			</div>
			<?php echo e($proveedores->render()); ?>

		</div>
	</div>
	<?php echo Html::script('js/jsmodal.js'); ?>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.cpanelp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>