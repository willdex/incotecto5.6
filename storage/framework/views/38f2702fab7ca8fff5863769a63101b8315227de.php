<?php echo $__env->make('alerts.cargando', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('convocatoriasactivas.modalN', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


  <?php $__env->startSection('contenido'); ?>

<!-- Modal -->
<div id="ModalAdjuntar">
    <!-- Modal content-->
    <div class="modal-content">

      <div class="modal-header" style="background: #3c8dbc; color: white">
        <h3 class="modal-title"><b>Envíe su Propuesta</b></h3>
      </div> 


             <div class="row">

            
            <div class="col-md-12">


            <form  id="f_enviar_correo" name="f_enviar_correo"  action="enviar_correo"  class="formarchivo" enctype="multipart/form-data" method="post" >

             <input type="hidden" name="_token" id="_token"  value="<?php echo e(csrf_token()); ?>"> 

                  <div class="box box-primary">
                    <div class="box-header with-border" align="center">
                      <h2 class="box-title">Escriba su mensaje y Adjunte su propuesta</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                    
                     <!-- <div class="form-group">
                        <input class="form-control" placeholder="Para:" id="destinatario" name="destinatario">
                      </div>
                      <div class="form-group">
                        <input class="form-control" placeholder="Asunto:" id="asunto" name="asunto">
                      </div>-->
                      <div class="form-group">
                        <textarea id="contenido_mail" name="contenido_mail" class="form-control" style="height: 200px" placeholder="escriba aquí...">
                         
                        </textarea>
                      </div>
                      <div class="form-group">
                        <div class="btn btn-default btn-file">
                          <i class="fa fa-paperclip" ></i> Adjuntar Archivo
                          <input type="file"  id="file" name="file" class="email_archivo" value="1" >

                        </div>
                        <p class="help-block"  >Max. 20MB</p>
                        <div id="texto_notificacion"><span id="display"></span>
                        </div>
                      </div>


                    </div><!-- /.box-body -->
                    <div class="box-footer">
                      <div class="pull-right">
                     
                        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#ModalNoti"><i class="fa fa-envelope-o"></i> ENVIAR</button>
                        <img src="images/cargando.gif" width="175" height="50" id="cargando" style="display: none;">


          <?php echo Form::close(); ?>


          <button data-dismiss="modal" class="btn btn-danger" name="btnAdjudicarCancelarC" id="btnAdjudicarCancelarC">CANCELAR</button>

                      </div>
                   <br/>
                    </div><!-- /.box-footer -->
                  </div><!-- /. box -->

              </form>
            <!-- /.col -->
          </div><!-- /.row -->
              
   <script src="js/sistemalaravel.js"></script>
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