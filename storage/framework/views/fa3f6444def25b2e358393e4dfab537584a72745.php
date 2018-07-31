<!-- Modal -->
<div id="ModalAdjuntarCat" data-backdrop="static" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">
    <!-- Modal content-->
    <div class="modal-content">

      <div class="modal-header" style="background: #3c8dbc; color: white">
        <h3 class="modal-title"><b>Add Categoria</b></h3>
      </div> 


       <div class="modal-body">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">


      <?php echo e(Form::open(array('url' => 'adjuntarcategoria'))); ?>

         
              <div class="form-group">


                  <input type="hidden" class="form-control" name="txtid" id="txtid">


                  <?php echo Form::label('proveedor','Proveedor:'); ?>

                  <input type="text" class="form-control" name="txtproveedor" id="txtproveedor" disabled>
                  <br>

             

                   <!--?php $prov = DB::select('SELECT proveedor.id, proveedor FROM proveedor, prov_cat,categoria WHERE proveedor.id=prov_cat.id AND categoria.idcat=prov_cat.idcat AND categoria.nombre="" '); 
                   ?-->

                   <?php $cat = DB::select('SELECT * FROM categoria'); 
                   ?>
                    
                    <?php echo Form::label('idcat','Categoria:'); ?>

                  <select name="cbocategoria" id="cbocategoria" class="form-control selectpicker" data-live-search="true" required>
                    <option value=""> Seleccione Categoria... </option>
                      <?php foreach($cat as $movC): ?>
                        <option value="<?php echo e($movC->idcat); ?>"><?php echo e($movC->nombre); ?></option>
                      <?php endforeach; ?>
                  </select>
                  <br><br>

                  <img src="images/cargando.gif" width="175" height="50" id="cargandoAd" style="display: none;">

              </div>    

        </div>
      </div>


      <div class="modal-footer">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
 
           <?php echo Form::submit('ACEPTAR',['class'=>'btn btn-primary','id'=>'btnAdjudicar','name'=>'btnAdjudicar']); ?>


          <?php echo Form::close(); ?>


          <button data-dismiss="modal" class="btn btn-danger" name="btnAdjudicarCancelar" id="btnAdjudicarCancelar">CANCELAR</button>

        </div>
      </div>

    </div>
    </div>
  </div>
</div>
