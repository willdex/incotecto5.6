  @extends ('layouts.cpanelp')
@section ('contenido') 


    {!!Html::style('css/perfilcss.css')!!}

  <div class="row">

    <div class="col-lg-2">  
    </div>

    <div class="col-lg-8">  
        <strong>Proveedor</strong><br>
        <i class="fa fa-user-circle" aria-hidden="true" style="font-size: 25px;"></i>
        <input type="text" name="" value="{{Auth::user()->proveedor}}" readonly><br><br><br>

        <strong>Teléfono</strong><br>
        <i class="fa fa-phone-square" aria-hidden="true" style="font-size: 25px;"></i>
        <input type="text" name="" value="{{Auth::user()->telefono}}" readonly><br><br><br>

        <strong>Dirección</strong><br>
        <i class="fa fa-map-marker" aria-hidden="true" style="font-size: 25px;"></i>
        <input type="text" name="" value="{{Auth::user()->direccion}}" readonly><br><br><br>

        <strong>Correo</strong><br>
        <i class="fa fa-at" aria-hidden="true" style="font-size: 25px;"></i>
        <input type="text" name="" value="{{Auth::user()->correo}}" style="text-transform: lowercase;" readonly><br><br> 
    </div>

    <div class="col-lg-2">  
    </div>

  </div>

@endsection