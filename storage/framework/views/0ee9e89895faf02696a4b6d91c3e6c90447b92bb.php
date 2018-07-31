  
<?php $__env->startSection('contenido'); ?> 

<?php echo $__env->make('convocatoriasactivas.modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('convocatoriasactivas.modalP', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('convocatoriasactivas.modalC', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


  <div class="row">

  <?php if((Auth::user()->privilegio == 1) || (Auth::user()->privilegio == 2)): ?>

    <div class="col-lg-1">  
    </div>


    <div class="col-lg-10">  

        <center> <h2 style="text-transform: uppercase; font-weight: bold;"> Convocatorias Parciales </h2> </center>

      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <?php echo $__env->make('alerts.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="table-responsive" style="overflow-x:inherit">


      <table class="table table-striped table-bordered table-condensed table-hover" style="background: white">
          <thead>
            <th style="font-size: 16px;"><center>Título</center></th>
            <th style="font-size: 16px;"><center>Categoria</center></th>
            <th style="font-size: 16px;"><center>Proveedor</center></th>
            <th style="font-size: 16px;"><center>Fecha-Publicación</center></th>
            <th style="font-size: 16px;"><center>Opciones</center></th>
          </thead>
          <tbody align="center" id="body_empresa">          
          <?php foreach($sqlAdm as $movAdm): ?>
          <tr>
            <td style="font-size: 15px;"><?php echo e($movAdm->titulo); ?></td>          
            <td style="font-size: 15px;"><?php echo e($movAdm->nombre); ?></td>
            <td style="font-size: 15px;"><?php echo e($movAdm->proveedor); ?></td>
            <td style="font-size: 15px;"><?php echo e($movAdm->fecha); ?></td> 
            <td style="font-size: 15px;"> 

              <a href="<?php echo nl2br(e($movAdm->descripcion)); ?>"><button class="btn btn-primary" style="font-size: 14px;"><i class="fa fa-download" aria-hidden="true" style="font-size: 15px;"></i> DESCARGAR</button></a> 

              <button class="btn btn-warning" style="font-size: 14px;" data-toggle="modal" data-target="#ModalAdjudicarP" data-id="<?php echo e($movAdm->idpublic); ?>" data-t="<?php echo e($movAdm->titulo); ?>" data-c="<?php echo e($movAdm->nombre); ?>"><i class="fa fa-file-text" aria-hidden="true" style="font-size: 15px;"></i> ADJUDICAR-PARCIAL</button>

              <button class="btn btn-danger" style="font-size: 14px;" data-toggle="modal" data-target="#ModalAdjudicarC" data-id="<?php echo e($movAdm->idpublic); ?>" data-t="<?php echo e($movAdm->titulo); ?>" data-c="<?php echo e($movAdm->nombre); ?>"><i class="fa fa-times" aria-hidden="true"></i> CERRAR</button>

            </td>
          </tr>
          <?php endforeach; ?>
          </tbody>          
      </table>

      <div class="pull-left"> <?php echo $sqlAdm->render(); ?>  </div>

      </div>
    </div>

    </div>


    <div class="col-lg-1">  
    </div>


  <?php endif; ?> 

  </div> 

  <?php echo Html::script('js/jsmodal.js'); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.cpanelp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>