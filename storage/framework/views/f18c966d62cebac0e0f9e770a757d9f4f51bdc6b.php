<?php echo Form::open(array('url'=>'convocatoriasinactivas','method'=>'GET','autocomplete'=>'off','role'=>'search2')); ?>

<div class="form-group">
	<div class="input-group">
		<?php $prov = DB::select('SELECT * FROM categoria'); 
                   ?>
                      
                   
                  <select name="searchText2" id="searchText2" class="form-control selectpicker" data-live-search="true" required>
                    <option value="<?php echo e($searchText2); ?>"><?php echo e($searchText2); ?></option>
                      <?php foreach($prov as $movC): ?>
                        <option value="<?php echo e($movC->nombre); ?>"><?php echo e($movC->nombre); ?></option>
                      <?php endforeach; ?>
                  </select>
		<!--input type="text" class="form-control" name="searchText" placeholder="Buscar..." value="<?php echo e($searchText); ?>"-->
		<span class="input-group-btn">
			<button type="submit" class="btn btn-primary">Buscar</button>
		</span>
	</div>
</div>

<?php echo e(Form::close()); ?>

