@extends ('layouts.cpanelp')
@section ('contenido')

	<div class="row"> 
		<div class="col-lg-12 col-md-12 col-sm-8 col-xs-12">
			<h3>Listado de Proveedores</h3>
			<table width="100%" style="border-spacing:0" >
				<thead>
						
						<th>@include('proveedor.search')</th>
						<th>@include('proveedor.search2')</th>
					
				</thead>
				
			</table>
			@include('alerts.success')
          @include('alerts.errors')
		</div>
 
	</div> 
	
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-8 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						
						<th>Proveedor</th>
						<th>Correo</th>
						
					
						<th>Opciones</th>
					
					</thead>
					@foreach($proveedores as $pro)
					<tr>
						
						<td>{{ $pro->proveedor}}</td>
						<td>{{ $pro->correo}}</td>
						
						 
						<td>
						
							<!--a href="" data-target="#modal-acceso-{{$pro->id}}" data-toggle="modal"><button class='btn btn-primary' style="font-size: 14px;" data-toggle="modal" data-target="#modalAcceso" >Enviar Acceso</button-->
							
							<a href="" data-target="#modal-acceso-{{$pro->id}}" data-toggle="modal"><button class='btn btn-primary' style="font-size: 14px;">Enviar Acceso</button>
						</td>
					
					</tr>
					@include('proveedor.modalE')
					@endforeach
				</table>
			</div>
			{{$proveedores->render()}}
		</div>
	</div>
	{!!Html::script('js/jsmodal.js')!!}



@endsection