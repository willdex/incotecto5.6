{!! Form::open(array('url'=>'convocatoriasaprobadas','method'=>'GET','autocomplete'=>'off','role'=>'search2')) !!}
<div class="form-group">
	<div class="input-group">
		<?php $prov = DB::select('SELECT * FROM categoria'); 
                   ?>
                      
                   
                  <select name="searchText2" id="searchText2" class="form-control selectpicker" data-live-search="true" required>
                    <option value="{{$searchText2}}">{{$searchText2}}</option>
                      @foreach($prov as $movC)
                        <option value="{{$movC->nombre}}">{{$movC->nombre}}</option>
                      @endforeach
                  </select>
		<!--input type="text" class="form-control" name="searchText" placeholder="Buscar..." value="{{$searchText}}"-->
		<span class="input-group-btn">
			<button type="submit" class="btn btn-primary">Buscar</button>
		</span>
	</div>
</div>

{{Form::close()}}
