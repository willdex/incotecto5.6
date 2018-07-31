  @extends ('layouts.cpanelp')
@section ('contenido') 


  <div class="row">

    <div class="col-lg-1">  
    </div>
 

<div class="col-lg-10">  
        
        <center> <h2 style="text-transform: uppercase; font-weight: bold;"> Convocatorias Inactivas </h2> </center>


@if(Auth::user()->privilegio == 0)

      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive" style="overflow-x:inherit">


      <table class="table table-striped table-bordered table-condensed table-hover" style="background: white">
          <thead>
            <th style="font-size: 16px;"><center>Título</center></th>
            <th style="font-size: 16px;"><center>Categoria</center></th>
            <th style="font-size: 16px;"><center>Fecha-Publicación</center></th>
            <th style="font-size: 16px;"><center>Opciones</center></th>
          </thead>
          <tbody align="center" id="body_empresa">          
          @foreach($sql as $mov)
          <tr>
            <td style="font-size: 15px;">{{$mov->titulo}}</td>          
            <td style="font-size: 15px;">{{$mov->nombre}}</td>
            <td style="font-size: 15px;">{{$mov->fecha}}</td>
            <td style="font-size: 15px;"> <a href="{!! nl2br(e($mov->descripcion)) !!}"><button class="btn btn-primary" style="font-size: 14px;"><i class="fa fa-download" aria-hidden="true" style="font-size: 18px;"></i> DESCARGAR</button></a>
            </td>
          </tr>
          @endforeach
          </tbody>          
      </table>

      <div class="pull-left"> {!!$sql->render()!!} </div>

      </div>
    </div>

@endif 




@if((Auth::user()->privilegio == 1) || (Auth::user()->privilegio == 2))

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="table-responsive" style="overflow-x:inherit">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <table class="table table-striped table-bordered table-condensed table-hover" style="background: white">
        <thead>
            <th style="font-size: 16px;"><center>@include('convocatoriasinactivas.search')</center></th>
                  <th style="font-size: 16px;"><center>@include('convocatoriasinactivas.search2')</center></th>
                  <th style="font-size: 16px;"><center>@include('convocatoriasinactivas.search3')</center></th>
        
        </thead>
        </table>
     </div>

      <table class="table table-striped table-bordered table-condensed table-hover" style="background: white">
          <thead>
            <th style="font-size: 16px;"><center>Título</center></th>
            <th style="font-size: 16px;"><center>Categoria</center></th>
            <th style="font-size: 16px;"><center>Fecha-Publicación</center></th>
            <th style="font-size: 16px;"><center>Opciones</center></th>
          </thead>
          <tbody align="center" id="body_empresa">          
          @foreach($sqlAdm as $movAdm)
          <tr>
            <td style="font-size: 15px;">{{$movAdm->titulo}}</td>          
            <td style="font-size: 15px;">{{$movAdm->nombre}}</td>
            <td style="font-size: 15px;">{{$movAdm->fecha}}</td>
            <td style="font-size: 15px;"> <a href="{!! nl2br(e($movAdm->descripcion)) !!}"><button class="btn btn-primary" style="font-size: 14px;"><i class="fa fa-download" aria-hidden="true" style="font-size: 18px;"></i> DESCARGAR</button></a>
            </td>
          </tr>
          @endforeach
          </tbody>          
      </table>

      <div class="pull-left"> {!!$sqlAdm->render()!!} </div>

      </div>
    </div>

  @endif 

</div>


    <div class="col-lg-1">  
    </div>

  </div>

@endsection