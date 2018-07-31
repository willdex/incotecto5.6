<?php echo Form::open(array('url'=>'consultar','method'=>'GET','autocomplete'=>'off','role'=>'search')); ?>

<div class="form-group">
	<div class="input-group">
		<?php $prov = DB::select('SELECT * FROM proveedor'); 
                   ?>
                      
                	   
                  <select name="searchText1" id="searchText1" class="form-control selectpicker" data-live-search="true" required>
                    <option value="<?php echo e($searchText1); ?>"><?php echo e($searchText1); ?></option>
                      <?php foreach($prov as $movC): ?>
                        <option value="<?php echo e($movC->id); ?>"><?php echo e($movC->proveedor); ?></option>
                      <?php endforeach; ?>
                  </select>
		
		<span class="input-group-btn">
			<button type="submit" class="btn btn-primary">Buscar</button>
		</span>
	</div>
</div>

<?php echo e(Form::close()); ?>

