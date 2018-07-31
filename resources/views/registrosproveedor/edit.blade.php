@extends ('layouts.cpanelp')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Proveedor: {{ $proveedor->proveedor}}</h3>

         	
      
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

                        @foreach($cat as $mov)

                          <?php $ruta="convocatorias/".$mov->idcat;?>

                          <a href="{!!URL::to($ruta)!!}">

                            <?php $c = DB::select('select COUNT(*) as nro FROM convocatoria WHERE estado<>"inactiva" AND idcat='.$mov->idcat); ?>

                            @foreach($c as $mov2)

                            <button class="btn-sm btn-danger" type="button" style="font-size: 13px;">
                              {{$mov->nombre}} <span class="badge">{{$mov2->nro}}</span>
                            </button>

                            @endforeach

                          </a>

                        @endforeach
                                            
                      </div>        
                    </div><!-- /.row -->

                          <!--Contenido-->

                              @yield('contenido')   
                                                               
                           <!--Fin Contenido-->


                </div><!-- /.box-body -->
 		</div><!-- /.box -->

                 

			@if(count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!!Form::model($proveedor,['method'=>'PATCH','route'=>['registrosproveedor.update',$proveedor->id]])!!}
			{{Form::token()}}
			<div class="form-group">
				<label for="correo">Correo</label>
				<input type="text" name="correo" class="form-control" value="{{$proveedor->correo}}" placeholder="Correo...">
			</div>
			<!--<div class="form-group">
				<label for="password">Password</label>
				<input type="text" name="password" class="form-control" value="{{$proveedor->password}}"  placeholder="Password..." >
			</div-->
				<div class="form-group">
				<label for="proveedor">Proveedor</label>
				<input type="text" name="proveedor" class="form-control" value="{{$proveedor->proveedor}}" placeholder="Proveedor...">
			</div>
			<div class="form-group">
				<label for="telefono">Telefono</label>
				<input type="text" name="telefono" class="form-control" value="{{$proveedor->telefono}}" placeholder="Telefono...">
			</div>
			<div class="form-group">
				<label for="direccion">Direccion</label>
				<input type="text" name="direccion" class="form-control" value="{{$proveedor->direccion}}" placeholder="Direccion...">
			</div>
			
			<div class="form-group">
				<button class="btn btn-primary" type="submit">Guardar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>
			</div>

			{!!Form::close()!!}
			
		</div>
	</div>
             
@endsection