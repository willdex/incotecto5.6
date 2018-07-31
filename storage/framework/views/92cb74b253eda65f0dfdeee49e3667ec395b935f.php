<?php $__env->startSection('contenido'); ?>
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			  <h1>Cambiar mi password</h1>
			<?php if(Session::has('message')): ?>
			 <div class="text-danger">
			 <?php echo e(Session::get('message')); ?>

			 </div>
			<?php endif; ?>
			<hr />
			<form method="post" action="<?php echo e(url('registrosproveedor/updatepassword')); ?>">
			 <?php echo e(csrf_field()); ?>

			 <div class="form-group">
			  <label for="mypassword">Introduce tu actual password:</label>
			  <input type="password" name="mypassword" class="form-control">
			  <div class="text-danger"><?php echo e($errors->first('mypassword')); ?></div>
			 </div>
			 <div class="form-group">
			  <label for="password">Introduce tu nuevo password:</label>
			  <input type="password" name="password" class="form-control">
			  <div class="text-danger"><?php echo e($errors->first('password')); ?></div>
			 </div>
			 <div class="form-group">
			  <label for="mypassword">Confirma tu nuevo password:</label>
			  <input type="password" name="password_confirmation" class="form-control">
			 </div>
			 <button type="submit" class="btn btn-primary">Cambiar mi password</button>
			</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.cpanelp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>