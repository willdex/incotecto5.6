<!-- Modal -->
<div id="ModalAdjudicar" data-backdrop="static" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">
    <!-- Modal content-->
    <div class="modal-content">

      <div class="modal-header" style="background: #3c8dbc; color: white">
        <h3 class="modal-title"><b>Adjudicación Total</b></h3>
      </div> 


      <div class="modal-body">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">


      {{Form::open(array('url' => 'adjudicar'))}}
         
              <div class="form-group">


                  <input type="hidden" class="form-control" name="txtidpublic" id="txtidpublic">

                  <input type="hidden" class="form-control" name="txttitulo" id="txttitulo">
      
                  <input type="hidden" class="form-control" name="txtcat" id="txtcat" value="">

                  {!!Form::label('titulo2','Título:')!!}
                  <input type="text" class="form-control" name="txttitulo2" id="txttitulo2" disabled>
                  <br>

                  {!!Form::label('estado','Estado:')!!}
                  <input type="text" class="form-control" name="txtestado" id="txtestado" value="activa" disabled>
                  <br>

                  {!!Form::label('categoria2','Categoría:')!!}
                  <input type="text" class="form-control" name="txtcat2" id="txtcat2" value="" disabled>
                  <br>

                   <!--?php $prov = DB::select('SELECT proveedor.id, proveedor FROM proveedor, prov_cat,categoria WHERE proveedor.id=prov_cat.id AND categoria.idcat=prov_cat.idcat AND categoria.nombre="" '); 
                   ?-->

                   <?php $prov = DB::select('SELECT * FROM proveedor'); 
                   ?>
                    
                    {!!Form::label('proveedor','Proveedor:')!!}
                  <select name="cboproveedor" id="cboproveedor" class="form-control selectpicker" data-live-search="true" required>
                    <option value=""> Seleccione Proveedor... </option>
                      @foreach($prov as $movC)
                        <option value="{{$movC->id}}">{{$movC->proveedor}}</option>
                      @endforeach
                  </select>
                  <br><br>

                  <img src="images/cargando.gif" width="175" height="50" id="cargandoAd" style="display: none;">

              </div>    

        </div>
      </div>


      <div class="modal-footer">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
 
           {!!Form::submit('ACEPTAR',['class'=>'btn btn-primary','id'=>'btnAdjudicar','name'=>'btnAdjudicar'])!!}

          {!!Form::close()!!}

          <button data-dismiss="modal" class="btn btn-danger" name="btnAdjudicarCancelar" id="btnAdjudicarCancelar">CANCELAR</button>

        </div>
      </div>

    </div>
  </div>
</div>
