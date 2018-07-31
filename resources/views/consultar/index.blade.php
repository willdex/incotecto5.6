@extends ('layouts.cpanelp')
@section ('contenido') 




 

  <div class="row">

    <div class="col-lg-1">  
    </div>


    <div class="col-lg-10">  

        
        <center> <h2 style="text-transform: uppercase; font-weight: bold;"> Consultar </h2> </center>


 


<!-- ///////////////////////////////////////////////////////////////////////////////////////// -->

 



     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      	<table class="table table-striped table-bordered table-condensed table-hover" style="background: white">
      	<thead>
      	   <th style="font-size: 16px;">Proveedores:<center>@include('consultar.search1')</center></th>  
           <th style="font-size: 16px;">Categorias:<center>@include('consultar.search2')</center></th>                  
      	
      	</thead>
         <tbody align="center" id="body_empresa"> 
         @foreach($sqlAdm as $movAdm)
         <tr>
            <td style="font-size: 15px;">{{$movAdm->proveedor}}</td>

            <td style="font-size: 15px;">{{$movAdm->nombre}}</td>
         </tr>
         @endforeach
         </tbody>         
      	</table>
        <div class="pull-left"> {!!$sqlAdm->render()!!}  </div>
     </div>
     
     

      </div>
    </div>




</div>



    <div class="col-lg-1">  
    </div>

  </div>

  {!!Html::script('js/jsmodal.js')!!}
 
@endsection


