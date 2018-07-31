 @extends ('layouts.cpanelp')
@section ('contenido')

@include('registrosproveedor.modal')


	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Listado de Proveedores <a href="registrosproveedor/create"><button class="btn btn-success">Nuevo</button></a></h3>
			@include('registrosproveedor.search')
			@include('alerts.success')
          	@include('alerts.errors')
		</div>
 
	</div> 
	
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-8 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>Id</th>
						<th>Correo</th>
						<!--<th>Password</th-->
						<th>Proveedor</th>
						<th>Telefono</th>
						<th>Direccion</th>
					
						<th>Opciones</th>
					 
					</thead>
					@foreach($proveedores as $pro)
					<tr>
						<td>{{ $pro->id}}</td>
						<td>{{ $pro->correo}}</td>
						<!--<td>{{ $pro->password}}</td-->
						<td>{{ $pro->proveedor}}</td>
						<td>{{ $pro->telefono}}</td>
						<td>{{ $pro->direccion}}</td>
					
						<td>
						@if(Auth::user()->privilegio != 2)	
							<a href="{{URL::action('RegistrosProveedorController@edit',$pro->id)}}"><button class="btn btn-primary">Editar</button></a>
						@endif
							<button class='btn btn-primary' style="font-size: 14px; background-color: green;" data-toggle="modal" data-target="#ModalAdjuntarCat" data-id="{{$pro->id}}" data-p="{{$pro->proveedor}}">ADD Categoria</button>
							
							<a href="" data-target="#modal-delete-{{$pro->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>

							

							
						</td>
					
					</tr>
					@include('registrosproveedor.modalE')
					@endforeach
				</table>
			</div>
			{{$proveedores->render()}}
		</div>
	</div>
	{!!Html::script('js/jsmodal.js')!!}
	<script src="/js/laravel.js"></script>


@endsection