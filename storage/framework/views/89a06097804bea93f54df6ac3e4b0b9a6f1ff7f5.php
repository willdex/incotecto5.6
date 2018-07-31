  
<?php $__env->startSection('contenido'); ?> 


  <div class="row">

    <div class="col-lg-1">  
    </div>
 

<div class="col-lg-10">  
        
        <center> <h2 style="text-transform: uppercase; font-weight: bold;"> Convocatorias Inactivas </h2> </center>


<?php if(Auth::user()->privilegio == 0): ?>

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
          <?php foreach($sql as $mov): ?>
          <tr>
            <td style="font-size: 15px;"><?php echo e($mov->titulo); ?></td>          
            <td style="font-size: 15px;"><?php echo e($mov->nombre); ?></td>
            <td style="font-size: 15px;"><?php echo e($mov->fecha); ?></td>
            <td style="font-size: 15px;"> <a href="<?php echo nl2br(e($mov->descripcion)); ?>"><button class="btn btn-primary" style="font-size: 14px;"><i class="fa fa-download" aria-hidden="true" style="font-size: 18px;"></i> DESCARGAR</button></a>
            </td>
          </tr>
          <?php endforeach; ?>
          </tbody>          
      </table>

      <div class="pull-left"> <?php echo $sql->render(); ?> </div>

      </div>
    </div>

<?php endif; ?> 




<?php if((Auth::user()->privilegio == 1) || (Auth::user()->privilegio == 2)): ?>

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
          <?php foreach($sqlAdm as $movAdm): ?>
          <tr>
            <td style="font-size: 15px;"><?php echo e($movAdm->titulo); ?></td>          
            <td style="font-size: 15px;"><?php echo e($movAdm->nombre); ?></td>
            <td style="font-size: 15px;"><?php echo e($movAdm->fecha); ?></td>
            <td style="font-size: 15px;"> <a href="<?php echo nl2br(e($movAdm->descripcion)); ?>"><button class="btn btn-primary" style="font-size: 14px;"><i class="fa fa-download" aria-hidden="true" style="font-size: 18px;"></i> DESCARGAR</button></a>
            </td>
          </tr>
          <?php endforeach; ?>
          </tbody>          
      </table>

      <div class="pull-left"> <?php echo $sqlAdm->render(); ?> </div>

      </div>
    </div>

  <?php endif; ?> 

</div>


    <div class="col-lg-1">  
    </div>

  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.cpanelp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>