<?php echo Form::open(array('url'=>'convocatoriasactivas','method'=>'GET','autocomplete'=>'off','role'=>'search3')); ?>

<div class="form-group">
	<div class="input-group">
		
          	<input type="date" name="searchText3" id="searchText3" step="1" min="2018-04-09"value="<?php echo e($searchText3); ?>">				
			<input type="date" name="searchText4" id="searchText4"  step="1" min="2018-04-09"value="<?php echo e($searchText4); ?>">
			

		
		<!--input type="text" class="form-control" name="searchText" placeholder="Buscar..." value="<?php echo e($searchText); ?>"-->
		<span class="input-group-btn">
					
			<button type="submit" class="btn btn-primary">Buscar</button>
		</span>
	</div>
</div>

<?php echo e(Form::close()); ?>

