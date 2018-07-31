<!-- Modal -->
<div id="ModalCrear" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">
    <!-- Modal content-->
    <div class="modal-content">

      <div class="modal-header" style="background: #3c8dbc; color: white">
        <h3 class="modal-title"><b>Nueva Convocatoria</b></h3>
      </div> 


      <div class="modal-body">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">


        {!!Form::open(['route'=>'convocatorias.store', 'method'=>'POST'])!!} 
         
              <div class="form-group">

                  {!!Form::label('titulo','Título:')!!}
                  <input type="text" class="form-control" name="txttitulo" id="txttitulo" placeholder="Introduce un título para la convocatoria..." required>
                  <br>

                  <input type="hidden" class="form-control" name="txtestado" id="txtestado" value="activa">

                  {!!Form::label('link','Link:')!!}
                  <input type="text" class="form-control" name="txtlink" id="txtlink" placeholder="Introduce el link de descarga..." required>
                  <br>

                   <?php  $cat = DB::select('select idcat, nombre FROM categoria'); ?>
                    
                    {!!Form::label('categoria','Categoría:')!!}
                  <select name="cbocategorias" id="cbocategorias" class="form-control selectpicker" data-live-search="true" required>
                    <option value=""> Buscar categoria... </option>
                      @foreach($cat as $movC)
                        <option value="{{$movC->idcat}}">{{$movC->nombre}}</option>
                      @endforeach
                  </select>
                  <br><br>

                  <img src="images/cargando.gif" width="175" height="50" id="cargandoR" style="display: none;">

              </div>    

        </div>
      </div>


      <div class="modal-footer">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
 
         {!!Form::submit('ACEPTAR',['class'=>'btn btn-primary','id'=>'btnCrear','name'=>'btnCrear'])!!}

          {!!Form::close()!!}
              <!--button class="btn btn-primary"  onclick="crearalimento()" id="btnregistrar">REGISTRAR</button-->
          <button data-dismiss="modal" class="btn btn-danger" id="btnCrearCancelar" name="btnCrearCancelar">CANCELAR</button>
       </div>
      </div>

    </div>
  </div>
</div>
