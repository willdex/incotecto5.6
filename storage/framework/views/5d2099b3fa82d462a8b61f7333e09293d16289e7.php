<!-- Modal -->
<div id="ModalAdjudicarC" data-backdrop="static" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">
    <!-- Modal content-->
    <div class="modal-content">

      <div class="modal-header" style="background: #3c8dbc; color: white">
        <h3 class="modal-title"><b>Cerrar Convocatoria</b></h3>
      </div> 


      <div class="modal-body">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">


      <?php echo e(Form::open(array('url' => 'cerrar'))); ?>

         
              <div class="form-group">

                  <input type="hidden" class="form-control" name="txtidpublic" id="txtidpublic">

                  <?php echo Form::label('titulo2','Título:'); ?>

                  <input type="text" class="form-control" name="txttitulo2" id="txttitulo2" disabled>
                  <br>

                  <?php echo Form::label('estado','Estado:'); ?>

                  <input type="text" class="form-control" name="txtestado" id="txtestado" value="activa" disabled>
                  <br>

                  <?php echo Form::label('categoria2','Categoría:'); ?>

                  <input type="text" class="form-control" name="txtcat2" id="txtcat2" value="" disabled>
                  <br>

                  <img src="images/cargando.gif" width="175" height="50" id="cargandoAdC" style="display: none;">

              </div>    

        </div>
      </div>


      <div class="modal-footer">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
 
           <?php echo Form::submit('ACEPTAR',['class'=>'btn btn-primary','id'=>'btnAdjudicarC','name'=>'btnAdjudicarC']); ?>


          <?php echo Form::close(); ?>


          <button data-dismiss="modal" class="btn btn-danger" name="btnAdjudicarCancelarC" id="btnAdjudicarCancelarC">CANCELAR</button>

        </div>
      </div>

    </div>
  </div>
</div>
