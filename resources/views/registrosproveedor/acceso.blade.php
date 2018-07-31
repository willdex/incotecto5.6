  @extends ('layouts.cpanelp')
@section ('contenido') 





 <div class="col-lg-1">  
  </div>


  <!--div class="col-lg-10"-->  

<center> <h2 style="text-transform: uppercase; font-weight: bold;"> Lista de Proveedores </h2> </center>
    
    

    <div class="row">
      <div class="col-lg-12 col-md-12 col-xs-12">
        <div class="table-responsive"> 

      
          <table class="table table-striped table-bordered table-condensed table-hover" style="background: white">
              <thead>
                <th style="font-size: 16px;"><center>Proveedor</center></th>
                <th style="font-size: 16px;"><center>Correo</center></th>
                <th style="font-size: 16px;"><center>Teléfono</center></th>
                <th style="font-size: 16px;"><center>Dirección</center></th>
              </thead>
              <tbody align="center" id="body_empresa">          
              @foreach($prov as $user)
              <tr>
                <td style="font-size: 15px;">{{ $user->proveedor}}</td>          
                <td style="font-size: 15px;">{{ $user->correo}}</td>
                <td style="font-size: 15px;">{{ $user->telefono}}</td>
                <td style="font-size: 15px;">{{ $user->direccion}}</td>
              </tr>
              @endforeach
              </tbody>          
          </table>

      <div class="pull-left"> {!!$prov->render()!!}  </div>

      </div>
    </div>
  </div>

  <!--/div-->



    <div class="col-lg-1">  
    </div>


      




@endsection