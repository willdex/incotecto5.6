  
<?php $__env->startSection('contenido'); ?> 


    <?php echo Html::style('css/perfilcss.css'); ?>


  <div class="row">

    <div class="col-lg-2">  
    </div>

    <div class="col-lg-8">  
        <strong>Proveedor</strong><br>
        <i class="fa fa-user-circle" aria-hidden="true" style="font-size: 25px;"></i>
        <input type="text" name="" value="<?php echo e(Auth::user()->proveedor); ?>" readonly><br><br><br>

        <strong>Teléfono</strong><br>
        <i class="fa fa-phone-square" aria-hidden="true" style="font-size: 25px;"></i>
        <input type="text" name="" value="<?php echo e(Auth::user()->telefono); ?>" readonly><br><br><br>

        <strong>Dirección</strong><br>
        <i class="fa fa-map-marker" aria-hidden="true" style="font-size: 25px;"></i>
        <input type="text" name="" value="<?php echo e(Auth::user()->direccion); ?>" readonly><br><br><br>

        <strong>Correo</strong><br>
        <i class="fa fa-at" aria-hidden="true" style="font-size: 25px;"></i>
        <input type="text" name="" value="<?php echo e(Auth::user()->correo); ?>" style="text-transform: lowercase;" readonly><br><br> 
    </div>

    <div class="col-lg-2">  
    </div>

  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.cpanelp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>