{!! Form::open(array('url'=>'consultar','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
<div class="form-group">
	<div class="input-group">
		<?php $prov = DB::select('SELECT * FROM proveedor'); 
                   ?>
                      
                	   
                  <select name="searchText1" id="searchText1" class="form-control selectpicker" data-live-search="true" required>
                    <option value="{{$searchText1}}">{{$searchText1}}</option>
                      @foreach($prov as $movC)
                        <option value="{{$movC->id}}">{{$movC->proveedor}}</option>
                      @endforeach
                  </select>
		
		<span class="input-group-btn">
			<button type="submit" class="btn btn-primary">Buscar</button>
		</span>
	</div>
</div>

{{Form::close()}}
