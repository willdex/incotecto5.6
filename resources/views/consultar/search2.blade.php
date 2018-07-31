{!! Form::open(array('url'=>'consultar','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
<div class="form-group">
	<div class="input-group">
		<?php $prov = DB::select('SELECT * FROM categoria'); 
                   ?>
                      
                   
                  <select name="searchText2" id="searchText2" class="form-control selectpicker" data-live-search="true" required>
                    <option value="{{$searchText2}}">{{$searchText2}}</option>
                      @foreach($prov as $movC)
                        <option value="{{$movC->idcat}}">{{$movC->nombre}}</option>
                      @endforeach
                  </select>
		
		<span class="input-group-btn">
			<button type="submit" class="btn btn-primary">Buscar</button>
		</span>
	</div>
</div>

{{Form::close()}}
 