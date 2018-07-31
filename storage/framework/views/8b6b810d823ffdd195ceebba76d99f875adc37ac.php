    
<?php $__env->startSection('contenido'); ?>
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo Proveedor</h3>
			<?php if(count($errors)>0): ?>
			<div class="alert alert-danger">
				<ul>
				<?php foreach($errors->all() as $error): ?>
					<li><?php echo e($error); ?></li>
				<?php endforeach; ?>
				</ul>
			</div>
			<?php endif; ?>

			<?php echo Form::open(array('url'=>'registrosproveedor','method'=>'POST','autocomplete'=>'off')); ?>

			<?php echo e(Form::token()); ?>

			<div class="form-group">
				<label for="correo">Correo</label>
				<input type="text" name="correo" class="form-control" placeholder="Correo...">
			</div>
			<!--<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" class="form-control" placeholder="Password...">
			</div-->
				<div class="form-group">
				<label for="proveedor">Proveedor</label>
				<input type="text" name="proveedor" class="form-control" placeholder="Proveedor...">
			</div>
			<div class="form-group">
				<label for="telefono">Telefono</label>
				<input type="text" name="telefono" class="form-control" placeholder="Telefono...">
			</div>
			<div class="form-group">
				<label for="direccion">Direccion</label>
				<input type="text" name="direccion" class="form-control" placeholder="Direccion...">
			</div>
		</div>
	</div>
	<!--
	<div class="row">
		<div class="panel panel-primary">
			<div class="panel-body">
				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
					<div class="form-group">
						<label>Categoria</label>
						<select name="pidcat" id="pidcat" class="form-control selectpicker" data-live-search="true">
							<?php foreach($categorias as $categoria): ?>
							<option value="<?php echo e($categoria->idcat); ?>"><?php echo e($categoria->nombre); ?></option>
							<?php endforeach; ?>
						</select>
					</div>
				</div>
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<div class="form-goup">
						<button type="button" id="bt_add" class="btn btn-primary">Agregar</button>
					</div>
				</div>
				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
					<table id="prov_cat" class="table table-striped table-bordered table-condensed table-hover">
						<thead style="background-color:#A9D0F5">
							<th>Opciones</th>
							<th>Categoria</th>
						</thead>
						
						<tbody>
							
						</tbody>
					</table>
				</div>
			</div>
		</div>-->

		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" id="guardar">
			<div class="form-group">
				<input name="_token" value="<?php echo e(csrf_token()); ?>"  type="hidden"></div>
				<button class="btn btn-primary" type="submit">Guardar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>
			</div>
		</div>
	</div>

			<?php echo Form::close(); ?>


<?php $__env->startPush('scripts'); ?>
<script>
	$(document).ready(function(){
		$('#bt_add').click(function(){
			agregar();
		});
	});
	cont=0;
	//$("#guardar").hide();

	function agregar(){
		idcat=$("#pidcat").val();
		cat=$("#pidcat option:selected").text();

		if(idcat!=""){
			var fila='<tr class="selected" id="fila'+cont+'"><td><button type="button" class="btn btn-warning" onclick="eliminar('+cont+');">X</button></td><td><input type="hidden" name="idcat[]" value="'+idcat+'">'+cat+'</td></tr>';
			cont++;
			limpiar();
			evaluar();
			$('#prov_cat').append(fila);
		}else{
			alert("Error.. debe seleccionar al menos una categoria");
		}

	}

	function limpiar(){

	}
	function evaluar(){
		if(cont>0){
			$("#guardar").show();
		}else{
			$("#guardar").hide();
		}
	} 

	function eliminar(index){
		$("#fila"+ index).remove();
		cont--;
		evaluar();
	}
</script>
<?php $__env->stopPush(); ?>			
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.cpanelp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>