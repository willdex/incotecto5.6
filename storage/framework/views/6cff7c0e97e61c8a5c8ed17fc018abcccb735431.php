<?php echo $__env->make('alerts.cargando', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



  <?php $__env->startSection('contenido'); ?>

<!-- Modal -->
<div id="ModalAdjuntar">
    <!-- Modal content-->
    <div class="modal-content">

      <div class="modal-header" style="background: #3c8dbc; color: white">
        <h3 class="modal-title"><b>Envíe su Propuesta</b></h3>
      </div> 


            <?php if(Auth::user()->privilegio == 0): ?>

              <div class="col-lg-6">

                <h3> Envíanos tu consulta </h3>

                <?php echo Form::open(['route'=>'correo.store', 'method'=>'POST','url'=>'/uploadfile','files'=>'true']); ?>


                  <div class="form-group">

                       <?php $convo = DB::select('SELECT * FROM convocatoria WHERE estado="activa"'); 
                   ?>
                    
                    <?php echo Form::label('titulo','Convocatorias Activas:'); ?>

                  <select name="asunto" id="asunto" class="form-control selectpicker" data-live-search="true" required>
                    <option value=""> Seleccione la Convocatoria... </option>
                      <?php foreach($convo as $movC): ?>
                        <option value="<?php echo e($movC->titulo); ?>"><?php echo e($movC->titulo); ?></option>
                      <?php endforeach; ?>
                  </select>
                  <br><br>

                    <label style="font-size: 18px;">Mensaje:</label>
                    <textarea class="form-control" rows="5" name="mensaje" id="mensaje" placeholder="Mensaje" required style="border-radius: 5px; width: 100%;"></textarea>

                    <input type="hidden" name="correo" value="<?php echo Auth::user()->correo; ?>">
                    

                          <input type="file" name="image" multiple />


                  </div>

                  <img src="images/cargando.gif" width="175" height="50" id="cargandoc" style="display: none;">

                  <button class="btn btn-lg btn-primary" type="submit" id="btnc" name="btnc">ENVIAR</button> <br><br>
         
                <?php echo Form::close(); ?>


                <?php echo $__env->make('alerts.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php echo $__env->make('alerts.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

              </div>

        <?php endif; ?>
              
 <script src="js/jquery.js"></script>

    <?php echo Html::script('js/myjs.js'); ?>

    <?php echo Html::script('js/myjscargando.js'); ?>

    <script>
     
      function activareditor(){   
        $("#contenido_mail").wysihtml5();
      };

      activareditor();
    </script>



    </div>
  </div>
</div>

       
 




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.cpanelp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>