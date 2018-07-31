<?php $__env->startSection('contenido'); ?> 

<?php echo $__env->make('convocatoriasactivas.modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('convocatoriasactivas.modalP', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <div class="row">


    <div class="col-lg-1">  
    </div>

 
<?php if(Auth::user()->privilegio != 1): ?>

  <div class="col-lg-10">  

    <?php foreach($idcategoria as $a): ?>

    <center> <h1 style="text-transform: uppercase; font-weight: bold;"> <?php echo e($a->nombre); ?> </h1> </center>

    <?php endforeach; ?>


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
          <?php foreach($idc as $mov): ?>
          <tr>
            <td style="font-size: 15px;"><?php echo e($mov->titulo); ?></td>          
            <td style="font-size: 15px;"><?php echo e($mov->nombre); ?></td>
            <td style="font-size: 15px;"><?php echo e($mov->fecha); ?></td>
            <td style="font-size: 15px;"> <a href="<?php echo nl2br(e($mov->descripcion)); ?>"><button class="btn btn-primary" style="font-size: 14px;"><i class="fa fa-download" aria-hidden="true" style="font-size: 18px;"></i> DESCARGAR</button></a> 
            

            <a href="<?php echo URL::to('form_enviar_correo'); ?>" class="small-box-footer" style="font-size: 17px;"><button class='btn btn-primary' style='background-color: black; font-size: 15px;'>Enviar Propuesta</button></a>

            </td>
          </tr>
          <?php endforeach; ?>
          </tbody>          
      </table>

      <div class="pull-left">  <?php echo $idc->render(); ?>  </div>

      </div>
    </div>


  </div>

<?php endif; ?> 

   <script src="js/sistemalaravel.js"></script>


<!-- //////////////////////////////////////// A D M I N //////////////////////////////////////////////////////// -->


<?php if(Auth::user()->privilegio == 1): ?>

  <div class="col-lg-10">  

    <?php foreach($idcategoria as $a): ?>

    <center> <h1 style="text-transform: uppercase; font-weight: bold;"> <?php echo e($a->nombre); ?> </h1> </center>

    <?php endforeach; ?>


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
          <?php foreach($idc as $mov): ?>
          <tr>
            <td style="font-size: 15px;"><?php echo e($mov->titulo); ?></td>          
            <td style="font-size: 15px;"><?php echo e($mov->nombre); ?></td>
            <td style="font-size: 15px;"><?php echo e($mov->fecha); ?></td>
            <td style="font-size: 15px;"> 

              <a href="<?php echo nl2br(e($mov->descripcion)); ?>"><button class="btn btn-primary" style="font-size: 14px;"><i class="fa fa-download" aria-hidden="true" style="font-size: 18px;"></i> DESCARGAR</button></a> 
              
            </td>
          </tr>
          <?php endforeach; ?>
          </tbody>          
      </table>

      <div class="pull-left">  <?php echo $idc->render(); ?>  </div>

      </div>
    </div>


  </div>

<?php endif; ?> 



    <div class="col-lg-1">  
    </div>


  </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.cpanelp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>