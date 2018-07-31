<?php echo Form::open(array('url'=>'accesos','method'=>'GET','autocomplete'=>'off','role'=>'search2')); ?>

<div class="form-group">
	<div class="input-group">
		<input type="text" class="form-control" name="searchText2" placeholder="Buscar Correo..." value="<?php echo e($searchText2); ?>">
		<span class="input-group-btn">
			<button type="submit" class="btn btn-primary">Buscar</button>
		</span>
	</div>
</div>

<?php echo e(Form::close()); ?> 