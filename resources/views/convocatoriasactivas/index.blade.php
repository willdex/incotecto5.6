@extends ('layouts.cpanelp')
@section ('contenido') 

@include('convocatoriasactivas.modal')
@include('convocatoriasactivas.modalP')
@include('convocatoriasactivas.modalN')
@include('convocatoriasactivas.modalC')

@if((Auth::user()->privilegio == 1))

  
  <div class="row">

    <div class="col-lg-1">  
    </div>

    <div class="col-lg-3">

        <div class="small-box bg-yellow">
            <div class="inner">
              <?php  $nro2 = DB::select('SELECT COUNT(*) as cant FROM convocatoria WHERE estado="parcial"'); ?>
                @foreach($nro2 as $res2)
                  <h3>{{$res2->cant}}</h3>
                @endforeach
              <p style="font-size: 17px;">Adjudicación Parcial</p>
            </div>

            <div class="icon">
              <i class="fa fa-file-text-o" aria-hidden="true"></i>
            </div>
            <a href="{!!URL::to('parciales')!!}" class="small-box-footer" style="font-size: 15px;">Ver Todas <i class="fa fa-plus-circle" aria-hidden="true"></i></a>
        </div>
          
    </div>

    <div class="col-lg-1">  
    </div>

  </div>

@endif 


  <div class="row">

    <div class="col-lg-1">  
    </div>


    <div class="col-lg-10">  

        
        <center> <h2 style="text-transform: uppercase; font-weight: bold;"> Convocatorias Activas </h2> </center>


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


<button class='btn btn-primary' style='background-color: black; font-size: 15px;'  data-t="{{$mov->titulo}}" data-toggle="modal" data-target="#ModalAdjuntar" >Enviar Propuesta</button></a>

@include('convocatoriasactivas.modalA')

            </td>
          </tr>
          @endforeach
          </tbody>          
      </table>

      <div class="pull-left"> {!!$sql->render()!!}  </div>
   <script src="js/sistemalaravel.js"></script>

      </div>
    </div>


@endif 



<!-- ///////////////////////////////////////////////////////////////////////////////////////// -->

 

@if(Auth::user()->privilegio == 1)

     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      	<table class="table table-striped table-bordered table-condensed table-hover" style="background: white">
      	<thead>
      	    <th style="font-size: 16px;"><center>@include('convocatoriasactivas.search')</center></th>
                  <th style="font-size: 16px;"><center>@include('convocatoriasactivas.search2')</center></th>
                  <th style="font-size: 16px;"><center>@include('convocatoriasactivas.search3')</center></th>
      	
      	</thead>
      	</table>
     </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        @include('alerts.success')
        @include('alerts.errors')
        <div class="table-responsive" style="overflow-x:inherit">


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
            <td style="font-size: 15px;"> 

              <a href="{!! nl2br(e($movAdm->descripcion)) !!}"><button class="btn btn-primary" style="font-size: 14px;"><i class="fa fa-download" aria-hidden="true" style="font-size: 18px;"></i> DESCARGAR</button></a> 

              <button class="btn btn-success" style="font-size: 14px;" data-toggle="modal" data-target="#ModalAdjudicar" data-id="{{$movAdm->idpublic}}" data-t="{{$movAdm->titulo}}" data-c="{{$movAdm->nombre}}"><i class="fa fa-file-text" aria-hidden="true" style="font-size: 17px;"></i> ADJUDICAR-TOTAL</button>

              <button class="btn btn-warning" style="font-size: 14px;" data-toggle="modal" data-target="#ModalAdjudicarP" data-id="{{$movAdm->idpublic}}" data-t="{{$movAdm->titulo}}" data-c="{{$movAdm->nombre}}"><i class="fa fa-file-text" aria-hidden="true" style="font-size: 17px;"></i> ADJUDICAR-PARCIAL</button>

            </td>
          </tr>
          @endforeach
          </tbody>          
      </table>

      <div class="pull-left"> {!!$sqlAdm->render()!!}  </div>

      </div>
    </div>

@endif 

 

</div>



    <div class="col-lg-1">  
    </div>

  </div>

  {!!Html::script('js/jsmodal.js')!!}
 
@endsection


