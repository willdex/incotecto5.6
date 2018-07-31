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
      	    <th style="font-size: 16px;"><center>@include('proveedor.search1')</center></th>
            <th style="font-size: 16px;"><center>@include('proveedor.search2')</center></th>
                  
      	
      	</thead>
      	</table>
     </div>
     
     

      </div>
    </div>




</div>



    <div class="col-lg-1">  
    </div>

  </div>

  {!!Html::script('js/jsmodal.js')!!}
 
@endsection


