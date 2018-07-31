  
<?php $__env->startSection('contenido'); ?> 


    <?php echo Html::style('css/perfilcss.css'); ?>


  <div class="row">

    <div class="col-lg-6">  

        <h3> Envíanos tu consulta </h3>

        <?php echo Form::open(['route'=>'ayudaemail.index', 'method'=>'POST']); ?>


          <div class="form-group">

            <label style="font-size: 18px;">Asunto:</label><br>
            <input type="text" class="form-control" name="asunto" id="asunto" placeholder="Asunto" required style="border-radius: 5px; width: 85%; margin-left: 1px;">

                <br>

            <label style="font-size: 18px;">Mensaje:</label>
            <textarea class="form-control" rows="5" name="mensaje" id="mensaje" placeholder="Mensaje" required style="border-radius: 5px; width: 85%;"></textarea>

            <input type="hidden" name="correo" value="<?php echo Auth::user()->correo; ?>">

          </div>

          <img src="images/cargando.gif" width="175" height="50" id="cargandoAyuda" style="display: none;">

          <button class="btn btn-lg btn-primary" type="submit" id="btnAyuda" name="btnAyuda">ENVIAR</button> <br><br>
 
        <?php echo Form::close(); ?>


        <?php echo $__env->make('alerts.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('alerts.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    </div>

    <div class="col-lg-6">  

        <center><i class="fa fa-building" aria-hidden="true" style="font-size: 35px;"></i>
        <strong style="font-size: 40px;">INCOTEC</strong></center>

        <br><br>

        <strong>Teléfono</strong><br>
        <i class="fa fa-phone-square" aria-hidden="true" style="font-size: 25px;"></i>
        <input type="text" name="" value="(591 3) 342-9522" readonly><br><br><br>

        <strong>Dirección</strong><br>
        <i class="fa fa-map-marker" aria-hidden="true" style="font-size: 25px;"></i>
        <input type="text" name="" value="5to. Anillo, esquina radial 27." readonly><br><br><br>

        <strong>Correo</strong><br>
        <i class="fa fa-at" aria-hidden="true" style="font-size: 25px;"></i>
        <a href="mailto:compras@incotec.cc"> <input type="text" name="" value="compras@incotec.cc" style="text-transform: lowercase;" readonly> </a> 
        <br><br>

    </div>

  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.cpanelp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>