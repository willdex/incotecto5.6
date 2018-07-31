 
<?php $__env->startSection('contenido'); ?>

<?php echo $__env->make('registrosproveedor.modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Listado de Proveedores <a href="registrosproveedor/create"><button class="btn btn-success">Nuevo</button></a></h3>
			<?php echo $__env->make('registrosproveedor.search', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		</div>
 
	</div> 
	
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-8 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>Id</th>
						<th>Correo</th>
						<!--<th>Password</th-->
						<th>Proveedor</th>
						<th>Telefono</th>
						<th>Direccion</th>
					
						<th>Opciones</th>
					
					</thead>
					<?php foreach($proveedores as $pro): ?>
					<tr>
						<td><?php echo e($pro->id); ?></td>
						<td><?php echo e($pro->correo); ?></td>
						<!--<td><?php echo e($pro->password); ?></td-->
						<td><?php echo e($pro->proveedor); ?></td>
						<td><?php echo e($pro->telefono); ?></td>
						<td><?php echo e($pro->direccion); ?></td>
					
						<td>
						<?php if(Auth::user()->privilegio != 2): ?>	
							<a href="<?php echo e(URL::action('RegistrosProveedorController@edit',$pro->id)); ?>"><button class="btn btn-primary">Editar</button></a>
						<?php endif; ?>
							<button class='btn btn-primary' style="font-size: 14px; background-color: green;" data-toggle="modal" data-target="#ModalAdjuntarCat" data-id="<?php echo e($pro->id); ?>" data-p="<?php echo e($pro->proveedor); ?>">ADD Categoria</button>

							<a href=""><button class="btn btn-danger" >Detalle</button></a>

							 
						</td>
					
					</tr>
					<?php endforeach; ?>
				</table>
			</div>
			<?php echo e($proveedores->render()); ?>

		</div>
	</div>
	<?php echo Html::script('js/jsmodal.js'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.cpanelp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>