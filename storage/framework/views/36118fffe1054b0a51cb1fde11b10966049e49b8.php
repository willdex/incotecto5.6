<?php $__env->startSection('contenido'); ?>
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Proveedor: <?php echo e($proveedor->proveedor); ?></h3>

         	
      
              <div class="box">
              	<label for="direccion">Categoria</label>
                <!--div class="box-header with-border">
                  <h3 class="box-title">Sistema de Ventas</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div-->
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                      <div class="col-md-12">


                      <?php  $cat = DB::select('select categoria.idcat, nombre FROM prov_cat, categoria, proveedor WHERE categoria.idcat=prov_cat.idcat and proveedor.id=prov_cat.id AND proveedor.id='.$proveedor->id); ?>

                        <?php foreach($cat as $mov): ?>

                          <?php $ruta="convocatorias/".$mov->idcat;?>

                          <a href="<?php echo URL::to($ruta); ?>">

                            <?php $c = DB::select('select COUNT(*) as nro FROM convocatoria WHERE estado<>"inactiva" AND idcat='.$mov->idcat); ?>

                            <?php foreach($c as $mov2): ?>

                            <button class="btn-sm btn-danger" type="button" style="font-size: 13px;">
                              <?php echo e($mov->nombre); ?> <span class="badge"><?php echo e($mov2->nro); ?></span>
                            </button>

                            <?php endforeach; ?>

                          </a>

                        <?php endforeach; ?>
                                            
                      </div>        
                    </div><!-- /.row -->

                          <!--Contenido-->

                              <?php echo $__env->yieldContent('contenido'); ?>   
                                                               
                           <!--Fin Contenido-->


                </div><!-- /.box-body -->
 		</div><!-- /.box -->

                 

			<?php if(count($errors)>0): ?>
			<div class="alert alert-danger">
				<ul>
				<?php foreach($errors->all() as $error): ?>
					<li><?php echo e($error); ?></li>
				<?php endforeach; ?>
				</ul>
			</div>
			<?php endif; ?>

			<?php echo Form::model($proveedor,['method'=>'PATCH','route'=>['registrosproveedor.update',$proveedor->id]]); ?>

			<?php echo e(Form::token()); ?>

			<div class="form-group">
				<label for="correo">Correo</label>
				<input type="text" name="correo" class="form-control" value="<?php echo e($proveedor->correo); ?>" placeholder="Correo...">
			</div>
			<!--<div class="form-group">
				<label for="password">Password</label>
				<input type="text" name="password" class="form-control" value="<?php echo e($proveedor->password); ?>"  placeholder="Password..." >
			</div-->
				<div class="form-group">
				<label for="proveedor">Proveedor</label>
				<input type="text" name="proveedor" class="form-control" value="<?php echo e($proveedor->proveedor); ?>" placeholder="Proveedor...">
			</div>
			<div class="form-group">
				<label for="telefono">Telefono</label>
				<input type="text" name="telefono" class="form-control" value="<?php echo e($proveedor->telefono); ?>" placeholder="Telefono...">
			</div>
			<div class="form-group">
				<label for="direccion">Direccion</label>
				<input type="text" name="direccion" class="form-control" value="<?php echo e($proveedor->direccion); ?>" placeholder="Direccion...">
			</div>
			
			<div class="form-group">
				<button class="btn btn-primary" type="submit">Guardar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>
			</div>

			<?php echo Form::close(); ?>

			
		</div>
	</div>
             
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.cpanelp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>